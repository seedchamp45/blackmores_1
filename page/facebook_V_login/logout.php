<?php
	session_start();
	session_unset($_SESSION['fb_access_token']);
	echo"<script type=\"text/javascript\">
                document.location.href='http://blackmoresmystrongfamily.com'; 
            </script>";
?>