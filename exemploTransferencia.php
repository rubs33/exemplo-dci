<?php
/**
 * Caso de uso que ilustra uma transferência de valores entre contas bancárias.
 */
require_once('autoload.php');

// Usamos os elementos no contexto de "Transferencia"
use Context\Transferencia\Operacao;
use Context\Transferencia\ContaDebito;
use Context\Transferencia\ContaDeposito;

// Carregamos as contas bancárias envolvidas, cada um com um papel
$contaDebito   = new ContaDebito(1);
$contaDeposito = new ContaDeposito(2);

// Mostramos o saldo de cada conta antes da transferência
fprintf(STDOUT, "Saldos antes da transferência:\n");
fprintf(STDOUT, "Conta 1: %0.2f\n", $contaDebito->obterSaldo());
fprintf(STDOUT, "Conta 2: %0.2f\n", $contaDeposito->obterSaldo());

// Realizamos a transferência de 200.00 de uma conta para outra
$transferencia = new Operacao($contaDebito, $contaDeposito);
$transferencia->transferir(200.00);

// Mostramos o saldo de cada conta após a transferência
fprintf(STDOUT, "Saldos após a transferência:\n");
fprintf(STDOUT, "Conta 1: %0.2f\n", $contaDebito->obterSaldo());
fprintf(STDOUT, "Conta 2: %0.2f\n", $contaDeposito->obterSaldo());
exit(0);