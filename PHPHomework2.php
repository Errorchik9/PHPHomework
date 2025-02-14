<?php 
function A($a,$b,$c){
    if($a==$b&&$b==$c){
        echo "Равносторонний";
    }else if($a==$b||$b==$c||$a==$c){
        echo "Равнобедренный";
    }else{
        echo "Разносторонний";  
        }
    }

$a=3;
$b=7;
$c=3;

A($a,$b,$c);
