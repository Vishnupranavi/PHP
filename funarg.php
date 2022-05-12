
<?php
function takes_array($input)
{
    echo "$input[0] + $input[1] = ", $input[0]+$input[1];
}
function add_some_extra(&$string)
{
    $string .= 'and something extra.';
    echo $string;
}

?>
