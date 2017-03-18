/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $(document).ready(function(){
   //  alert("xxx");
     
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
         //alert("=1234 "+getUrl);
       // alert("=1235 "+targetUrl);
        var targetTitle = "test3";
        window.history.pushState({url: "" + targetUrl + ""}, targetTitle, targetUrl);
        // alert("=== "+getUrlParameter('targetUrl'));
       select_page(targetUrl);
    }
    //set url
     
     function select_page(name){
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
       }
         $("#content").load(link_txt);
     }
     
     
     
     
     
   $(".txt_menu").click(function(){
          
      // alert("click"+$(this).text());
      var link_txt;
       switch($(this).text()){
            case "หน้าแรก":
                 $("#add-foot").append('    <div class="bg_footer2" id = "clear-foot" > <div style=" background: url(images/bu_toggle_up.png) no-repeat center ; margin-left: 40%; margin-right: 40%; margin-top: 20px; width: 20%; height: 100px;"> <button type="button" style="opacity: 0; width: 100%; height: 100px;" data-toggle="modal" data-target="#myModal">Open Modallllllllll</button> </div> </div>');
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
       }
         $("#content").load(link_txt);

    });
    
    
        /** url < (--) >**/

        /*$('#menu-nav  a').click(function(e){
            e.preventDefault();
            var targetUrl = $(this).attr('href')+".php",
                targetTitle = $(this).attr('title');

            $("#menu-nav a[href='" + window.location.pathname + "']").fadeTo(500, 1.0);

            window.history.pushState({url: "" + targetUrl + ""}, targetTitle, targetUrl);
           
        });*/
                                                                             
        $('.txt_menu').click(function(e){
            e.preventDefault();
            var targetUrl = $(this).attr('href')+".php",
             targetTitle = $(this).attr('title');
            //$("#menu-nav a[href='" + window.location.pathname + "']").fadeTo(500, 1.0);
            
            window.history.pushState({url: "" + targetUrl + ""}, targetTitle, targetUrl);
           
        });
        
        /*
        window.onpopstate = function(e) {
            $("#menu-nav a").fadeTo('fast', 1.0);
        };*/
     /** url < (--) >**/

    $('.txt_menu').on('click', function(){ 

           if($('.navbar-toggle').css('display') !='none'){
                $(".navbar-collapse.in").collapse('hide');
               // $(".navbar-collapse").toggle('in');
             //$('.navbar-toggle').collapse('hide');
             // $(".navbar-toggle").trigger( "click" );
           }
       });
  
    
    $(".send_work").click(function(){
       
          $("#content").load("page/send_work.php");
             $('#clear-foot').remove();

      });

});
