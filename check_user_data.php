<?php
    function checkData($inputedata) : bool{
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
            return false;
        }
        else{
            return true;
        }
        

    }