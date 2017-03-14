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
            
             case "ส่งผลงานนะ":
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
       }
         $("#content").load(link_txt);

    });

});
