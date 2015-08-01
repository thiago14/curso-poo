<?php

namespace TMO\Interfaces\Cliente;

use TMO\Classes\Util\Endereco;

interface EnderecoInterface
{
    public function setEnderecoCobranca(Endereco $endereco);
    public function getEnderecoCobranca();
}