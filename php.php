<?php  
/** 
* Plugin Name: php practice
*/

$cars = ['model' => 'BMW', 'cars' => [
        'car' => 'One'
    ]

];

foreach ($cars as $key => $car) {
    // echo '<pre>';
    // print_r($car);
    // echo '</pre>';
    if (is_array($car)) {
        echo $car['car'];
    }
}


$number = [1, 2, 3, 4];

if (!in_array(3 , $number)) {
    echo "not found";
}else {
    echo "<br>found<br>";
}

$group = ["one" => "red", "two" => "green"];
echo '<pre>';
print_r($group);
echo '</pre>';
if (array_key_exists("one", $group)) {
    $group['two_modify'] = "tomato";
    unset($group['two']);
}
echo '<pre>';
print_r($group);
echo '</pre>';

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));


// array practice for home work ==================

// array 
$carsname = ["Volvo","BMW","Toyota"];

echo "<br>I like " . $carsname[0] . ", " . $carsname[1] . " and " . $carsname[2] . ".<br>";

// array key case change 
print_r(array_change_key_case($carsname,CASE_UPPER));
echo "<br>";
print_r(array_change_key_case($carsname,CASE_LOWER));
echo "<br>";

// array_chunk
$name=array("akash","rajen","nur","rasel","sumon","mizan");
$namegroup = array_chunk($name,3);
print_r($namegroup);

echo "<br>";

// array collumn 
$a = array(
    array(
      'id' => 5698,
      'name' => 'Akash',
    ),
    array(
      'id' => 4767,
      'name' => 'Rajen',
    ),
    array(
      'id' => 3809,
      'name' => 'Nur',
    )
  );

  $nameprint = array_column($a, 'name');
//   print_r($nameprint);
echo '<pre>';
print_r($nameprint);
echo '</pre>';
  echo "<br>";

  $printall = array_column($a, 'name', 'id');
//   print_r($printall);
echo '<pre>';
print_r($printall);
echo '</pre>';

  echo "<br>";  echo "<br>";  echo "<br>";



//   this code for homework result sheet
$mark = [
    "1" =>[
        "name" => "Akash",
        "roll" => "1",
        "marks" => "70",
    ],
    "2" =>[
        "name" => "Rajen",
        "roll" => "2",
        "marks" => "80",
    ],
    "3" =>[
        "name" => "Nur",
        "roll" => "3",
        "marks" => "60",
    ],
];

$grate = [
    "A+" => "80",
    "A-" => "70",
];


// if (array_key_exists("1",$mark)){
//     $printresult = array_column($mark, 'name', 'roll');
//   print_r($printresult);
  
//     // echo $mark["1"]["name"];

//   }else{
//   echo "refult not found";
//   }

// function result($roll){

// }

// result();
$roll = "2";
if (array_key_exists($roll, $mark)) {
    echo "Name: ". $mark[$roll]["name"] ."<br>";
    echo "Roll: ". $mark[$roll]["roll"] ."<br>";
    // echo "Grate: ". $mark["1"]["marks"];
    if ($mark[$roll]["marks"] == "80" ) {
        echo "Grate: ". "A+";
    }if($mark[$roll]["marks"] == "70" ) {
        echo "Grate: ". "A-";
    }if($mark[$roll]["marks"] == "60" ) {
        echo "Grate: ". "B";
    }
}



exit; 