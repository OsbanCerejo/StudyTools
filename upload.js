function populate(s1){
    var s1 = document.getElementById(s1);

    if(s1.value == "semester5"){
             document.getElementById("subject").style.display = "block";
       }

}
function populate2(s2){
    var s2 = document.getElementById(s2);

    if(s2.value == "sooad" || s2.value == "mp" || s2.value == "mp" || s2.value == "cn" || s2.value == "bce"){
             document.getElementById("type").style.display = "block";
       }
    var sub = document.getElementById('subject').options[document.getElementById('subject').selectedIndex];
    send(sub.id);
		
}


function send(sub){
    

    $.post('upload.php', {postsub:sub},
          
           function (data){
           //$('#result').html(data);
            }
          ); 
}


