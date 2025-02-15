<php
header("charset=utf-8");
    //coletar os dados e atribuir variaveis
    if(isset($_POST['n1'])&& isset($_POST['n2']!=='')&& isset($_POST['n3'])){
    echo isset ($n1 = $_POST['n1']));
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    //calcular a media
    $media = ($n1+$n2+$n3)/3;
    //exibir a media
    echo 'Sua média é: '.number_format($media, 2, ",",".");
    }else{
        echo 'Todas as notas são obrigatórias';
    }




>