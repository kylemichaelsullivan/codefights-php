// https://codefights.com/arcade/intro/level-2/xzKiBHjhoinnpdh6m

function adjacentElementsProduct($inputArray) {
    // FINISH!
    $x=$inputArray[0]*$inputArray[1];
    for($i=0;$i<$inputArray.length;$i++){
        if($inputArray[$i]*$inputArray[$i+1]>=$x){
            $x=$inputArray[$i]*$inputArray[$i+1];
        }
    }
    //for($i=0;$i<$inputArray.strlen();$i++){
        //if($inputArray[$i]*$inputArray[$i+1]>=$x){
            //$x=$inputArray[$i]*$inputArray[$i+1];
        //}
    //}
    return $x;
}
