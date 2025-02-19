<?php
    
    $quantidade = $_GET['Quantidade'];
    

    if($quantidade<=12)
    {
        $resultado = $quantidade * 1.30;
        echo '<h1>O valor a ser pago é: '.$resultado.'</h1>';
    }
    else($quantidade<12)
    {
        $resultado2 = $quantidade * 1.00;
        echo '<h1>O valor a ser pago é: '.$resultado.'</h1>'
    }


?>