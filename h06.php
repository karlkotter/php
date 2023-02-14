<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>H06</title>
    <style>
.container {
  width: 1200px;
  padding-top: 60px;
  background-color: #ffffff;
}
body {
  background-color: #505050;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Harjutus 06</h1>
        <?php
        #Genereeri
        #– loo arvud 1-100
        #– loo pärast iga 10 arvu reavahetus
        #– lisa iga arvu järele punkt (N: 1. 2. 3. jne…)
        $numbrid = range(1,100);
        while ($numbrid <= 10) {
            echo $numbrid . "<br>";
        }

    ?>
</div>
</body>
</html>