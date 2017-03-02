<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<div id='target'>
	
		<div class="row page-registration">
	
		<div class="col-md-4 col-md-offset-3 col-sm-6 col-sm-offset-3">   
                    
			 <div class="form-body bg-white padding-20">
	                <form class="validator form-horizontal " id="signupForm" action="php/checkLogin.php"  method="post" accept-charset='UTF-8'>
	                    <div class="form-group">
	                        <label for="username">Username</label>
	                        <input type="text" class="form-control" id="username" name="username" placeholder="username">
	                    </div>
	                    <div class="form-group">
	                        <label for="password">Password</label>
	                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
	                    </div>
	                    <div class="row">
	                        <div class="col-md-12 text-left"><a href="#" onclick="check('register');">สมัครสมาชิก</a></div>
	                    </div>
	                    <div class="row">
	                        <div class="col-md-12 text-center">
	                            <button type="submit" class="btn btn-green btn-raised btn-flat" id="login" name="login">เข้าสู่ระบบ</button>
	                        </div>
	                    </div>
	                     
	                    <hr/>
	                    
	                    <div class="row">
	                        <div class="col-md-12 text-center">
	                            
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="col-md-12 text-center">
	                            <button type="submit" class="btn btn-green btn-raised btn-flat" id="login" name="login">Facebook</button>
	                        </div>
	                    </div>
	                    
	                </form>
	          </div>
	       </div>
	      </div>      
	</div>
</body>
</html>