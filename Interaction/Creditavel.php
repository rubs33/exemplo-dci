<?php
/**
 * Esta trait representa o comportamento de contas bancárias para onde serão creditados valores.
 */
namespace Interaction;

trait Creditavel
{
    public function creditar($quantia)
    {
        if (!is_float($quantia)) {
            throw new \InvalidArgumentException('Quantia precisa ser um número real.');
        }
        return parent::adicionarQuantia($quantia);
    }
}