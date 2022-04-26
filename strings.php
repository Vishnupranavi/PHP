<?php
$str = addcslashes("Hello Vishnu","V");
echo($str);
echo "\n";
$str1 = addslashes('Hello "welcome" to php');
echo($str1);
echo "\n";

$str2=bin2hex("Vishnu");
echo($str2);
$str3="Vishnu pranavi";
echo "\n";
echo (chop($str3,"pranavi"));
echo "\n";
echo chr(55);
echo chr(055);
echo chr(0x52);
$str4="Aspire family";
echo "\n";
echo chunk_split($str4,1,"*");
$str5="Vishnu pranavi";
echo "\n";
echo count_chars($str5,3);
echo "\n";
$str = crc32("Hello World!");
printf("%u\n",$str);

$str = "Hello world. aspire family.";
print_r (explode(" ",$str));
echo hebrev("Hello");
echo "\n";
echo hex2bin("48656c6c6f20576f726c6421");
echo "\n";
$str6="thiis@#qwert";
echo  htmlspecialchars_decode($str6);
$arr=array('welcome','to', 'aspire', 'systems');
echo implode("",$arr);
echo "\n";
echo lcfirst("Hai,welcome");
echo "\n";
echo levenshtein("Hello World","ello World");
echo str_repeat("weasp",15);
echo str_rot13("rotate");
echo str_shuffle("Hello World");
echo "\n";
echo str_word_count("Hello world!");
echo "\n";
echo strcasecmp("Hello","HELLO");
echo strcmp("Hello world!","Hello world!");
echo "\n";
echo strip_tags("Hello <b><i>world!</i></b>","<b>");
echo "\n";

echo strlen("Hello Aspire");
$str7= "An example of a long word is: Supercalifragulistic";
echo wordwrap($str7,15,"<br>\n");







?> 