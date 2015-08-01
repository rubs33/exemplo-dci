<?php
/**
 * Classe que representa uma conta bancária com suas operações mais básicas.
 * A classe não deve ter regras de negócio da aplicação e também não poderá ser
 * instanciável. Classes de dados só serão instanciáveis quando estiverem em algum
 * contexto (caso de uso) expecífico e, portanto, com algum papel definido.
 */
namespace Data;

abstract class ContaBancaria
{
    /**
     * Identificação única da conta bancária
     * @var int
     */
    protected $id = null;

    /**
     * Saldo da conta bancária
     * @var float
     */
    protected $saldo = 0.00;

    /**
     * Carrega uma conta bancária a partir de seu ID ou monta uma conta bancária nova.
     * @var int $id
     */
    public function __construct($id = null)
    {
        if ($id) {
            $this->carregarConta($id);
        }
    }

    /**
     * Método para carregar os dados de uma conta bancária a partir de seu ID.
     * (apenas ilustrativo)
     * @param int $id
     * @return void
     */
    public function carregarConta($id)
    {
        switch ($id) {
        case 1:
            $this->id = 1;
            $this->saldo = 1000;
            break;
        case 2:
            $this->id = 2;
            $this->saldo = 730;
            break;
        }
    }

    /**
     * Obtem o ID da conta
     * @return int
     */
    public function obterId()
    {
        return $this->id;
    }

    /**
     * Obtem o saldo atual da conta
     * @return float
     */
    public function obterSaldo()
    {
        return $this->saldo;
    }

    /**
     * Adiciona uma quantia ao saldo.
     * @param float $quantia
     * @return void
     */
    public function adicionarQuantia($quantia)
    {
        $this->saldo += $quantia;
    }

    /**
     * Remove uma quantia do saldo.
     * @param float $quantia
     * @return void
     */
    public function removerQuantia($quantia)
    {
        $this->saldo -= $quantia;
    }
}