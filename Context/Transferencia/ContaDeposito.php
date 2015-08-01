<?php
/**
 * Classe que define o papel de uma Conta Bancária para realização de depósito
 * no contexto de uma transferência bancária entre contas.
 * A classe terá todas as características de uma Conta Bancária
 * mais as características de uma conta "Creditável".
 */
namespace Context\Transferencia;

final class ContaDeposito extends \Data\ContaBancaria
{
    use \Interaction\Creditavel;
}