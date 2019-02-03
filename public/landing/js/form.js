function check_sub(event){

    xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
    if (xhttp.readyState==4 && xhttp.status==200)  
        var id = xhttp.responseText;
        if(typeof id == 'string')
        if(id == 'NO'){
            $('.lightboxwrapper').css('display', 'block');
        }else{
            var link = $(event).attr("href");
            document.location.href = link;
            
        }
    }
    
    xhttp.open('POST','check_sub.php',true);
    xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    var data="";
    xhttp.send(data);
}

function hideDiv(){
    $(document).click( function(event){
      if( $(event.target).closest(".lbbox").length ) 
        return;
      $(".lightboxwrapper").fadeOut("slow"); 
      event.stopPropagation();
    });    
};

    $( function() {
            $('#form').submit(function() {
                //return false;
                if($("#chrul").is(':checked') && $('#idPhone').val() != ''){
            return true;
        }else{
            alert('Согласитесь с условиями');
            eventObject.preventDefault();
            return false;
        }
            });
        });