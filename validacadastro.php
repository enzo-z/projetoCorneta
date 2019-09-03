<?php
    $method = $_SERVER['REQUEST_METHOD'];
    require("check_user_exist.php");
    require("create_user.php"); 
    require("check_user_data.php");
    if($method == 'POST'){
        //echo "<h1>CHEGOU</h1>";
        $inputedata = [
            'login' => $_POST['login'],
            'password' => $_POST['password'],
            'nome' => $_POST['nome'],
            'sobrenome' => $_POST['sobrenome'],
            'idade' => $_POST['idade'],
            'sexo' => $_POST['sexo'],
            //TIME TESTING
            'nome_time' => $_POST['nome_time'],
        ];

        if(checkData($inputedata) && checkUserExist($inputedata)) {
            createUser($inputedata);

        };
        
        
    }
