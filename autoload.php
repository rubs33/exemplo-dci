<?php
/**
 * Função para localizar/carregar as classes sob demanda
 * @param string $classe
 * @return void
 */
spl_autoload_register(function($classe) {
    require(str_replace('\\', '/', $classe) . '.php');
});