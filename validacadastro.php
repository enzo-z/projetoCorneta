<?php
    session_start();
    $method = $_SERVER['REQUEST_METHOD'];

    if($method == 'POST'){
        //echo "<h1>CHEGOU</h1>";
        $inputedata = [
            'login' => $_POST['nome'],
            'password' => $_POST['password'],
            'nome' => $_POST['nome'],
            'sobrenome' => $_POST['sobrenome'],
            'idade' => $_POST['idade'],
            'sexo' => $_POST['sexo'],
            //TIME TESTING
            'nome_time' => $_POST['nome_time'],
        ];

        if(checkData($inputedata)){
            require_once("mysqli_connect.php");
            $createquery = ("INSERT INTO usuario VALUES")

        };
        
        
    }



    function checkData($inputedata){
        $datamissing = array();
        foreach ($inputedata as $key => $value) {
            trim($value);
            if(empty($value)){
                $datamissing[$key] = "$key";
            }
        }
        
        if(!empty($datamissing)){ //Adicionar um echo script q dispara uma função de missingdata no JS.
            //Depois, modificar isso com uma regular expression
            echo 'You need to enter the following data: <br/>';
            foreach($datamissing as $missing){
	             echo "$missing<br />";
            }
        }
        else{
            return true;
        }
        

    }
