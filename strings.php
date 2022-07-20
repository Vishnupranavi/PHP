<?php  
    //chop
    $str = "Hello Aspire!";  
    echo "Original string :".$str."<br>";  
    echo "Output string: ".chop($str,"Aspire!");  
   //repeat
    echo "output:".str_repeat("w",3);
    //ireplace
    $arr = array("Coimbatore","trichy","madurai","salem");  
    echo "Original string: array('Coimbatore','trichy','madurai','salem')";  
    echo "<br>";  
    print_r(str_ireplace("trichy","bangalore",$arr,$i)); // This function is case-insensitive  
    echo "Replacements: $i";  
    //pad
     $str = "Welcome Aspire";  
    echo "Original string:".$str;  
    echo "<br>";  
    echo "Output:".str_pad($str,"28"," the lamp team",STR_PAD_RIGHT);;  
    //replace
     $string = "Hai team!";  
    $search = 'Hai';  
    $replace = 'Hello';  
    echo '<b>'."Original String:".'</br></b>';  
    echo $string.'</br>';  
    $newstr = str_replace($search, $replace, $string, $count);  
    echo '<b>'."Replaced string:".'</br></b>';  
    echo $newstr.'</br>';  
    echo 'Replacement Count ='.$count;  
    //split
    $str = "Hello team";
    echo(str_split($str));
    //suffle
    $str = "Hello team";
    echo str_shuffle($str);
    //word_count
    $str="Hello Team Welcome";  
    echo "Input string:".$str;  
    echo "<br>";  
    echo "Output: ".str_word_count($str);  
    echo(str_word_count($str,1));
    //strcoll
    $str1 = "Hello Team";
    $str2 = "Hello Team";
    $str3 = "Hi everyone";
    echo strcoll($str1,$str3);
    echo strcoll($str1,$str2);
    //strlen
    $str = "hai";
    echo strlen($str);
    //lower,upper
    $str = "HI ASPIRIANS";
    echo strtolower($str);
    $str1 = "hi aspirians";
    echo strtoupper($str1);
    //strrev
    $str = "Hello php";
    echo strrev($str);
    //strtr
    $strng1="Hi tbam";  
    $from= "ba";  
    $to="ea";  
    echo strtr($strng1, $from, $to); 
    //substr
    $str = "hello world";
    echo substr($str,3);
    //substr_compare
    echo substr_compare("Hello Aspire","Aspire",0);
    echo substr_compare("Hello Aspire","Lamp team",0);
    echo substr_compare("Hello Aspire","Aspire",6);
    //substr_count
    $strin="Life gives good life lessons on everyday life of everyone"; 
    $sub_str="life";  
    echo substr_count($strin,$sub_str);  
    //trim
    $str = "Hello PHP!";  
    echo "My string is: ".$str ."<br>";  
    echo "output:".trim($str,"HeP!");  
    //ucfirst
    $str = "i am going to office";
    echo ucfirst($str);
    //ucwords
    $str = "hai hello lamp team";
    $str1 = "   hi|welcome|home";
    echo ucwords($str);
    echo ucwords($str1,"|");
    //wordwrap
    $str = "An example of a long word is: HappyHollyToAll";
    echo wordwrap($str,15,"<br>\n");
    
    ?>  
