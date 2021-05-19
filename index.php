<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>

<!-- 
    PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60

 -->
    
    <?php
    
    $matches = [
        [
            'home_team' => 'Dinamo',
            'home_scores' => 70,
            'guest_team' => 'Milano',
            'guest_scores' => 30,
        ],
        [
            'home_team' => 'Roma',
            'home_scores' => 45,
            'guest_team' => 'Rieti',
            'guest_scores' => 51,
        ],
        [
            'home_team' => 'Torino',
            'home_scores' => 40,
            'guest_team' => 'Genova',
            'guest_scores' => 23,
        ],
        [
            'home_team' => 'Venezia',
            'home_scores' => 47,
            'guest_team' => 'Mestre',
            'guest_scores' => 33,
        ],
    ]

    ?>

    <h1>Snack 1: Classifica Campionato:</h1>

    <ul>
    <?php
    for($ì = 0; $ì < count($matches); $ì++) {?>
        <li>
            <h2>Squadra in casa: <?php echo $matches[$ì]['home_team']; ?></h2>
            <h2>Squadra ospite: <?php echo $matches[$ì]['guest_team']; ?></h2>
            <h2>Risultato: <?php echo $matches[$ì]['home_team']; ?> - <?php echo $matches[$ì]['guest_team']; ?> | 
            <?php echo $matches[$ì]['home_scores']; ?> - <?php echo $matches[$ì]['guest_scores']; ?> </h2>
            <br>
            
        </li>
        <?php } ?>
    </ul>
    <!-- 
        PHP Snack 2:
Passare come parametri GET (query string) name, mail e age
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri
2. che mail contenga un punto e una chiocciola
3. che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
     -->

     <h1>Snack 2: Verifica accesso</h1>
     <?php
     
        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];

        if(
           strlen($name) > 2 &&
            (strpos($mail, '@') && strpos($mail,'.')) && 
            (is_nan($age) === false)

            
        ){
            echo "<h3>Accesso Riuscito</h3>";
        }else{
            echo "<h3>Accesso Negato </h3>";
        }


     ?>

    





    <!-- 
        PHP Snack 3 Bonus (solo come bonus e solo se completati i due precedenti)
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
     -->

     <?php
     
        $numbers = [];

        for($i = 0; $i <  15; $i++){

            $numero = rand(1, 100);

            if(in_array($numero, $numbers) === false){
                $numbers[] = $numero;
            }
            else{
                $i--;
            }
        }

        ?>
    <h1>Snack 3: L'array con 15 numeri diversi tra loro è: </h1>
    <?php var_dump($numbers);?>

</body>
</html>