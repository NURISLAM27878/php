<?php  
/** 
* Plugin Name: php practice
*/

// while loop =======================================

// this loop for unlimited print 
// while (1) {
//     echo "print this line" . '<br>';
// }

$x = 1;
$xx = 1;

// this loop also unlimited print 
// while ($xx < 6) {
//     echo "hi" . '<br>';
//     $xx++;
// }
while ($x < 6) {
    $x++;
    echo "<br>" . "hi" . "<br>";
}

while ($xx < 6) {
    $xx++;
    echo $xx;
}

echo "<br>";

$y = 5;

while ($y < 10) {
    if ($y == 8) break;
        echo $y;
       $y++;
}

echo "<br>";

// when jump a loop 
$r = 0;
while ($r < 7) {
    $r++;
    if ($r == 4) continue;
    echo $r;
}

echo "<br>";

$u = 1;
// end while ======
while ($u <= 10) :
    $u++;
    echo $u;
endwhile;

echo "<br>";

$h = 1;
while ($h <= 100) {
    $h+=10;
    echo $h . '<br>';
}

exit; 