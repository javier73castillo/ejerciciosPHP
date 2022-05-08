<?php

$value = 'pepe.exe';

if(str_ends_with(".exe", $value)){
    echo strtoupper($value)
} else if(str_ends_with(".db", $value)){
    echo strtoupper($fichero)
} 

$word1 = "neuquen";

if ($word1 == strrev($word1)){
    echo "es palindromo";
} else {
    echo "no es palindromo"
}
?>
