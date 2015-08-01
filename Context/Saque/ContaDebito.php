<?php
/**
 * Classe que define o papel de uma Conta Bancária para realização de débito
 * no contexto de um saque bancário.
 * A classe terá todas as características de uma Conta Bancária
 * mais as características de uma conta "Debitável".
 */
namespace Context\Saque;

final class ContaDebito extends \Data\ContaBancaria
{
    use \Interaction\Debitavel;
}
