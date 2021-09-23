<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script solicitado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-auto p-5">

            <form class="row g-3" method="GET" action="php/script.php">
                <div class="col-auto">
                <input id="ID" type="text" name="id" class="form-control" placeholder="ID">
                </div>
                <div class="col-auto">
                <button id="btnEnviar" type="submit" class="btn btn-primary mb-3">Enviar</button>
                </div>
            </form>

        </div>
    </div>

    <div id="ScriptJS">
        <h2>Numeros pares desde JS</h2>
    </div>
    <br>
    <h2>Numeros pares desde PHP</h2>
    <?php
        session_start();
        if(isset($_SESSION['Array']))
        {
            $Array = $_SESSION['Array'];
            foreach ($Array as $valor) {
                echo "Ingresé al array y tengo el ID " . $valor . "<br>";
            }
        }
    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>
</html>