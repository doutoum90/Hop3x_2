
var activityTick = function()
    {
        var time = 60000;
        setInterval(function(){
            userActivity(0, Date.now());
        }, time);
    }


var userActivity = function(user_id, time){
    
    if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                try {
                    var fonctionne = true;//parseInt(document.getElementById("debug").innerHTML);
                    
                    
                    
                    if(fonctionne){
                        println_debug(xmlhttp.responseText);
								    }
								    else{ 
								        alert("Il y a eu un probleme 1, veuillez recommencer svp");
								     }
                }
                catch(e){
                    alert("Il y a eu un probleme 2, veuillez recommencer svp");
                    console.log(e);
                }
                
                
            }
            else{
                if((xmlhttp.readyState == 4) && (xmlhttp.status != 200)){
                    console.log("Ca marche pas: \nreadyState ="+xmlhttp.readyState+"\n status ="+xmlhttp.status);
                    alert("Il y a eu un probleme");
                    erreurSauvegarde();
                }
            }
        }

        xmlhttp.open("GET", "http://localhost/Hop3x_2/prototype3.0/back-side/activityState/getActivity.php?user_id=" + user_id +"&time=" + time);
        xmlhttp.send();
}
