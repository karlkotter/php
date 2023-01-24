<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="container">
    <h1>Harjutus 3</h1>
    <form action="h03.php" method="get">
    Trapetsi esimene alus: <input type="number" name="$alus1" required><br>
    Trapetsi teine alus: <input type="number" name="alus2" required><br>
    Trapetsi kõrgus:<input type="number" name="korgus" required><br>
    <input type="submit" value="Arvuta" class="btn btn-success"><br>
    </form>
    
    <?php
        /*
        Karl Eerik Kotter
        24.01.23
        ulesanded 1 ja 2
        */

    #Küsi kasutajalt vajalikud parameetrid ning leia:
        #trapetsi pindala,
        #rombi ümbermõõt

        $alus1 = "";
        $alus2 = "";
        $korgus = "";

        echo $alus1;
    ?>
    </div>
</body>
</html>
