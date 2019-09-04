<?php
    require("check_user_data.php");
    require("check_user_exist.php");
    require("create_user.php"); 
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == 'POST'){
        //echo "<h1>CHEGOU</h1>";
        $inputeData = [
            'login' => $_POST['login'],
            'password' => $_POST['password'],
            'nome' => $_POST['nome'],
            'sobrenome' => $_POST['sobrenome'],
            'idade' => $_POST['idade'],
            'sexo' => $_POST['sexo'],
            //TIME TESTING
            'nome_time' => $_POST['nome_time'],
        ];

        if(checkData($inputeData) && !checkUserExist($inputeData)) {
            createUser($inputeData);

        };
        
        
    }
