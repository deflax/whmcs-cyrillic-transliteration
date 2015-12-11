<?php

function hook_transliterate($string) {
 $string = str_replace("а","a",$string);
 $string = str_replace("А","A",$string);
 $string = str_replace("б","b",$string);
 $string = str_replace("Б","B",$string);
 $string = str_replace("в","v",$string);
 $string = str_replace("В","V",$string);
 $string = str_replace("г","g",$string);
 $string = str_replace("Г","G",$string);
 $string = str_replace("д","d",$string);
 $string = str_replace("Д","D",$string);
 $string = str_replace("е","e",$string);
 $string = str_replace("Е","e",$string);
 $string = str_replace("ж","zh",$string);
 $string = str_replace("Ж","Zh",$string);
 $string = str_replace("з","z",$string);
 $string = str_replace("З","Z",$string);
 $string = str_replace("и","i",$string);
 $string = str_replace("И","I",$string);
 $string = str_replace("й","i",$string);
 $string = str_replace("Й","I",$string);
 $string = str_replace("к","k",$string);
 $string = str_replace("К","K",$string);
 $string = str_replace("л","l",$string);
 $string = str_replace("Л","L",$string);
 $string = str_replace("м","m",$string);
 $string = str_replace("М","M",$string);
 $string = str_replace("н","n",$string);
 $string = str_replace("Н","N",$string);
 $string = str_replace("о","o",$string);
 $string = str_replace("О","O",$string);
 $string = str_replace("п","p",$string);
 $string = str_replace("П","P",$string);
 $string = str_replace("р","r",$string);
 $string = str_replace("Р","R",$string);
 $string = str_replace("с","s",$string);
 $string = str_replace("С","S",$string);
 $string = str_replace("т","t",$string);
 $string = str_replace("Т","T",$string);
 $string = str_replace("у","u",$string);
 $string = str_replace("У","U",$string);
 $string = str_replace("ф","f",$string);
 $string = str_replace("Ф","F",$string);
 $string = str_replace("х","h",$string);
 $string = str_replace("Х","H",$string);
 $string = str_replace("ц","c",$string);
 $string = str_replace("Ц","C",$string);
 $string = str_replace("ч","ch",$string);
 $string = str_replace("Ч","Ch",$string);
 $string = str_replace("ш","sh",$string);
 $string = str_replace("Ш","Sh",$string);
 $string = str_replace("щ","sht",$string);
 $string = str_replace("Щ","Sht",$string);
 $string = str_replace("ъ","a",$string);
 $string = str_replace("Ъ","A",$string);
 $string = str_replace("ь","j",$string);
 $string = str_replace("ю","yu",$string);
 $string = str_replace("Ю","Yu",$string);
 $string = str_replace("я","ya",$string);
 $string = str_replace("Я","Ya",$string);
 return $string;
} 

add_hook("Transliteration",1,"hook_transliterate");

?>
