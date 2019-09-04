<?php  
    function createUser($inputeData){
        //require('update_time.php');
        require('mysqli_connect.php');
        $createQuery = "INSERT INTO usuario (user_id, login, password, nome, sobrenome, idade, sexo, nome_time) 
        VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";
        /*S, S, S, S, I, S, S */
        if($stmt = mysqli_prepare($dbaseConnection, $createQuery)){

            //Bind parameters
            mysqli_stmt_bind_param($stmt, "ssssiss", $inputeData['login'], $inputeData['password'], $inputeData['nome'],
            $inputeData['sobrenome'], $inputeData['idade'], $inputeData['sexo'], $inputeData['nome_time']);

            
            //Execute stmt
            mysqli_stmt_execute($stmt);
            
            //TESTING THE AFFECTED ROWS:

            $affectedRows = mysqli_stmt_affected_rows($stmt);
            if($affectedRows == 1){
                echo '<h1>USUÁRIO CRIADO COM SUCESSO!</h1>';
                }
            else{
                echo "<h1>Error na criação de usuário: </h1>";
            }
            
            mysqli_stmt_close($stmt);
        }
        mysqli_close($dbaseConnection);

        die();
            
            /*switch ($inputeData['nome_time']) {
            case 'Botafogo':
                # code...
                break;
            case 'Flamengo':
                //UPDATE TIME
                break;
            case 'Fluminense':
                
                break;
            case 'Vasco':
                break;
        }*/
    }