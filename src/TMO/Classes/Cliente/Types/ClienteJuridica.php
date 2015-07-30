<?php

namespace TMO\Classes\Cliente\Types;
use TMO\Classes\Pessoas\Types\PessoaJuridica;
use TMO\Classes\Cliente\ClassificacaoInterface;

class ClienteJuridica extends PessoaJuridica implements ClassificacaoInterface
{
    public function classificarCliente($classificacao)
    {
        $this->setClassificacao($classificacao);
    }
}