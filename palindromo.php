<?php

function palindromo ($string){
    if ($string == strrev($string)) echo "true";
    else echo "false";
}