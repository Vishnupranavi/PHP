<?php
enum Names
{
   case Student = 1;
   case Teacher;
   case Parent;
  }
  $a=Names::Student->name;
  echo $a;
  ?>
