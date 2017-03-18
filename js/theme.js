/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $(document).ready(function(){

    $(".txt_menu").click(function(){
          $('#clear-foot').remove();
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
        var setCurrentPage = function(url) {
            $('h2 span').html(url || "/");
            $("#menu-nav a[href='" + url + "']").fadeTo(500, 0.3);
        };

        $('#menu-nav .menu_bar1 a').click(function(e){
            e.preventDefault();
            var targetUrl = $(this).attr('href'),
                targetTitle = $(this).attr('title');

            $("#menu-nav a[href='" + window.location.pathname + "']").fadeTo(500, 1.0);

            window.history.pushState({url: "" + targetUrl + ""}, targetTitle, targetUrl);
            setCurrentPage(targetUrl);
        });

        window.onpopstate = function(e) {
            $("#menu-nav a").fadeTo('fast', 1.0);
            setCurrentPage(e.state ? e.state.url : null);
        };
     /** url < (--) >**/

        $('.nav a').on('click', function(){ 

               if($('.navbar-toggle').css('display') !='none'){
                   $(".navbar-toggle").trigger( "click" );
               }
           });
  
    
    $(".send_work").click(function(){
       
          $("#content").load("page/send_work.php");
             $('#clear-foot').remove();

      });

});
