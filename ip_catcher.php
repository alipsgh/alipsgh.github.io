<?php

	$local_time = $_POST['time'];
	$local_GMT = $_POST['GMT'];
	
	$ip = $_SERVER['REMOTE_ADDR'] ;
	$date = getdate();
	$ip_date = $date['hours'] . ":" . $date['minutes'] . ":" . $date['seconds'] . ", " . $date['weekday'] . " " . $date['mday'] . " " . $date['month'] . ", ". $date['year'];
	
	//$location = get_meta_tags("http://www.geobytes.com/IpLocator.htm?GetLocation&template=php3.txt&IpAddress=".$ip);
	//$lc = $location['country'] . ' ' . $location['city'] . ' ' . $location['locationcode'] . ' ';		
	$location = simplexml_load_file("http://api.locatorhq.com/?user=ali7944&key=a599f0cd4fc41a17b6c89fd8ef6b6f84dc85cfe5&ip=".$ip."&format=xml");
	$lc = $location->countryCode . ' (' . $location->countryName . ') ' . $location->region . ' ' . $location->city;
	
	$server = 'Server: ' . $lc . ' -> ' . $ip . ' -> ' . $ip_date . "\n";
	$browser = 'Browser: ' . $_SERVER['HTTP_USER_AGENT']. "\n";
	$visitor = 'User: ' . $local_time . ' (' . $local_GMT . ') ' . "\n";
	$separator = '------------------------' . "\n";
	
	$ip_file = fopen("ip_server_local.txt", "a");
	fwrite($ip_file, $server);
	fwrite($ip_file, $browser);
	fwrite($ip_file, $visitor);	
	fwrite($ip_file, $separator);
	fclose($ip_file);

?>