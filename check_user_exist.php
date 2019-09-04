<?php
function checkUserExist($inputeData) : bool{
    require_once("mysqli_connect.php");
    $loginQuery = "SELECT login FROM usuario";
    $response = mysqli_query($dbaseConnection, $loginQuery);
    if($response){
        while($row = mysqli_fetch_array($response)){
            if ($row['login'] == $inputeData['login']){
                return true;
            }
            else{
                return false;
            }
        }
    }
    else{
        echo "Ocorreu um erro na hora de saber se o usuário já existe! <br />";
        echo mysqli_error($dbaseConnection);
    }
    mysqli_close($dbaseConnection);

}