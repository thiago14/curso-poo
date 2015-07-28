<?php

require_once 'class/Cliente.php';

$clientes1 = new Cliente();
$clientes1->setNome('Thiago');
$clientes1->setSobrenome('Mori de Oliveira');
$clientes1->setCpf('123.456.789-00');
$clientes1->setIdade(26);
$clientes1->setEndereco('Rua Goias 5014, Bragança Paulista');
$clientes1->setTelefone('(11) 4033-65478');
//-----------------------------------------------------------------------//
$clientes2 = new Cliente('F');
$clientes2->setNome('Sharon');
$clientes2->setSobrenome('C. Frawley');
$clientes2->setCpf('456.803.891-00');
$clientes2->setIdade(40);
$clientes2->setEndereco('Praça João Paulo, 1776, Rio de Janeiro-RJ');
$clientes2->setTelefone('(13) 1439-7845');
//-----------------------------------------------------------------------//
$clientes3 = new Cliente('F');
$clientes3->setNome('Bianca');
$clientes3->setSobrenome('Souza Cardoso');
$clientes3->setCpf('169.823.653-01');
$clientes3->setIdade(55);
$clientes3->setEndereco('Rua José Valadares, 1014, Salvador-BA');
$clientes3->setTelefone('(49) 3571-1598');
//-----------------------------------------------------------------------//
$clientes4 = new Cliente();
$clientes4->setNome('Pedro');
$clientes4->setSobrenome('Rodrigues Barbosa');
$clientes4->setCpf('169.823.653-01');
$clientes4->setIdade(20);
$clientes4->setEndereco('Rua Beatriz Pacheco Pompeo de Camargo, 912, Campinas-SP');
$clientes4->setTelefone('(19) 3102-5539');
//-----------------------------------------------------------------------//
$clientes5 = new Cliente();
$clientes5->setNome('Estevan');
$clientes5->setSobrenome('Alves Cunha');
$clientes5->setCpf('621.932.869-81');
$clientes5->setIdade(38);
$clientes5->setEndereco('Rua Arábia, 940, Igarassu-PE');
$clientes5->setTelefone('(81) 2801-5344');
//-----------------------------------------------------------------------//
$clientes6 = new Cliente('F');
$clientes6->setNome('Luana');
$clientes6->setSobrenome('Barbosa Barros');
$clientes6->setCpf('363.048.547-22');
$clientes6->setIdade(27);
$clientes6->setEndereco('Rua Guilherme Roeder Filho, 1804, Joinville-SC');
$clientes6->setTelefone('(47) 4488-4856');
//-----------------------------------------------------------------------//
$clientes7 = new Cliente('F');
$clientes7->setNome('Beatriz');
$clientes7->setSobrenome('Castro Barros');
$clientes7->setCpf('827.999.898-53');
$clientes7->setIdade(55);
$clientes7->setEndereco('Rua K, 1866, Barra Mansa-RJ');
$clientes7->setTelefone('(24) 6316-9489');
//-----------------------------------------------------------------------//
$clientes8 = new Cliente();
$clientes8->setNome('Kauan');
$clientes8->setSobrenome('Pinto Rodrigues');
$clientes8->setCpf('599.791.628-64');
$clientes8->setIdade(23);
$clientes8->setEndereco('Rua Armando Maritan, 346, Mogi das Cruzes-SP');
$clientes8->setTelefone('(11) 2270-8294');
//-----------------------------------------------------------------------//
$clientes9 = new Cliente();
$clientes9->setNome('Luan');
$clientes9->setSobrenome('Alves Correia');
$clientes9->setCpf('352.277.826-01');
$clientes9->setIdade(59);
$clientes9->setEndereco('Rua Vinte e Três, 1361, Praia Grande-SP');
$clientes9->setTelefone('(13) 4225-4674');
//-----------------------------------------------------------------------//
$clientes10 = new Cliente();
$clientes10->setNome('Daniel');
$clientes10->setSobrenome('Costa Cavalcanti');
$clientes10->setCpf('392.204.206-60');
$clientes10->setIdade(36);
$clientes10->setEndereco('Rua Itu, 882, Goiânia-GO');
$clientes10->setTelefone('(62) 9290-7591');
//-----------------------------------------------------------------------//
$array_clientes = [$clientes1,$clientes2, $clientes3, $clientes4, $clientes5, $clientes6, $clientes7, $clientes8, $clientes9, $clientes10];