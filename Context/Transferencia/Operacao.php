<?php
/**
 * Caso de uso em que ocorre uma transferência de valores entre duas contas bancárias.
 * Os papeis envolvidos são:
 * - uma conta débito (de onde sai o dinheiro)
 * - uma conta depósito (que recebe o dinheiro)
 */
namespace Context\Transferencia;

final class Operacao
{
    /**
     * Conta de onde será debitado um valor para transferência.
     * @var ContaDebito
     */
    private $contaDebito;

    /**
     * Conta onde será creditado um valor de uma transferência.
     * @var ContaDeposito;
     */
    private $contaDeposito;

    /**
     * Para ocorrer uma transferência, é obrigatório termos as contas bancárias envolvidas
     * na operação, mas cada uma com um papel diferente.
     * @param ContaDebito $contaDebito
     * @param ContaDeposito $contaDeposito
     */
    public function __construct(ContaDebito $contaDebito, ContaDeposito $contaDeposito)
    {
        $this->contaDebito   = $contaDebito;
        $this->contaDeposito = $contaDeposito;
    }

    /**
     * Realiza a transferência de uma quantia de valor da conta de débito para uma conta de depósito.
     * @param float $quantia
     * @return void
     */
    public function transferir($quantia)
    {
        $this->contaDebito->debitar($quantia);
        $this->contaDeposito->creditar($quantia);
    }
}
