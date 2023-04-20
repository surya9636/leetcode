<?PHP
class Solution {

/**
 * @param Integer $x
 * @return Integer
 */


function reverse($x) {
     $r=0;
     $a=0;        
for($i=$x;(int)$x!=0;$x=$x/10){
     $r=$x%10;
     $a=$a*10+$r;
} 
      if($a>2147483647||$a<-2147483648){
 return 0;
}  

return(int) $a;
}
}
?>
