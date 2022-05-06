<?php
 setcookie("Price", "200", time() + 2 * 24 * 60 * 60);
   if (isset($_COOKIE["Price"]))
    {
        echo " Item is a  " . $_COOKIE["Price"];
    }
    else
    {
        echo "No items.";
    }
  setcookie("Price", "", time() - 60);
  echo "Cookie is deleted";
  
?>
