<?php 
    require_once('mysqli_connect.php');
    //echo('<h1>Teste o connect</h1>');
    $query = ("SELECT * FROM time"); 
    $response = mysqli_query($dbaseconnection, $query);

    if ($response){
        echo '<table> <tr>';
        echo '<th>Nome</th>';
        echo '<th>Qntd Torcedores</th>';
        echo '<th>Qntd Jogadores</th>';
        echo '</tr>';
        while ($row = mysqli_fetch_array($response)){
            echo '<tr>';
            echo '<td>' . $row['nome'] . '</td>';
        }

    }
    else{
        echo 'Houve erro no query!';
        echo mysqli_error($dbaseconnection);
    }
    
    mysqli_close($dbaseconnection);