<?php 

$comeco = (int) readline("Digite o começo do intervalo de valores que você quer: ");
$fim = (int) readline("Digite o fim do intervalo de valores que você quer: ");
$numero = rand($comeco, $fim);
$tentativa = 0;

do {
    $chute = (int) readline("Digite um número: ");
    if ($chute == $numero) {
        print("Você acertou o número.\n");
    } elseif ($chute < $numero) {
        print("Você chutou um número mais baixo.\n");
    } elseif ($chute > $numero) {
        print("Você chutou um número mais alto.\n");
    }
    $tentativa += 1;
} while ($chute != $numero);

print("Você acertou com $tentativa tentativas.\n");

?>
