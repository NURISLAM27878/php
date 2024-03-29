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





$star = "*";
$number = 1;


// while ($number <= 10) {
//     while ($number+=1) {
//         echo $number . $number;
//     }
//     $number++;
//   }
// while ($number <= 30) {
    // echo $number . "<br>";
    // $number++;
//     $number+= "*";
//   echo $number . "<br>";
    
// echo $number;
    // $star+=$star;
    // if($number <= 10){
    //     echo $star . $star . "<br>";
    // }


    // $number++;
    // if($number <= 10){
    //     echo $star . "<br>";
    // }


    // $number++;
    // if($number <= 10){
    //     echo $number . "<br>";
    // }


    // if($number <= 10){
    //     // echo $number+$number;
    //     if ($number++) {
    //         echo $star . $star . "<br>";
    //     }
    // }


    // $number++;
    // echo $number;
    // $number+$number;
//     if ($number == 10) break;
//     echo $number;


//    $number++;
        // $addnum = $number+=1;
        // if ($addnum <=20) {
        //     echo $star . "<br>";
        // }


        // $number++;
        // if ($number++ < 20){
        //     echo $star++ . "<br>";
        // }

        // if($number <= 10){
        //     while ($number <= 10) {
        //         // echo $star;
        //         echo $star++;
        //     }
            
        // }
        // $number++;

// }


// while ($number < 100) {
//     if ($number == 10) break;
//     echo $star;
//     $star++;
//   }


// while ($number <= 10) {
//     echo str_repeat($star, $star+1);
//     echo "<br>";
//     $star++;
// }


// while ($number <= 10) {
//     $repeat = str_repeat($star, $number+1);
//     echo $repeat;
//     echo substr($repeat, 1, -1);
//     echo "<br>";
//     $number++;
// }

while ($number <= 10) {
    if ($number+1) {
        $repeat = str_repeat($star, $number+1);
         echo $repeat."<br>";
    }
    // if ($number+1) {
    //     $repeat = str_repeat($star, $number+1);
    //     echo $repeat."<br>";  
    // }
    $number++;
}

exit; 