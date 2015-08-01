<?php
/**
 * Caso de uso que ilustra o saque de um valor de uma conta bancária.
 */
require_once('autoload.php');

// Usamos os elementos no contexto de "Saque"
use Context\Saque\Operacao;
use Context\Saque\ContaDebito;

// Carregamos a conta bancária envolvida
$contaDebito = new ContaDebito(1);

// Mostramos o saldo da conta antes do saque
fprintf(STDOUT, "Saldo antes do saque:\n");
fprintf(STDOUT, "Conta 1: %0.2f\n", $contaDebito->obterSaldo());

// Realizamos o saque de 300.00
$saque = new Operacao($contaDebito);
$saque->sacar(300.00);

// Mostramos o saldo da conta após o saque
fprintf(STDOUT, "Saldo após a transferência:\n");
fprintf(STDOUT, "Conta 1: %0.2f\n", $contaDebito->obterSaldo());
exit(0);