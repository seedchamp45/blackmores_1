<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            
            
            @font-face {
                font-family: 'db_helvethaica_x76_bdit';
                src: url('db_helvethaica_x_bd_it_v3.2-webfont.woff2') format('woff2'),
                     url('db_helvethaica_x_bd_it_v3.2-webfont.woff') format('woff');
                font-weight: normal;
                font-style: normal;

            }



            input { 
                display: block;
                width: 545px;
                height: 34px;
                padding: 6px 12px;
                border-width: 0px;
                background: #fff url("images/send/input_email.png");
            }
            
     /*       .selectParent select{
                padding: 5px;
                font-size: 16px;
                line-height: 1;
                border: 0;
                border-radius: 5px;
                height: 34px;
                background: url(images/send/arrow.png) no-repeat right #ddd;
                 -webkit-appearance: none;
                -moz-appearance: none;
                background-position-x: 244px;
                
            } */
            .one{
                font-family: db_helvethaica_x;
                font-size: 25px;
            }

            .selectParent select{
                width:220px;
                font-size: 16px;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                padding: 10px 30px 10px 10px;
                border: none;
                line-height: 1;
                border-radius: 5px;
                height: 34px;
                background: rgb(230, 231, 232) url("images/send/arrow.png") no-repeat right center;
            }
            .block label{   color:#0078c9;    }

        </style>
       
        
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/theme_web.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <script src="js/bootstrap.min.js"></script>
        <link href="css/font.css" rel="stylesheet">
         <script>
            $(document).ready(function(){
                $("button").click(function(){
                    alert($('#idStatus').val());
                      $("body").removeClass($('#idStatus').val());
                      $('#idStatus').val('body2');
                      
                      $("body").addClass("body2");
                });
            });
           </script>
        
        
    </head>
    <body class="body">
        <input name="t1" class="box_txt"  placeholder="Email">
         <button type="submit" class="btn btn-default1 center-block bu3" >Submit</button>
         
        <div class="selectParent">
            <select>
                 <option value="1">Option 1</option>
                 <option value="2">Option 2</option>           
            </select>  
        </div>
         <br>
         <p>If you click on me, I will disappear.</p>
            <p>Click me away!</p>
        <p>Click me too!</p>
   
        <input type="text" id="idStatus" value="body"/>
        
        <div class ="one">
            ชิโนรส ประดับลายA
        </div>
        ชิโนรส ประดับลาย
    </body>
</html>
