<?php
$number = rand(1, 40);
if($number < 9){
    $text = "Is it cold there?";
}elseif($number < 15){
    $text = "its growing up";
}elseif($number < 26){
    $text = "thats.. nice;)";
}elseif($number < 36){
    $text = "OKAY COWBOY";
}else{
    $text = "WOW. send tips";
}
echo "Your PP is $number. $text";
?>
