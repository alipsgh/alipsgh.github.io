<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Ali Pesaranghader's Personal Web Page">
<meta name="keywords" content="Ali, Pesaranghader, Ali Pesaranghader, uOttawa, University of Ottawa, Ottawa, Machine Learning, Deep Learning, Natural Language Processing">
<meta name="author" content="Ali Pesaranghader">
<title>Ali Pesaranghader</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<div id="container">

    <div id="prs_cont">
        <div id="prs_info">
            <span id="name">Ali Pesaranghader</span><br />
            Ph.D. in Machine Learning and Computer Science<br />
			<!--M.Sc. in Software Engineering and Computer Science<br />-->
			Machine Learning, Deep Learning, Natural Language Processing, and Information Retrieval Research Scientist
        </div>
        <img id="prs_photo" src="img/400.jpg" />
    </div>
    
    <div id="menu">
        <span class="menu_item"><a id="about_me" href="./?pid=about_me">About Me</a></span>
		<span class="menu_item"><a id="projects" href="#">Projects</a></span>
		<span class="menu_item"><a id="GitHub" href="https://github.com/alipsgh" target="_blank">GitHub</a></span>
        <span class="menu_item"><a id="publications" href="./?pid=publications">Publications</a></span>
		<span class="menu_item"><a id="Google Scholar" href="https://scholar.google.com/citations?user=Df_-YLgAAAAJ" target="_blank">Google Scholar</a></span>
		<span class="menu_item"><a href="http://www.iwera.ir/~ali/cv-ali_pesaranghader.pdf" target="_blank">C.V.</a></span>
		<span class="menu_item"><a id="contact_me" href="./?pid=contact">Contact Me</a></span>
    </div>
    
    <div id="info"></div>
        
    <div id="footer">
    	<a href="https://www.linkedin.com/in/alipsgh/" target="_blank"><img class="footer_icon" src="icon/linkedin.png" /></a>
        <a href="https://github.com/alipsgh" target="_blank"><img class="footer_icon footer_mid_icons" src="icon/github.png" /></a>
    	<a href="https://twitter.com/alipsgh" target="_blank"><img class="footer_icon" src="icon/twitter.png" /></a>
    	<br/><br/>
    	Ali Pesaranghader &copy; 2020
    </div>

</div>

<?php
	$ip = $_SERVER['REMOTE_ADDR'] ;
	$date = getdate();
	$ip_date = $date['hours'] . ":" . $date['minutes'] . ":" . $date['seconds'] . ", " . $date['weekday'] . " " . $date['mday'] . " " . $date['month'] . ", ". $date['year'];
	
	$location = simplexml_load_file("http://api.locatorhq.com/?user=ali7944&key=a599f0cd4fc41a17b6c89fd8ef6b6f84dc85cfe5&ip=".$ip."&format=xml");
	$lc = $location->countryCode . ' (' . $location->countryName . ') ' . $location->region . ' ' . $location->city;
	
	$server = 'Server: ' . $lc . ' -> ' . $ip . ' -> ' . $ip_date . "\n";
	$browser = 'Browser: ' . $_SERVER['HTTP_USER_AGENT']. "\n";
	$separator = '------------------------' . "\n";
	
	$ip_file = fopen("ip_server.txt", "a");
	fwrite($ip_file, $server);
	fwrite($ip_file, $browser);
	fwrite($ip_file, $separator);
	fclose($ip_file);	
?>

<!-- JAVASCRIPT AND JQUERY SECTION -->
<script language="javascript" src="js/jquery.js"></script>
<script language="javascript" src="js/script.js"></script>
<script>
    loc = window.location.href;
    loc = loc.split("?pid=");
    load_info(loc[1])
</script>

</body>
</html>
