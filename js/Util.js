/*!
 *
 *
 *
 *
 */



//===========================================
//
// go to another URL with different http port.
// 
function goUrl(port,dest){
    var curURL = window.location;
    var newURL = curURL.protocol + '//' + curURL.hostname + ':' + port + dest;
    //alert(newURL);
    window.location = newURL; 
}


