<?php

function criarConta(string $cpf,string $nomeTitular,float $saldo): array
{
    return [
        $cpf => [
            'titular' => $nomeTitular,
            'saldo' => $saldo,

        ]
    ];
}
/* php -a (no terminal)
 php require 'src/conta.php';
$conta = criarConta('123.456.789-10', 'Vinicius Dias', 500);
var_dump($conta); // Observe que a conta foi criada corretamente
$conta['123.456.789-10']['saldo'] -= 700;                   // ao inves de sacar o valor, criou outra conta
var_dump($conta); // Verifique que uma nova conta foi criada de forma incorreta
 */
