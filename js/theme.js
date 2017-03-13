/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $(document).ready(function(){
    $(".txt_menu").click(function(){
       
      // alert("click"+$(this).text());
      var link_txt;
       
       switch($(this).text()){
            case "หน้าแรก":
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
