<?php
    function checkData($inputeData) : bool{
        $dataMissing = array();
        foreach ($inputeData as $key => $value) {
            trim($value);
            if(empty($value)){
                $dataMissing[$key] = "$key";
            }
        }
        
        if(!empty($dataMissing)){ //Adicionar um echo script q dispara uma função de missingdata no JS.
            //Depois, modificar isso com uma regular expression, no futuro
            echo 'You need to enter the following data: <br/>';
            foreach($dataMissing as $missing){
	             echo "$missing<br />";
            }
            return false;
        }
        else{
            return true;
        }
    }