$(document).ready(function(){
	
	date = new Date();
	local_time = date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();
	local_gmt = getGMT(date);

	$.ajax({
		type:"POST",
		// url: "ip_catcher.php",
		data: {time: local_time, GMT: local_gmt}
	});
	
});

function getGMT(date){
	gmt = date.getTimezoneOffset() * -1;
	gmtH = parseInt(gmt / 60);
	gmtM = Math.abs(gmt % 60);
	gmt_str = "";
	if(gmtH > 0){ gmt_str = 'GMT+' + gmtH + ':' + gmtM; }
	else { gmt_str = 'GMT' + gmtH + ':' + gmtM; }
	return gmt_str;
}

/* The load_info function is written for the new webpage. */

function load_info(loc){
    switch(loc){
        case 'about_me':
            loc = 'about_me.html';
            break;
        case 'research':
            loc = 'research_interests.html';
            break;
        case 'publications':
            loc = 'publications.html';
            break;
        case 'contact':
            loc = 'contact_me.html';
            break;
        default:
            loc = 'about_me.html';
    }
    loc = 'pg/' + loc;
	$.post(loc, function(data){
		$('#info').html(data);
	});
}