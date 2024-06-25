<?php 
include 'functions.php'

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Esercizio php-strong-password-generator</title>
</head>

<body>
    <div class="container-xl">
                <h1 class="text-center m-5">Password Generator</h1>
                <div class="row d-flex">
                    <div class="col-12 text-center">
                        <form action="index.php" method="GET">
                            <label for="numeroCaratteri"> Inserisci numero caratteri </label>
                            <input type="number" name="numeroCaratteri">
                            <button class="btn btn-primary">Genera Password</button>
                        </form>
                    </div>
                    <div class="col-12 text-center">
                        <h2>Risultato :</h2>
                        <h3><?php echo $passowrdGenerata ?></h3>
                    </div>
    </div>
</body>

</html>
