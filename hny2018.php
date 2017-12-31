<?php

const HNY_YEAR = 2018;

const HNY_MYSQL_ADDRESS = 'localhost';
const HNY_MYSQL_PORT = 3306;
const HNY_MYSQL_USER = 'root';
const HNY_MYSQL_PASSWORD = 'mysql password here';
const HNY_MYSQL_DATABASE = 'HNY2018';
const HNY_MYSQL_PREFIX = 'hny_';

const HNY_VKAPI_TOKEN = 'your token';
const HNY_VKAPI_USERID = 'your vkid';
const HNY_VKAPI_VERSION = '5.8';

const HNY_GTIMEZONEAPI_TOKEN = 'your token';
const HNY_GGEOCODINGAPI_TOKEN = 'your token';

$items = array(
	'audio' => array(
		'audio-127481200_456245019',
		'audio-127481200_456245046',
		'audio-127481200_456245011',
		'audio-127481200_456245015',
		'audio-127481200_456245012',
		'audio-127481200_456245014',
		'audio-127481200_456245016',
		'audio-127481200_456245017',
		'audio-127481200_456245278',
		'audio-127481200_456245413',
		'audio-127481200_456245038',
		'audio-127481200_456245021',
		'audio-127481200_456243879',
		'audio-127481200_456245018',
		'audio-127481200_456245039',
		'audio-127481200_456245022',
		'audio-127481200_456245024',
		'audio-127481200_456245025',
		'audio-127481200_456245041',
		'audio-127481200_456245026',
		'audio-127481200_456243664',
		'audio-127481200_456245047',
		'audio-127481200_456245048',
		'audio-127481200_456245279',
		'audio-127481200_456245410',
		'audio-127481200_456245043',
		'audio-127481200_456245044',
		'audio-127481200_456245049',
		'audio-127481200_456245050',
		'audio-127481200_456245074',
		'audio-127481200_456245074',
		'audio-127481200_456245314',
		'audio-127481200_456245040',
		'audio-127481200_456245409',
		'audio-127481200_456245418'
	),
	'photos' => array(
		'photo-35644950_284916369',
		'photo-35644950_284916395',
		'photo-35644950_284916410',
		'photo-35644950_284916422',
		'photo-35644950_284916431',
		'photo-35644950_284916461',
		'photo-35644950_284916469',
		'photo-35644950_284916495',
		'photo-35644950_284916496',
		'photo-35644950_284916501',
		'photo-35644950_284916507',
		'photo-35644950_284916520',
		'photo-35644950_284916526',
		'photo-35644950_284916529',
		'photo-35644950_284916535',
		'photo-35644950_284916543',
		'photo-35644950_284916549',
		'photo-35644950_284916559',
		'photo-35644950_284916563',
		'photo-35644950_284916577',
		'photo-35644950_284916580',
		'photo-35644950_284916597',
		'photo-35644950_284916626',
		'photo-35644950_284916636',
		'photo-35644950_284916644',
		'photo-35644950_284916651',
		'photo-35644950_284916662',
		'photo-35644950_284916669',
		'photo-35644950_284916672',
		'photo-35644950_284916677',
		'photo-35644950_284916683',
		'photo-35644950_284916686',
		'photo-35644950_284916690',
		'photo-35644950_284916697',
		'photo-35644950_284916703',
		'photo-35644950_284916707',
		'photo-35644950_284916720',
		'photo-35644950_284916728',
		'photo-35644950_284916731',
		'photo-35644950_284916739',
		'photo-35644950_284916742',
		'photo-35644950_284916747',
		'photo-35644950_284916755',
		'photo-35644950_284916757',
		'photo-35644950_284916760',
		'photo-35644950_284916769',
		'photo-35644950_284916775',
		'photo-35644950_284916780',
		'photo-35644950_284916783',
		'photo-35644950_284916788',
		'photo-35644950_294052944',
		'photo-35644950_294052949',
		'photo-35644950_294052954',
		'photo-35644950_294052957',
		'photo-35644950_294052959',
		'photo-35644950_294052963',
		'photo-35644950_294052968',
		'photo-35644950_294052972',
		'photo-35644950_294052977',
		'photo-35644950_294052981',
		'photo-35644950_294052983',
		'photo-35644950_294052985',
		'photo-35644950_294052988',
		'photo-35644950_294052992',
		'photo-35644950_294052994',
		'photo-35644950_294052995',
		'photo-35644950_294052999',
		'photo-35644950_294053002',
		'photo-35644950_294053003',
		'photo-35644950_294053007',
		'photo-35644950_294053011',
		'photo-35644950_294053013',
		'photo-35644950_294053016',
		'photo-35644950_294053017',
		'photo-35644950_294053022',
		'photo-35644950_294053024',
		'photo-35644950_294053025',
		'photo-35644950_294053028',
		'photo-35644950_294053030',
		'photo-35644950_294053031',
		'photo-35644950_294053033',
		'photo-35644950_294053036',
		'photo-35644950_294053044',
		'photo-35644950_294053047',
		'photo-35644950_294053049',
		'photo-35644950_294053050',
		'photo-35644950_294053053',
		'photo-35644950_294054274',
		'photo-35644950_294054277',
		'photo-35644950_294054279',
		'photo-35644950_294054282',
		'photo-35644950_294054285',
		'photo-35644950_294054287',
		'photo-35644950_294054292',
		'photo-35644950_294054296',
		'photo-35644950_294054300',
		'photo-35644950_294054302',
		'photo-35644950_294054303',
		'photo-35644950_294054307',
		'photo-35644950_294054311'
	)
);

if ((gmdate('U')) > strtotime('12:10:00 01.01.'.HNY_YEAR.' UTC')) {
	quit('Кажется, Новый год прошёл. До встречи через год!');
}

if (!preg_match("/^[a-zA-Z0-9_\-]{1,}$/", HNY_MYSQL_PREFIX)) {
	quit('Недопустимое значение HNY_MYSQL_PREFIX');
}

$mysql = @new MySQLi(HNY_MYSQL_ADDRESS, HNY_MYSQL_USER, HNY_MYSQL_PASSWORD, HNY_MYSQL_DATABASE, HNY_MYSQL_PORT);
if (mysqli_connect_errno()) {
	quit('Не удалось подключиться к базе данных. Проверьте адрес, логин и пароль.');
}
if (!$mysql->select_db(HNY_MYSQL_DATABASE)) {
	quit('Создайте таблицу '.HNY_MYSQL_DATABASE.' перед тем как запускать этот скрипт.');
}
$mysql->set_charset('utf8');

if (isset($argv[1]) && $argv[1] == 'setup') {
	$status = true;
	if (mysql_set('DROP TABLE IF EXISTS `'.HNY_MYSQL_PREFIX.'cities`, `'.HNY_MYSQL_PREFIX.'users`;') === false) $status = false;
	if (mysql_set('CREATE TABLE IF NOT EXISTS `'.HNY_MYSQL_PREFIX.'cities` (`id` int(4) NOT NULL, `name` varchar(32) NOT NULL, `timezone` varchar(6)) DEFAULT CHARSET=utf8;') === false) $status = false;
	if (mysql_set('CREATE TABLE IF NOT EXISTS `'.HNY_MYSQL_PREFIX.'users` (`id` int(4) NOT NULL, `vkid` int(10) NOT NULL, `city` varchar(32) NOT NULL) DEFAULT CHARSET=utf8;') === false) $status = false;
	if (mysql_set('ALTER TABLE `'.HNY_MYSQL_PREFIX.'cities` ADD PRIMARY KEY (`id`);') === false) $status = false;
	if (mysql_set('ALTER TABLE `'.HNY_MYSQL_PREFIX.'cities` MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;') === false) $status = false;
	if (mysql_set('ALTER TABLE `'.HNY_MYSQL_PREFIX.'users` ADD PRIMARY KEY (`id`);') === false) $status = false;
	if (mysql_set('ALTER TABLE `'.HNY_MYSQL_PREFIX.'users` MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;') === false) $status = false;
	if (!$status) quit('Во время установки произошла ошибка с mysql. Возможно, его следует обновить.');
	
	$friends = vkapi('friends.get', array('fields' => 'city'));
	$sql = "INSERT INTO `".HNY_MYSQL_PREFIX."users` (`vkid`, `city`) VALUES ";
	foreach ($friends['response']['items'] as $friend) {
		isset($friend['city']) ? $city = $friend['city']['title'] : $city = 'null';
		$sql .= "(".$friend['id'].", '".$city."'),";
	}
	mysql_set(substr($sql, 0, -1));
	$requests = 0;
	$cities = mysql_get('SELECT city FROM hny_users GROUP BY city');
	$sql = "INSERT INTO `".HNY_MYSQL_PREFIX."cities` (`name`, `timezone`) VALUES ";
	foreach ($cities as $key => $name) {
		if ($name['city'] == 'null') {
			$sql .= "('null', 'null'),";
		}
		if ($requests++ >= 50) {
			echo $key , '/', count($cities), ' cities...', PHP_EOL;
			sleep(1);
			$requests = 0;
		}
		$coord = getCoordinates($name['city']);
		if ($coord) {
			$requests++;
			$timezone = getTimezone($coord['lat'], $coord['lng']);
			if ($timezone !== false) {
				$sql .= "('".$name['city']."', '".$timezone."'),";
			}
		}
	}
	mysql_set(substr($sql, 0, -1));
	quit('Установка успешно завершена.');
}

$now = gmdate('G');
$minutes = gmdate('i');
$now > 0 ? $gmt = 24 - $now : $gmt = -$now;

if (abs($minutes - 30) < 3) {
	$gmt = $gmt.'.5';
}

if ($gmt == '-12') {
	$gmt = 'null';
}

$users = mysql_get("SELECT `vkid`, `city` FROM `".HNY_MYSQL_PREFIX."users` WHERE `city` IN (SELECT `name` FROM `".HNY_MYSQL_PREFIX."cities` WHERE `timezone` LIKE '".$gmt."')");

if (count($users) == 0) {
	quit('Некого сейчас поздравлять.');
}

$cities = array();
$text = 'С Новым годом, ';
$emoji = array('&#9731;', '&#10052;', '&#127876;', '&#128165;', '&#128293;', '&#128171;', '&#127879;', '&#127856;', '&#127874;', '&#127873;', '&#127881;', '&#127882;', '&#128142;');

if ($gmt == 'null') {
	foreach ($users as $u) {
		$cities['Планета Земля'][] = $u['vkid'];
	}
} else {
	foreach ($users as $u) {
		$cities[$u['city']][] = $u['vkid'];
	}
}

foreach ($cities as $city => $users) {
	$len = mb_strlen($city);
	foreach ($users as $k => $user) {
		if ($len > $k) {
			$text .= '[id'.$user.'|'.mb_substr($city, $k, 1).']';
		} else {
			$text .= '[id'.$user.'|'.$emoji[mt_rand(0, count($emoji) - 1)].']';
		}
	}
	if (mb_strlen($city) > count($users)) {
		$text .= mb_substr($city, count($users));
	}
	$text .= ', ';
}

$text = mb_substr($text, 0, -2).' !';

$attachments = '';
for ($i = 0; $i < 3; $i++) {
   $attachments .= $items['audio'][mt_rand(0, count($items['audio']) - 1)].',';
}
$attachments .= $items['photos'][mt_rand(0, count($items['photos']) - 1)].',';
$attachments = substr($attachments, 0, -1);

var_dump($text, $attachments);

vkapi('wall.post', array('message' => $text, 'attachments' => $attachments));

function getTimezone($lat, $lng) {
	$response = curl('https://maps.googleapis.com/maps/api/timezone/json?location='.$lat.','.$lng.'&timestamp='.time().'&key='.HNY_GTIMEZONEAPI_TOKEN);
	if ($response['status'] == 'OK') {
		return $response['rawOffset'] / 3600;
	} elseif ($response['status'] == 'ZERO_RESULTS') {
		return false;
	} else {
		quit('Ошибка Google TimeZone API: '.$response['error_message']);
	}
}

function getCoordinates($place) {
	$response = curl('https://maps.googleapis.com/maps/api/geocode/json?address='.str_replace(' ', '+', $place).'&key='.HNY_GGEOCODINGAPI_TOKEN);
	if ($response['status'] == 'OK') {
		return $response['results'][0]['geometry']['location'];
	} elseif ($response['status'] == 'ZERO_RESULTS') {
		return false;
	} else {
		quit('Ошибка Google GeoCode API: '.$response['error_message']);
	}
}

function vkapi($method, $args, $dieOnError = true) {
	$url = 'https://api.vk.com/method/'.$method.'?access_token='.HNY_VKAPI_TOKEN.'&v='.HNY_VKAPI_VERSION.'&';
	foreach ($args as $index => $value) {
		$value = str_replace([" ", "&", "#", ";", "%n%"], ["%20", "%26", "%23", "%3B", "%0A"], $value);
		$url .= $index."=".$value."&";
	}
	$response = curl($url);
	if (!isset($response['response']) && !isset($response['error'])) {
		if ($dieOnError)
			quit('Произошла неизвестная ошибка при отправке запроса.');
		return false;
	} elseif (isset($response['error']) && !in_array($response['error']['error_code'], array(15, 18))) {
		quit('Произошла ошибка при работе с API: '.$response['error']['error_msg']);
	}
	return $response;
}

function curl($url) {
	$curlObject = curl_init($url);
	curl_setopt($curlObject, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curlObject, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curlObject, CURLOPT_RETURNTRANSFER, true);
	$data = @curl_exec($curlObject);
	@curl_close($curlObject);
	if ($data) {
		return json_decode($data, true);
	}
	return false;
}

function mysql_multiple($query) {
	global $mysql;
	return $mysql->multi_query($query);
}

function mysql_set($query) {
	global $mysql;
	return $mysql->query($query);
}

function mysql_get($query) {
	global $mysql;
	$result = $mysql->query($query);
	if ($result === false) return false;
	
	$answer = array();
	while ($row = $result->fetch_assoc()) {
		$answer[] = $row;
	}
	$result->free();
	
	return $answer;
}

function quit($message = 'KILL') {
	exit($message . PHP_EOL);
}

?>
