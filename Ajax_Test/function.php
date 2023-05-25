<?php

	# 数字チェック
	function is_num($data){
    	if (preg_match('/^[0-9]+$/', $data)) {
    	
        	# すべて数字の場合 True
        	return True;
    	}
    	else {
        	
        	# すべて数字ではない場合 False
        	return False;
    	}
	}
	
	
	# ひらがなチェック
	function is_hirakana($data){
		if(preg_match('/^[ぁ-んー　]+$/',$data)){
			
  			# すべてひらがなの場合 True
  			return True;
		}else{
		
  			# すべてひらがなではない場合 False
  			return False;
		}
	}
	
	
	# 全角チェック
	function is_zenkaku($data){
		if(preg_match('/^[^ -~｡-ﾟ\x00-\x1f\t]+$/u',$data)){
			
  			# すべて全角の場合 True
  			return True;

		}else{
		
  			# すべて全角ではない場合 False
  			return False;

		}
	}
	
	
	# 半角チェック
	function is_hankaku($data){
		if(!preg_match('/^[^ -~｡-ﾟ\x00-\x1f\t]+$/u',$data)){
			
  			# すべて半角の場合 True
  			return True;
		
		}else{
		
  			# すべて半角ではない場合 False
  			return False;
		
		}
	}
	
	
	# 文字数カウント
	function char_count($data){
		
		# 入力文字列を一文字ずつ配列に格納
		$str_arr = preg_split("//u", $data, -1, PREG_SPLIT_NO_EMPTY);
		
		# 配列の要素数を出力
		return count($str_arr);
	}
	
	
	# 文字数チェック
	function is_charnum_limit($data, $limit_num){
		
		# 入力文字数をカウント
		$str_cnt = char_count($data);
		
		# 
		if($str_cnt <= $limit_num){
		
			# 規定文字数以下だったらTrue
			return True;
		
		}else{
		
			# 規定文字数より多かったらFalse
			return False;
		
		}
		
	}
	
	
	# 入力されてるかチェック
	function is_input($data){
		
		if (isset($data) && $data !== '') {

			# 入力されていたらTrue
    		return True;

		} else {
			
			# 入力されていなかったらFalse
   			return False;

		}
	}
	
	
	# 入力文字列が一致しているか
	function input_cmp($data1, $data2){
		if (strcmp($data1, $data2) === 0) {
        
        	# 入力文字列が一致していたらTrue
        	return True;
    	
    	} else {
        
        	# 入力文字列が一致してなかったらFalse
        	return False;
    	
    	}
	}
	
?>
