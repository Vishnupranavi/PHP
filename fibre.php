<?php
$fiber=new Fiber(function():void{
   $val=Fiber::suspend('values');
   });
   $val=$fiber->start();
   $fiber->resume('value');
  ?>
