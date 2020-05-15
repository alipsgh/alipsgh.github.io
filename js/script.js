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

    jQuery.get(loc, function(data){
        $('#info').html(data);
    });

}