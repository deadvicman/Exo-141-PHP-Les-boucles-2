<?php
$maVar = 0;
for($i = 0;$i<=10;$i++){
    echo"<p>$i</p>";
}
$first  = 0;
$two = 55;


while ($first < 20){
    $first++;
    echo $first * $two . "\n";
}


$oui = 100;
$non = 2;

while ($oui > 10){
    $test = $oui * $non;
    echo $test . "\n";
    $oui--;
}


$bla = 1;

while ($bla <= 10){
    echo $bla;
    $bla+=0.5;
}

for ($i = 1; $i <= 15; $i++){
    echo "On y est presque";
}