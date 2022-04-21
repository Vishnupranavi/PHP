
<?php  
class Solution {
    static $count;
    public static function getCount() {
    return self::$count++;
    }
}
$key=new Solution(1);
  // Solution::$count = 1;
  for($i = 0; $i < 10; $i++) {
    echo 'Number: '. 
    Solution::getCount() ;
    echo "\n";
}
?>


