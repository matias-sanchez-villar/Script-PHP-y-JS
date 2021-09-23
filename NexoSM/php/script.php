<?php
session_start();

function getID ($Array)
{
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        if(0 == intval($id)%2 && is_numeric($id) && $id < 10 && $id >= 2)
        {
            array_push($Array, $id);
            $_SESSION['Array'] = $Array;
        }
        header("Location: ../index.php");
    }
}

if(isset($_SESSION['Array']))
{
    getID($_SESSION['Array']);
}
else
{
    getID($Array = array());
}

?>

<a href="../index.php">Regresar</a>
