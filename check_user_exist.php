<?php
function checkUserExist($inputedata) : bool{
    require_once("mysqli_connect.php");
    $loginquery = "SELECT login FROM usuario";
    $response = mysqli_query($dbaseconnection, $loginquery);
    if($response){
        while($row = mysqli_fetch_array($response)){
            if ($row['login'] == $inputedata['login']){
                return true;
            }
        }
    }
    else{
        echo "Ocorreu um erro na hora de saber se o usuário já existe! <br />";
        echo mysqli_error($dbaseconnection);
    }
    mysqli_close($dbaseconnection);

}