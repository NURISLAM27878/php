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
// $color1 = '<pan style="color: red;">';
// $color2 = '<pan style="color: green;">';
// $color3 = '<pan style="color: blue;">';
// $color4 = '<pan style="color: tomato;">';
// $spend = '</span>';
// $zyx = "(my) {name} [is] -nur_";
// echo str_replace(['(',')','{','}','[',']','-','_'], [$color1, $spend, $color2, $spend, $color3, $spend, $color4, $spend], $zyx);
// echo "<br>";
// print_r(phpinfo());

// b boro hater + red, d ta inpact for span tag, last h bracket

$bd = "{b}angla(d)es-h_";
echo str_replace(['{','}','(',')','-','_'], ['<span style="text-transform: uppercase;">', '</span>', '<span>', '</span>', '(', ')'], $bd);
    echo ('<br>');
    echo strlen("Hello world!");
    echo ('<br>');
echo str_word_count("Hello world!");
    echo ('<br>');
echo strpos("Hello world!", "world");
    echo ('<br>');
$l = "Hello World!";
echo strtoupper($l);
    echo ('<br>');
echo strtolower($l);
    echo ('<br>');
echo strrev($l);
    echo ('<br>');
$r = " Hello World! ";
echo trim($r);
    echo ('<br>');
$arrry = explode(" ", $r);
    print_r($arrry);
    // concatanet ================
    echo ('<br>');
    $c = $l . $r;
    echo ($c);
    echo ('<br>');
    $add = "$l $r";
    echo ($add);
    echo ('<br>');
    // Slicing Strings=============
    $slic = "my name is nur islam";
    echo substr($slic, 5, -9);
    echo ("<br>");
    // Escape Character =======================
    $scp = "hi frinds, my name is \"nur\"";
    echo ($scp);
    echo "<br>";
    $int = 1.9e411;
    var_dump(is_finite($int));
    echo "<br>";
    $x = acos(8);
    var_dump($x);
    $x = 5985;
    echo "<br>";
    var_dump(is_numeric($x));
    echo "<br>";
    // cast=================================
    $cst = "123456.789";
    $r_cst = (int)$cst;
    var_dump($r_cst);
    // array to object =======================
    echo ("<br>");
    $myArray = array("car", "table", "class");
    $pArray = (object)$myArray;
    var_dump($pArray);
    echo "<br>";
    echo (pi());
    // min max ?==========
    echo "<br>";
    echo (min(30,40,10,5));
    echo "<br>";
    echo(abs(-6.7));
    echo "<br>";
    echo(sqrt(64));
    echo "<br>";
    echo(round(0.49));
    echo "<br>";
    echo(rand(1,10));
    // define====================
    echo "<br>";
    define("AKASH", "Welcome to W3Schools.com!",);
    echo AKASH;
    echo "<br>";
    echo(__DIR__);
    echo "<br>";
    echo "<br>";




    // Comparison Operators =====================
    $number1 = 20;
    $number2 = "20";
    $number3 = 30;
    $number4 = 20;
    if ($number1 == $number2) {
        echo "this is true" . "<br>";
    }else{
        echo "this is false" . "<br>";
    }
    
    if ($number1 === $number2) {
        echo "this is true";
    }else{
        echo "this is false" . "<br>";
    }

    if ($number1 != $number2) {
        echo "this condition is true";
    }else{
        echo "this condition is false. because variable value is same" . "<br>";
    }

    if ($number1 !== $number2) {
        echo "this condition is true" . "<br>";
    }

    if ($number1 !== $number4) {
        echo "this condition is true";
    }else{
        echo "this condition is false. because variable value and data type is same" . "<br>";
    }

    if ( $number1 <= $number3 ) {
        echo "this condition is true" ."<br>";
    }

    if ( $number1 >= $number3 ) {
        echo "this condition is false" ."<br>";
    }elseif ($number1 <= $number3) {
        echo "this condition is true";
    }else{
        echo "this condition is false";
    }

    if ($number1 || $number2) {
        echo "this condition is true. because \$number2 variable data type is \"string number\"" . "<br>";
    }
    if (($number1 === $number2) || ($number1 === $number4)) {
        echo "this condition is true. because any value need true. first value is false and second value is Correct" . "<br>";
    }

    if(($number1 == $number2) && ($number1 === $number4)) {
        echo "this condition is true" ."<br>";
    }

    if(($number1 === $number2) && ($number1 === $number4)) {
        echo "this condition is true";
    }else{
        echo "this condition is't correct. because this condition need all value true. but there are first value is't correct" . "<br>";
    }

    $shorIf = $number1 < $number3 ? "Condition true" : "condition false";
    echo $shorIf;
    echo "<br>";

    // switch stetment ========
    $variable = 80;
    switch ($variable) {
        case 90:
            echo "A+";
            break;
        case 80:
            echo "A-";
            break;
        
        default:
            echo "Fail!";
            break;
    }

    // function ===============================
    function text(){
        echo esc_html( 'hi, I m  nur' );
    }
    text();

    function text2(){
        return esc_html( 'hello' );
    }
    echo text2();

    function calculator1($a, $b, $type){
        switch ($type) {
            case 'add':
                return $a + $b;
                break;
            case 'sub':
                return $a - $b;
                break;
            case 'mult':
                return $a * $b;
                break;
            default:
                echo $a / $b;
                break;
        }
    }

echo calculator1(5, 7, 'add');
echo calculator1(8, 7, 'sub');
echo calculator1(49, 7, 'mult');

function fng($a = 'nur'){
    return $a;
}
echo fng();

function iffun($a, $b, $type){
    if ($type = 'add') {
        echo $a + $b;
    }
    elseif ($type = 'sub') {
        echo $a - $b;
    }
    elseif ($type = 'mult') {
        echo $a * $b;
    }
    else {
        echo $a / $b;
    }
}

iffun(1, 2, 'add');
iffun(5, 2, 'sub');
iffun(3, 2, 'mult');

function opt($a = 'a'){
    echo $a;
}
opt();

// while loop =======================================

// this loop for unlimited print 
// while (1) {
//     echo "print this line" . '<br>';
// }

$xx = 1;

// this loop also unlimited print 
// while ($xx < 6) {
//     echo "hi";
// }
// while ($xx < 6) {
//     $xx++;
//     echo "<br>" . "hi" . "<br>";
// }
while ($xx < 6) {
    $xx++;
    echo $xx;
   
}


exit; 