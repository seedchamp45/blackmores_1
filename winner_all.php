<html>
    <head>
        <!----function send url  ---->
        <script>
            if (performance.navigation.type == 1) {
            document.location.href='http://blackmoresmystrongfamily.com';
        }
        else
        {
            var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
            var pathArray = window.location.pathname.split( '/' );
            
              var url = window.location.protocol + "//" + window.location.host +"/index.php?page=winner_all.php";
           window.location= url;
       }
          
        </script>
         <!---- ---->
    </head>
    <body>
        
    </body>
</html>
