<?php

namespace TMO\Classes\Cliente\Types;
use TMO\Classes\Cliente\ClassificacaoInterface;
use TMO\Classes\Pessoas\Types\PessoaFisica;

class ClienteFisica extends PessoaFisica implements ClassificacaoInterface
{
    public function classificarCliente($classificacao)
    {
        $this->setClassificacao($classificacao);
    }
}