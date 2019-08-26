<?php
    session_start();
    $createquery = ("INSERT INTO usuario VALUES ");
    $method = $_SERVER['REQUEST_METHOD'];

    if($method == 'POST'){
        $inputedata = [
            'login' => $_POST['nome'],
            'password' => $_POST['password'],
            'nome' => $_POST['nome'],
            'sobrenome' => $_POST['sobrenome'],
            'idade' => $_POST['idade'],
            'sexo' => $_POST['sexo'],
            //TIME TESTING
            'time' => 'Flamengo',
        ];
        checkData($inputedata);
        
    }



    function checkData($inputedata){
        $datamissing = array();
        foreach ($inputedata as $index => $value) {
            trim($check);
            if(empty($value)){
                $datamissing = key($inputedata[$index]);
            }
        }
        
        if(!empty($datamissing)){
            echo 'You need to enter the following data<br />';
            foreach($datamissing as $missing){
	             echo "$missing<br />";
            }
        }
        else{
            require_once('mysqli_connect.php');

        }
        

    }
