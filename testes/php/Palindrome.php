<?php

/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*
Um palíndromo é uma palavra que pode ser lida  da mesma maneira da esquerda para direita, como ao contrário.
Exemplo: ASA.

Faça uma função que ao receber um input de uma palavra, string, verifica se é um palíndromo retornando verdadeiro ou falso.
O fato de um caracter ser maiúsculo ou mínusculo não deverá influenciar no resultado da função.

Exemplo: isPalindrome("Asa") deve retonar true.
*/



class Palindrome
{
    public static function isPalindrome($word)
    {

    	$word_invert = strrev($word);

    	$verify = "";
    	for ($i=0; $i<strlen($word); $i++){
    		if (strtoupper($word[$i]) != strtoupper($word_invert[$i])){
    			return false;
    		}
    	}
    	
        return true;
    }
}

var_dump(Palindrome::isPalindrome('Deleveled'));