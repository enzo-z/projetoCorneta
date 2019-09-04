<?php   
    function aumentaTorcida($time){
        require("mysqli_connect.php");
        $updateQuery = "UPDATE time SET qntd_torcedores = qntd_torcedores + 1 WHERE nome = '$time'";
        $response = mysqli_query($dbaseConnection, $updateQuery);
        if (!$response){
            echo mysqli_error($dbaseConnection);
        }
        mysqli_close($dbaseConnection);
        return;
    }