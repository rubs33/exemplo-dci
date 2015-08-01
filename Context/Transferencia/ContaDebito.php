<?php
/**
 * Classe que define o papel de uma Conta Bancária para realização de débito
 * no contexto de uma transferência bancária entre contas.
 * A classe terá todas as características de uma Conta Bancária
 * mais as características de uma conta "Debitável".
 */
namespace Context\Transferencia;

final class ContaDebito extends \Data\ContaBancaria
{
    use \Interaction\Debitavel;
}
