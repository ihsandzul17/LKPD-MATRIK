<?php

$input1 = 3;
$input2 = 2;
$input3 = 1;

if ($input1 > $input2 && $input1 > $input3) {
    echo $input1;
}
elseif ($input2 > $input1 && $input2 > $input3) {
    echo $input2;
}
elseif ($input3 > $input1 && $input3 > $input2) {
    echo $input3;
}
else {
    echo "bilangan sama besar";
}


?>