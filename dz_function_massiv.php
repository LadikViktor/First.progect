<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php
    // $test = array (5,6,7);

    // function summ_array ($array){
    //     $rezult = 0;

    //     if (is_array($array)){
    //         foreach ($array as $value){
    //             if (is_numeric($value)){
    //                $rezult = $rezult + $value;
    //             }
    //             else {
    //                 return false;
    //             }
    //         }
    //         return $rezult;
    //     }
    //     return false;
    // }

    // if (summ_array($test)==false){
    //     print 'false';}
    // else{
    //     print summ_array($test);
    // }

    // function array_max_key($array)
    // {
    //     $max_key = -1;
    //     $max_val = -1;
    //     foreach ($array as $key => $value) {
    //         if ($value > $max_val) {
    //             $max_key = $key;
    //             $max_val = $value;
    //         }
    //     }
    //     return $max_key;
    // }

    
    
    function odd_filter($arr) {
        return array_filter($arr, function($a) { return $a & 1; });
    }

    ?>
</body>

</html>