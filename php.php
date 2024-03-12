<?php  
/** 
* Plugin Name: php practice
*/

//for echo
$myName = "Nur";
$xcv = 'hello';
echo $xcv;

echo "<br>";
echo 123;
echo "<br>";
echo 'asad';
echo "<br>";
// concatenate 
echo "My Name Is" . " " . $myName;
echo "<br>";
// echo end

$xyz = "my name is $myName";
echo str_replace($myName, "Akash", $xyz);

echo "<br>";
$color1 = '<pan style="color: red;">';
$color2 = '<pan style="color: green;">';
$color3 = '<pan style="color: blue;">';
$color4 = '<pan style="color: tomato;">';
$spend = '</span>';
$zyx = "(my) {name} [is] -nur_";
echo str_replace(['(',')','{','}','[',']','-','_'], [$color1, $spend, $color2, $spend, $color3, $spend, $color4, $spend], $zyx);

print_r(phpinfo());

exit;