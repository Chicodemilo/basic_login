    var hide = 2;
    var left_position = -20;
    var navigationSlider;
    
    function show_contact(){
        document.getElementById("links").style.zIndex = -1;
        document.getElementById('contact_wrapper').style.visibility = "visible";
        var d = new Date(); //creates a new date
        var hh = d.getHours();
        var min = d.getUTCMinutes();
        var dd = d.getDate(); 
        var mm = d.getMonth() + 1; 
        var yyyy = d.getFullYear(); 
        var now = hh + ":" + min + " " + mm + "/" + dd + "/" + yyyy; 

        document.messager.system_date.value = now; 
    }
    
    function show_big_pic(){
        document.getElementById("links").style.zIndex = -1;
        document.getElementById('big_pic_wrapper').style.visibility = "visible";
    }
    
    function hide_contact(){
        document.getElementById("links").style.zIndex = 1;
        document.getElementById('contact_wrapper').style.visibility = "hidden";
    }
    
    function hide_big_pic(){
        document.getElementById("links").style.zIndex = 1;
        document.getElementById('big_pic_wrapper').style.visibility = "hidden";
    }
    
    
    
    function show_links(){
        if(hide == 1){
            document.getElementById("links").style.zIndex = 1;
            document.getElementById('links').style.visibility = 'visible';
            hide = 2;
            
            if(left_position < 100){
                
                clearInterval(navigationSlider);
                
                navigationSlider = setInterval("showNavigationMenu()", 10);
            }
            
        }else{
            document.getElementById("links").style.zIndex = -1;
            clearInterval(navigationSlider);
            hide = 1;
            navigationSlider = setInterval("hideNavigationMenu()", 10);
//            document.getElementById('links').style.visibility = 'hidden';
        }
    }
    
    function showNavigationMenu(){
        if(left_position < -25)
            {
            left_position = left_position + 10;
            document.getElementById("links").style.left = left_position + "px";
            }
    }
    
    function hideNavigationMenu(){
        if(left_position > -1000)
        {
        left_position = left_position - 10;
        document.getElementById("links").style.left = left_position + "px";
        }
    }
    
    function onImgError(source){
        document.getElementById("info_block_pic").style.visibility = 'hidden';
        // disable onerror to prevent endless loop
        source.onerror = "";
        return true;
    }
    