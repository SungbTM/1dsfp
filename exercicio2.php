<?php
    $salario = $_GET['salario'];
    if($salario<=3000)
    {
        $renda = $salario / 15%;
        $inss = $salario / 8%;
        $resultado = $renda + $inss
        echo '<h1>O valor é: '.$resultado.'</h1>';
        echo '<h2>Em cima do seu Salário bruto foi descontado o INSS e o seu Imposto de Renda</h2>'
    }
    else($salario<3000)
    {
        $renda = $salario / 27%;
        $inss = $salario / 14%;
        $resultado = $renda + $inss;
        echo '<h1>O valor é: '.$resultado.'</h1>';
        echo '<h2>Em cima do seu Salário bruto foi descontado o INSS e o seu Imposto de Renda</h2>';
    }


?>