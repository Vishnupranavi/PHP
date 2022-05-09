<?php
$strings = array('ab12bc99', 'fobar','&*$');
foreach ($strings as $num) {
   /* if (ctype_alnum($num)) {
        echo "The string $num consists of all letters or digits.\n";
    } else {
        echo "The string $num does not consist of all letters or digits.\n";
    }*/
    
   /* if (ctype_alpha($num)) {
        echo "The string $num consists of all letters.\n";
    } else {
        echo "The string $num does not consist of all letters.\n";
    }*/
    /*if (ctype_cntrl($num)) {
        echo "The string $num consists of control chars\n";
    } else {
        echo "The string $num does not consist of control chars.\n";
    }*/
    /* if (ctype_digit($num)) {
        echo "The string $num consists of numeric strings\n";
    } else {
        echo "The string $num does not consist of numeric strings.\n";
    }*/
    /*
       if (ctype_graph($num)) {
        echo "The string $num consists of printable\n";
    } else {
        echo "The string $num does not consist of non printable.\n";
    }
    */
       /*if (ctype_lower($num)) {
        echo "The string $num consists of lowercase strings\n";
    } else {
        echo "The string $num does not consist of no lowercase.\n";
    }*/
     /*  if (ctype_print($num)) {
        echo "The string $num consists of printable strings\n";
    } else {
        echo "The string $num does not consist of non printabe strings.\n";
    }*/
    /* if (ctype_punct($num)) {
        echo "The string $num consists of printable strings\n";
    } else {
        echo "The string $num does not consist of non printabe strings.\n";
    }*/
      if (ctype_xdigit($num)) {
        echo "The string $num consists of hexadecimal\n";
    } else {
        echo "The string $num does not consist of non printabe non-hexadecimal.\n";
    }
    
    
}

?>

