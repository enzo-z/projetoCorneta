<?php
    define('USER', 'bacanudo');
    define('PASSWORD', 'bacaninha');
    define('HOST', 'localhost');
    define('NAMEDB', 'loginrenato');
    //echo '<h1>Include test</h1>';
    $dbaseConnection = mysqli_connect(HOST, USER, PASSWORD, NAMEDB);

    if(!$dbaseConnection){
        die('Erro de conexão: ' . mysqli_connect_error());
    }

    //Lembre-se, utilizar UPDATE para evitar superposição. Afinal, quando você quer alterar o valor de algo
    // já existente, você está atualizando-o. 
    // Example: UPDATE time SET qntd_torcedores = qntd_torcedores + 1 WHERE nome='Botafogo';
