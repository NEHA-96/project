<?php

function grosssalary($basicsal){
    $hra=$basicsal*0.14;
    $da=$basicsal*0.22;

    echo"salary :".$basicsal."<Br/>";
    echo "HRA :" .$hra. "<Br/>";
    echo "DA :" .$da. "<Br/>";

    return ($basicsal +$hra +$da);
}
$basicsal=10000;
echo "gross salary for ".$basicsal ."is" .grosssalary($basicsal);

?>