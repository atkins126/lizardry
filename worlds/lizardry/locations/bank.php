<?php

if ($action == 'bank') {
	
		switch ($user['char_region']) {
			case 1:
				$user['title'] = 'Банк';
				$user['description'] = '';
				break;
			case 2:
				$user['title'] = 'Банк';
				$user['description'] = '';
				break;
			case 3:
				$user['title'] = 'Банк';
				$user['description'] = '';
				break;
			case 4:
				$user['title'] = 'Банк';
				$user['description'] = '';
				break;
			case 5:
				$user['title'] = 'Банк';
				$user['description'] = '';
				break;
			case 6:
				$user['title'] = 'Банк';
				$user['description'] = '';
				break;
			case 7:
				$user['title'] = 'Банк';
				$user['description'] = '';
				break;
			case 8:
				$user['title'] = 'Банк';
				$user['description'] = '';
				break;
			case 9:
				$user['title'] = 'Банк';
				$user['description'] = '';
				break;
			case 10:
				$user['title'] = 'Банк';
				$user['description'] = '';
				break;
		}
	$user['frame'] = 'bank';
	$user['links'] = array();
	go_to_the_town();
	
	if ($do == 'deposit') {
		if ($user['char_life_cur'] <= 0) die('{"error":"Вам сначала нужно вернуться к жизни!"}');
		if ($amount <= 0) die('{"error":"Сумма должна быть больше 0!"}');
		if ($amount > $user['char_gold']) die('{"error":"Введите правильную сумму!"}');
		$user['char_gold'] -= $amount;
		$user['char_bank'] += $amount;
		update_user_table("char_gold=".$user['char_gold'].",char_bank=".$user['char_bank']);
		$user['log'] = 'Вы положили в банк '.$amount.' зол. мон.';
	}
	
	if ($do == 'withdraw') {
		if ($user['char_life_cur'] <= 0) die('{"error":"Вам сначала нужно вернуться к жизни!"}');
		if ($amount <= 0) die('{"error":"Сумма должна быть больше 0!"}');
		if ($amount > $user['char_bank']) die('{"error":"Введите правильную сумму!"}');
		$user['char_gold'] += $amount;
		$user['char_bank'] -= $amount;
		update_user_table("char_gold=".$user['char_gold'].",char_bank=".$user['char_bank']);
		$user['log'] = 'Вы забрали из банка '.$amount.' зол. мон.';
	}
	
	$res = json_encode($user, JSON_UNESCAPED_UNICODE);	

}

?>