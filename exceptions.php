<?php
function demo($var) {
      
    echo " Before try block";
    try 
    {
        echo "\n Inside try block";
        if($var == 0) {
            throw new Exception('Number is zero.');
            echo "\n After throw it will never be executed";
        }
    }
    catch(Exception $e) {
        echo "\n Exception Caught" . $e->getMessage();
    }
    finally {
        echo "\n Here cleanup activity will be done";
    }
    echo "\n After catch it will be always executed";
}
demo(2);
demo(0);
?>
