/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $(document).ready(function(){
   
   
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    }
    
   
    //set url
     
    var getUrl= getUrlParameter('page');
 
    if(getUrl){
           
        var targetUrl = getUrl;
        var targetTitle = "test3";
        window.history.pushState({url: "" + targetUrl + ""}, targetTitle, targetUrl);
     
       select_page(targetUrl);
    }
    //set url
     
     function select_page(name){
       //alert("name");
         switch(name){
            case  "index.php":
                 $("#add-foot").append('    <div class="bg_footer2" id = "clear-foot" > <div style=" background: url(images/bu_toggle_up.png) no-repeat center ; margin-left: 40%; margin-right: 40%; margin-top: 20px; width: 20%; height: 100px;"> <button type="button" style="opacity: 0; width: 100%; height: 100px;" data-toggle="modal" data-target="#myModal">Open Modallllllllll</button> </div> </div>');
                link_txt ="page/index.php";
               break;
            case  "rule.php":
                link_txt ="page/rule.php";
               break;
            
            case "send_work.php":
                 link_txt ="page/send_work.php";
               break;
               
            case "showcase.php" :
                link_txt ="page/showcase.php";
              break;
             
            case "winner_all.php":
                link_txt ="page/winner_all.php";
               break;
               
            case "activity.php":
                link_txt ="page/activity.php";
                break;
                
            case "select_hero.php":
                link_txt ="page/select_helo.php";
                break;    
                
            case "select_hero1.php":
                link_txt ="page/select_hero1.php";
                break; 
                
            case "select_hero2.php":
                link_txt ="page/select_hero2.php";
                break;   
            
            case "send_work1.php":
                link_txt ="page/send_work1.php";
                break; 
            
       }
      
         $("#content").load(link_txt);
     }
     
     
      $('.bu1').on('click', function(){
        //alert("bu2");    
        $('#myModal').delay(120).fadeOut(10);

        setTimeout(function(){
            $('#myModal').modal("hide");
            
            link_txt ="page/select_helo.php";
            $("#content").load(link_txt);
            
            var targetUrl = "select_hero.php",
             targetTitle = 'select_hero';
            
            window.history.pushState({url: "" + targetUrl + ""}, targetTitle, targetUrl);
        }, 100);
      });
      
       $('.bu2').on('click', function(){
        //alert("bu2");    
        $('#myModal').delay(120).fadeOut(10);

        setTimeout(function(){
            $('#myModal').modal("hide");
            
            link_txt ="page/select_hero1.php";
            $("#content").load(link_txt);
            
            var targetUrl = "select_hero1.php",
             targetTitle = 'select_hero1';
            
            window.history.pushState({url: "" + targetUrl + ""}, targetTitle, targetUrl);
        }, 100);
      });
      
      
       $('.bu3').on('click', function(){
        //alert("bu2");    
        $('#myModal').delay(120).fadeOut(10);

        setTimeout(function(){
            $('#myModal').modal("hide");
            
            link_txt ="page/select_hero2.php";
            $("#content").load(link_txt);
            
            var targetUrl = "select_hero2.php",
             targetTitle = 'select_hero2';
            
            window.history.pushState({url: "" + targetUrl + ""}, targetTitle, targetUrl);
        }, 100);
      });
      
      $('.bu4').on('click', function(){
        //alert("bu2");    
        $('#myModal').delay(120).fadeOut(10);

        setTimeout(function(){
            $('#myModal').modal("hide");
            
            link_txt ="page/showcase.php";
            $("#content").load(link_txt);
            
            var targetUrl = "showcase.php",
             targetTitle = 'showcase';
            
            window.history.pushState({url: "" + targetUrl + ""}, targetTitle, targetUrl);
        }, 100);
      });
      
   
   $(".txt_menu").click(function(){
    
      var link_txt;
      //alert($(this).text());
       switch($(this).text()){
            case "หน้าแรก":
                 $("#add-foot").append('<div class="bg_footer2" id = "clear-foot" > <div style=" background: url(images/bu_toggle_up.png) no-repeat center ; margin-left: 40%; margin-right: 40%; margin-top: 20px; width: 20%; height: 100px;"> <button type="button" style="opacity: 0; width: 100%; height: 100px;" data-toggle="modal" data-target="#myModal">Open Modallllllllll</button> </div> </div>');
                link_txt ="page/index.php";
            break;
            
            case "กติกาและของรางวัล":
                link_txt ="page/rule.php";
            break;
            
            case "ส่งผลงาน":
                 link_txt ="page/send_work.php";
            break;
               
            case "โหวตภาพประกวด":
                link_txt ="page/showcase.php";
            break;
             
            case "ประกาศผู้โชคดี":
                link_txt ="page/winner_all.php";
            break;
               
            case "ร่วมกิจกรรม":
                link_txt ="page/activity.php";
            break;
                
            case "เลือกฮีโร่":
                link_txt ="page/select_helo.php";
            break;    
                
            case "อายุน้อยกว่า 8 ปี":
                link_txt ="page/select_hero1.php";
            break; 
                
            case "อายุ 8 - 12 ปี":
                link_txt ="page/select_hero2.php";
            break;
             case "อายุ 8 - 12 ปี":
                link_txt ="page/select_hero2.php";
            break;
            
            
            case "ส่งผลงาน1":
                link_txt ="page/send_work1.php";
            break;
            
           
         
            
       }
      
      
     
       if($(this).attr('href')=="select_hero"){
            link_txt ="page/select_helo.php";
       }else if($(this).attr('href')=="select_hero1"){
            link_txt ="page/select_hero1.php";
       }else if($(this).attr('href')=="select_hero2"){
            link_txt ="page/select_hero2.php";
       }else if($(this).text()==""){
          // alert("+++++");
            link_txt ="page/send_work.php";
       }
      
       $("#content").load(link_txt);

    });
    
        
    $('.txt_menu').click(function(e){
            e.preventDefault();
            var targetUrl = $(this).attr('href')+".php",
             targetTitle = $(this).attr('title');
            
            window.history.pushState({url: "" + targetUrl + ""}, targetTitle, targetUrl);
           
        });
        
    

    $('.txt_menu').on('click', function(){ 
       
           if($('.navbar-toggle').css('display') !='none'){
             
                $(".navbar-collapse.in").collapse('hide');
             
           }
       });
       
    $("#bar_mobile").click(function(){
     $(".actionBox").css({ 'margin-top': '-60px' });  
    });
    
     $("#close_mobile").click(function(){
        if($('.navbar-toggle').css('display') !='none'){
             $(".actionBox").css({ 'margin-top': '0px' });  
               if($('.navbar-header .navbar-toggle').css('display') !='none'){
                  $(".navbar-header .navbar-toggle").trigger( "click" );
              }
          }   
    });
    
    $(".txt_m").click(function(){
        if($('.navbar-toggle').css('display') !='none'){
             $(".actionBox").css({ 'margin-top': '0px' });  
               if($('.navbar-header .navbar-toggle').css('display') !='none'){
                  $(".navbar-header .navbar-toggle").trigger( "click" );
              }
          }   
    });
    /*$(".send_work").click(function(){
          //$("#content").load("page/send_work.php");
           //  $('#clear-foot').remove();

      });*/

});
