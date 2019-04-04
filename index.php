<?php

/*============= Задание первое =============*/

echo '<h3>Задание первое</h3>';

$i = 0;
$br = 0;
while($i < 100){
	if($i % 3 == 0 && $i != 0){
		echo "$i ";
		$br++;
		if($br % 3 == 0){
			echo '<br>';
		}
	}
	$i++;
}

echo '<hr>';


/*============= Задание второе =============*/
echo '<h3>Задание второе</h3>';

$i = 0;
do {
	if($i == 0){
		echo $i . ' - это ноль <br>';
	}elseif($i % 2 == 0 && $i != 0){
		echo $i . ' - это четное число<br>';
	}else{
		echo $i . ' - это нечетное число<br>';
	}
	$i++;
} while ($i <= 10);

echo '<hr>';


/*============= Задание третье =============*/
echo '<h3>Задание третье</h3>';


$oblast = [
	'Новосибирская область' => [
		'Новосибирск',
		'Бердск',
		'Искитим',
	],
	'Московская область' => [
		'Москва',
		'Зеленоград',
		'Клин',
	],
	'Читинская область' => [
		'Чита',
		'Краснокаменск',
		'Нерчинск',
	],
];

foreach($oblast as $key =>$city){
	echo $key . ':<br>';
	foreach($city as $value){
		echo $value . '<br>';
	}
	echo '<br>';
}
echo '<hr>';

/*============= Задание четвертое =============*/
echo '<h3>Задание четвертое</h3>';

$letters = [
	'а' => 'a',   'б' => 'b',   'в' => 'v',
    'г' => 'g',   'д' => 'd',   'е' => 'e',
    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
    'и' => 'i',   'й' => 'y',   'к' => 'k',
    'л' => 'l',   'м' => 'm',   'н' => 'n',
    'о' => 'o',   'п' => 'p',   'р' => 'r',
    'с' => 's',   'т' => 't',   'у' => 'u',
    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
    'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
        
    'А' => 'A',   'Б' => 'B',   'В' => 'V',
    'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
    'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
    'И' => 'I',   'Й' => 'Y',   'К' => 'K',
    'Л' => 'L',   'М' => 'M',   'Н' => 'N',
    'О' => 'O',   'П' => 'P',   'Р' => 'R',
    'С' => 'S',   'Т' => 'T',   'У' => 'U',
    'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
    'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
    'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
    'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
];


echo strtr('Любое слово', $letters);
echo '<hr>';

//$word = strtr('prochee', array_flip($translit)); // обратная транслитерация. Переменная $word получит значение 'прочее'



/*============= Задание пятое =============*/
echo '<h3>Задание пятое</h3>';


echo del_space('i good programmer');

function del_space($string){
	return str_replace(' ', '_', $string);
}
echo '<hr>';



/*============= Задание шестое =============*/
echo '<h3>Задание шестое</h3>';

echo '<a href="layout/index.php">Меню</a>';
echo '<hr>';


	
/*============= Задание седьмое =============*/
echo '<h3>Задание седьмое</h3>';

for($i = 0; $i < 10; print_r($i), $i++){}

echo '<hr>';

/*============= Задание восьмое =============*/
echo '<h3>Задание восьмое</h3>';

$sub = 'привет';
foreach($oblast as $key => $value){
	foreach($value as $city){
		if(mb_substr($city, 0, 1,'UTF8') === 'К'){
			echo $city . '<br>';
		}
	}
}
echo '<hr>';

/*============= Задание девятое =============*/
echo '<h3>Задание девятое</h3>';

function url($word){

	$letters = [
		'а' => 'a',   'б' => 'b',   'в' => 'v',
	    'г' => 'g',   'д' => 'd',   'е' => 'e',
	    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
	    'и' => 'i',   'й' => 'y',   'к' => 'k',
	    'л' => 'l',   'м' => 'm',   'н' => 'n',
	    'о' => 'o',   'п' => 'p',   'р' => 'r',
	    'с' => 's',   'т' => 't',   'у' => 'u',
	    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
	    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
	    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
	    'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
	        
	    'А' => 'A',   'Б' => 'B',   'В' => 'V',
	    'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
	    'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
	    'И' => 'I',   'Й' => 'Y',   'К' => 'K',
	    'Л' => 'L',   'М' => 'M',   'Н' => 'N',
	    'О' => 'O',   'П' => 'P',   'Р' => 'R',
	    'С' => 'S',   'Т' => 'T',   'У' => 'U',
	    'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
	    'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
	    'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
	    'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
	];
	
	$traslit = strtr($word, $letters);
	return del_space($traslit);
}

echo url('Привет мир');