<?php

$livro = file_get_contents("https://github.com/jeffersonchaves/txtbooks/blob/master/alice_pt_br.txt");

print("O livro tem " . round(strlen($livro) / 1024, 1) . " Kilobytes \n\n");

print("O livro tem " . mb_strlen($livro) . " caracteres.\n\n");
