<php
    //captura valor usando $_GET
    //Atribui em variaveis
    $nome = $_POST['usuario'];
    $email = $_POST['email'];
    //exibe os dados 
    echo '<h3>Bem vindo, '.$nome.'</h3><h4>Seu e-mail: '.$email.'</h4>';
?>
