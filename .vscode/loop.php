<?php
//for loop
for($i = 0, $j = 10; $i <= 10; $i++, $j--){
    echo "$i : $j \n";
    
}
for($i = 1; $i < 10; $i++){
    echo PHP_EOL;
    for($j = 0; $j < $i ; $j++ ){
        echo "*";
    }
}