<?php

//Get the distance between two points(x,y)
function getDistance($kx,$ky,$ax,$ay){

return sqrt(($kx - $ax)*($kx - $ax) + ($ky - $ay)*($ky - $ay));
}

function minDistances($K, $A){
$results = array();
//
foreach($K as $kid) {
    $result = array();
    foreach($A as $abri){
      //Store the distane between the kid and every box
      $result[$abri["Bname"]]= getDistance($kid["X"],$kid["Y"],$abri["X"],$abri["Y"]);
    } 
//Sorting by value the result array   
 asort($result);
// Storing the minimum distance in the final array result
$results[$kid["kname"]]= array_keys($result)[0];

}

return $results;
}
/*
Testing part :

$abris = array(
array("Bname"=> "Box1","X" =>8 ,"Y"=>-6),
array("Bname"=> "Box2","X" =>6 ,"Y"=>10),
array("Bname"=> "Box3","X" =>4 ,"Y"=>5)
);

$kids =  array(
array("kname"=> "pA","X" =>8 ,"Y"=>8),
array("kname"=> "pB","X" =>2 ,"Y"=>7),
array("kname"=> "pC","X" =>-2 ,"Y"=>1),
array("kname"=> "pD","X" =>-5 ,"Y"=>-7)
);

$results = minDistances($kids,$abris);

foreach ($results as $key => $r){
echo $key." ".$r."<br/>";
}
*/
?>

