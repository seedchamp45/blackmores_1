<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery UI Tabs - Content via Ajax</title>

<!-- jquery css 
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--  css 
<link href="css/theme.css" rel="stylesheet">-->


<script>

function check(link){
	

var st="page/";
switch(link){
	case "index":
		st+="index2.html";
	    break;
	    
	case "rule":
		st+="rule.html";
	    break;
	    
	case "activity":
		st+="activity.html";
	    break;
	    
	case "send_work":
		st+="send_work.html";
	    break;
	    
	case "show_case":
		st+="show_case.html";
	    break;
	
	case "winner":
		st+="winner.html";
	    break;  
	case "login":
		st+="login.html";
	    break;  

	case "register":
		st+="register.html";
	    break;      
	       
}

alert(st);
	  
$('#tar').load(st);  // here 'test.html' is a page and 'target' id a id of 'test.html'
}
  </script>


<link rel="stylesheet" href="css/bootstrap.css">

	</head>
	<body>
	<!-- <nav class="navbar navbar-inverse navbar-fixed-top"> -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
           
             <li class="dropdow">
             	<a href="#" onclick="check('login');"  class="dropdown-toggle" data-toggle="dropdown">Menu</a>
             	<ul class= "dropdown-menu">
             		<li> <a href="#" onclick="check('login');">About Us</a></li>
             		<li> <a href="#" onclick="check('login');">Privacy Policy</a></li>
             		<li> <a href="#" onclick="check('login');">Terms of Use</a></li>
             		<li> <a href="#" onclick="check('login');">DMCA Policy</a></li>
             		<li> <a href="#" onclick="check('login');">Contact Us</a></li>
             		<li role="separator" class="divider"></li>
             		<li>
             			<div >
             				<a href="#" onclick="check('login');"><img src="images/fb.png"></a>
             			  	<a href="#" onclick="check('login');"><img src="images/google_plus.png"></a>
             			   	<a href="#" onclick="check('login');"><img src="images/pinterest.png"></a>
             			 </div>
             		</li>
             	</ul>	
             </li>
             	
             <li class="active"><a href="#" onclick="check('login');">Everything</a></li>
             <li><a href="#" onclick="check('login');">Categories</a>
             	<ul class= "dropdown-menu">
             		<li> <a href="#" onclick="check('login');">8-12 years old</a></li>
             		<li> <a href="#" onclick="check('login');">Under 8 years old</a></li>
             	</ul>
             </li>
             <li><a href="#" onclick="check('login');">Likes</a></li>
             <li><a href="#" onclick="check('login');">Popular</a></li>
             <li><a href="#" onclick="check('login');">Search</a></li>
             <li><a href="#" onclick="check('login');">Submit New</a></li>
          </ul>
          
            <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#"  onclick="check('index');">Login</a></li>
            <li><a href="#" onclick="check('login');" >Register</a></li>
            
               
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    
	<div class="container">
	
 		
		
		 <div class="row">
			 <div class="col-md-12">
				<div id="tar">cccccccccccccc
				ccxxx
				</div>
			</div>
		</div>
	</div>

	
	
	

	</body>
	</html>