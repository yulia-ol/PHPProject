<?php

//echo 'Hello!!!';

//$array = [1, 5, [33, 44], 9, 'string'];
//
//foreach ($array as $key => $value){
//    $serializedValue=[];
//
//    if(is_array($value)){
//        $newValue = serialize($value);
//        print_r($newValue);
//     //   var_dump($newValue);
//    }
//    else {
//        print_r($value);
//        echo '<br>';
//        print_r($key);
//        echo '<br>';
//    }

    function toArray($firstArg, $secondArg) : array{
        return[$firstArg => $secondArg];
    }

    print_r(toArray(25, 26));
//}
echo '<br>';
echo '<br>';
print_r($_GET);
echo '<br>';
//print_r($_POST);
//echo '<br>';
//print_r($_REQUEST);
//echo '<br>';
//print_r($_FILES);
//echo '<br>';
//echo '<pre>';
//
//print_r($_SERVER);
//echo '<br>';
//echo '</pre>';

