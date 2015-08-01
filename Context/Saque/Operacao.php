<?php
/**
 * Caso de uso em que ocorre um saque de valor de uma conta bancária.
 * Os papeis envolvidos são:
 * - uma conta débito (de onde sai o dinheiro)
 */
namespace Context\Saque;

final class Operacao
{
    /**
     * Conta bancária de onde será sacado um valor.
     * @var ContaDebito
     */
    private $contaDebito;

    /**
     * Para realizar a operação de saque, é obrigatório termos a conta bancária de onde será sacado o valor.
     * @param ContaDebito $contaDebito
     */
    public function __construct(ContaDebito $contaDebito)
    {
        $this->contaDebito = $contaDebito;
    }

    /**
     * Realiza o saque de uma quantia de uma conta bancária.
     * @param float $quantia
     * @return void
     */
    public function sacar($quantia)
    {
        $this->contaDebito->debitar($quantia);
    }
}
