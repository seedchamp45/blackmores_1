<html>
    <head>
        <!----function send url  ---->
        <script>
            var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
            var pathArray = window.location.pathname.split( '/' );
            
            var url = window.location.protocol + "//" + window.location.host +"/"+pathArray[1]+"/index.php?page="+pathArray[2];
           window.location= url;
           
        </script>
         <!---- ---->
    </head>
    <body>
        
    </body>
</html>
