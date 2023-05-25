<?php

require "function.php";

// 入力された年数を取得
$input_year = filter_input(INPUT_GET, 'val');


if(is_num($input_year)){

	// 入力年数が 4 で割り切れる
	if($input_year % 4 == 0){
		
		// 入力年数が 100 で割り切れる
		if($input_year % 100 == 0){
			
			// 入力年数が 400 で割り切れる
			if($input_year % 400 == 0){
				echo "<h2>".$input_year."年 は 閏年！！！！</h2>";
			}else{
				echo "<h2>".$input_year."年 は 閏年じゃないよ！！！！！！</h2>";
			}
		}else{
			echo "<h2>".$input_year."年 は 閏年！！！！</h2>";
		}
	}else{
		echo "<h2>".$input_year."年 は 閏年じゃないよ！！！！！！</h2>";
	}
}else{
	echo '<h2><font color="#fa4242">数字を入力してください</font></h2>';
}
  
?>