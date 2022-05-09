<?php 
    function gen_fun()
    {
	for($i=1;$i<=10;$i++)
	{
	 yield $i;
	}
    }
    $gen=gen_fun();
    foreach($gen as $obj)
    {
      echo "$obj";
      echo "\n";
    }




?>
