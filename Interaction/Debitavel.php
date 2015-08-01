<?php
/**
 * Esta trait representa os comportamentos de contas bancárias de onde se pretende debitar valores.
 */
namespace Interaction;

trait Debitavel
{
    /**
     * Realiza o débito de uma quantia da conta bancária, caso exista fundos.
     * @param float $quantia
     * @throw \InvalidArgumentException Caso seja passada uma quantia inválida
     * @throw \Exception Caso a conta não possua saldo suficiente
     * @return void
     */
    public function debitar($quantia)
    {
        if (!is_float($quantia)) {
            throw new \InvalidArgumentException('Quantia precisa ser um número real.');
        }
        if (!$this->possuiQuantia($quantia)) {
            throw new \Exception('A conta não possui saldo suficiente.');
        }
        return parent::removerQuantia($quantia);
    }

    /**
     * Verifica se a conta bancária possui determinada quantia de saldo.
     * @param float $quantia
     * @return bool
     */
    private function possuiQuantia($quantia)
    {
        return parent::obterSaldo() >= $quantia;
    }

}