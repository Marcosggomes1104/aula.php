<?php
   $nome = readline('Informe seu nome: ');

   $nome_sem_espaco = str_replace(" ", "", $nome);

   print("O nome possui " . mb_strlen($nome_sem_espaco) . " caracteres \n\n"); 

   print("Maiúsculo " . strtoupper($nome) . "\n\n");

   print("Minúsculo: " . strtolower($nome) . "\n\n");

   $nomeExplodido = explode(" ", $nome);

   print_r($nomeExplodido);

   var_dump($nomeExplodido);

   print("primerio nome: " . $nomeExplodido[0]);

   print(str_replace("a", "@", mb_strtolower($nome)));

   die();

   print("Isso não pode ocorrer");
