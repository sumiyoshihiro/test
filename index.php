<?php
    // hogeを１０回出力する
    for ($i = 1; $i<= 10; $i++){
        echo 'hoge';
        
    }
        echo '<br>';
        // １から１０までを出力する
    for($i = 1; $i <11;$i++){
        echo $i;
    }
   echo '<br>';
        // ２の倍数を出力する１００まで
    $i = 2;
        while($i<=100){
       if($i % 2== 0){
           echo $i;
       }
       $i++;
   }
   echo '<br>';
        // 加算＋、減産ー、乗算✳️、除算／、剰余％

   for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 !== 0) {
        echo '奇数です';
    } else {
        echo $i;
    }
	echo '<br>';
    }

    $i = 3;
    while($i<=100){
        if($i % 3==0){
            echo $i;
        }
        $i++;
    }
    $i = 5;
    while($i <= 100){
        if($i % 5==0){
            echo $i;
        }
        $i++;
    }
    echo '<br>';

  

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 ==0 && $i % 5 ==0) {
	echo $i;
        echo '<br>';
    }
}
for($i = 1; $i <= 100; $i++){
    if ($i % 3!== 0){
        echo 'Fizz';
        } else {
             echo '';
            }
        }

        
    ?>