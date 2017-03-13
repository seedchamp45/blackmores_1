<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
 
  
  <style type="text/css">
    
.panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
	border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
	margin-bottom: -1px;
}
/********************************************************************/
/*** PANEL DEFAULT ***/
.with-nav-tabs.panel-default .nav-tabs > li > a,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
}
.with-nav-tabs.panel-default .nav-tabs > .open > a,
.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
	background-color: #ddd;
	border-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
	color: #555;
	background-color: #fff;
	border-color: #ddd;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f5f5f5;
    border-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #777;   
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #555;
}
/********************************************************************/
/*** PANEL PRIMARY ***/
.with-nav-tabs.panel-primary .nav-tabs > li > a,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
    color: #fff;
}
.with-nav-tabs.panel-primary .nav-tabs > .open > a,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
	color: #fff;
	background-color: #3071a9;
	border-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:focus {
	color: #428bca;
	background-color: #fff;
	border-color: #428bca;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #428bca;
    border-color: #3071a9;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #fff;   
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #3071a9;
}
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    background-color: #4a9fe9;
}
/********************************************************************/
/*** PANEL SUCCESS ***/
.with-nav-tabs.panel-success .nav-tabs > li > a,
.with-nav-tabs.panel-success .nav-tabs > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li > a:focus {
	color: #3c763d;
}
.with-nav-tabs.panel-success .nav-tabs > .open > a,
.with-nav-tabs.panel-success .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-success .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-success .nav-tabs > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li > a:focus {
	color: #3c763d;
	background-color: #d6e9c6;
	border-color: transparent;
}
.with-nav-tabs.panel-success .nav-tabs > li.active > a,
.with-nav-tabs.panel-success .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.active > a:focus {
	color: #3c763d;
	background-color: #fff;
	border-color: #d6e9c6;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #3c763d;   
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #d6e9c6;
}
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #3c763d;
}
/********************************************************************/
/*** PANEL INFO ***/
.with-nav-tabs.panel-info .nav-tabs > li > a,
.with-nav-tabs.panel-info .nav-tabs > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li > a:focus {
	color: #31708f;
}
.with-nav-tabs.panel-info .nav-tabs > .open > a,
.with-nav-tabs.panel-info .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-info .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-info .nav-tabs > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li > a:focus {
	color: #31708f;
	background-color: #bce8f1;
	border-color: transparent;
}
.with-nav-tabs.panel-info .nav-tabs > li.active > a,
.with-nav-tabs.panel-info .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.active > a:focus {
	color: #31708f;
	background-color: #fff;
	border-color: #bce8f1;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #d9edf7;
    border-color: #bce8f1;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #31708f;   
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #bce8f1;
}
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #31708f;
}
/********************************************************************/
/*** PANEL WARNING ***/
.with-nav-tabs.panel-warning .nav-tabs > li > a,
.with-nav-tabs.panel-warning .nav-tabs > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li > a:focus {
	color: #8a6d3b;
}
.with-nav-tabs.panel-warning .nav-tabs > .open > a,
.with-nav-tabs.panel-warning .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-warning .nav-tabs > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li > a:focus {
	color: #8a6d3b;
	background-color: #faebcc;
	border-color: transparent;
}
.with-nav-tabs.panel-warning .nav-tabs > li.active > a,
.with-nav-tabs.panel-warning .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.active > a:focus {
	color: #8a6d3b;
	background-color: #fff;
	border-color: #faebcc;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #fcf8e3;
    border-color: #faebcc;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #8a6d3b; 
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #faebcc;
}
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #8a6d3b;
}
/********************************************************************/
/*** PANEL DANGER ***/
.with-nav-tabs.panel-danger .nav-tabs > li > a,
.with-nav-tabs.panel-danger .nav-tabs > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li > a:focus {
	color: #a94442;
}
.with-nav-tabs.panel-danger .nav-tabs > .open > a,
.with-nav-tabs.panel-danger .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-danger .nav-tabs > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li > a:focus {
	color: #a94442;
	background-color: #ebccd1;
	border-color: transparent;
}
.with-nav-tabs.panel-danger .nav-tabs > li.active > a,
.with-nav-tabs.panel-danger .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.active > a:focus {
	color: #a94442;
	background-color: #fff;
	border-color: #ebccd1;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f2dede; /* bg color */
    border-color: #ebccd1; /* border color */
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #a94442; /* normal text color */  
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ebccd1; /* hover bg color */
}
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff; /* active text color */
    background-color: #a94442; /* active bg color */
}

.bg_winner{
    /*background-image: url("images/winner/bg_winner.png");*/
        background: url(images/gallery/bg_winner.png) ; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  
   background-size:     cover;                     
    background-repeat:   no-repeat;
      min-width: 100%;
    min-height: 100%;
    width: 100%;
   height: 100%;
}


.panel {
    margin-bottom: 20px;
    border: 0px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}

.full_bg{
    position: fixed;
    top: 0;
    left: 0;
    min-width: 90%;
    min-height: 90%;
    height: 2500px;
    z-index: -99;
    background: url(images/gallery/bg_winner.png) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.panel {
    margin-bottom: 20px;
    background-color: rgba(255, 255, 255, 0);
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}

.panel-default > .panel-heading {
    color: #333;
   background-color: rgba(255, 255, 255, 0); 
    border-color: #ddd;
}

.icon_green_winner {
   background: url(images/winner/bar_Green.png);
   min-width: 20%;
    min-height: 20%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-repeat: no-repeat;
    background-size: 100% 100%;
  
}
.icon_yellow_winner {
   background: url(images/winner/bar_Yellow.png);
   min-width: 20%;
    min-height: 20%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-repeat: no-repeat;
    background-size: 100% 100%;
  
}

.icon_blue_winner {
   background: url(images/winner/bar_blue.png);
   min-width: 20%;
    min-height: 20%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-repeat: no-repeat;
    background-size: 100% 100%;
  
}

.icon_purple_winner {
   background: url(images/winner/bar_purple.png);
   min-width: 20%;
    min-height: 20%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-repeat: no-repeat;
    background-size: 100% 100%;
  
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a, .with-nav-tabs.panel-default .nav-tabs > li.active > a:hover, .with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
    color: #555;
    background-color: rgba(255, 255, 255, 0);
     border-color: rgba(255, 255, 255, 0); 
    border-bottom-color: transparent;
}

.nav-tabs.centered > li, .nav-pills.centered > li {
    float:inherit;
    display:inline-block;
    *display:inline; /* ie7 fix */
     zoom:1; /* hasLayout ie7 trigger */
}

.nav-tabs, .nav-pills {
    text-align:center;
}

.ul-center{
  margin:0;
  padding:0;
  clear:both;
  text-align:center;
}
.ul-center li{
  display:inline-block;
  padding:10px 20px;
  margin:0;
}


.with-nav-tabs.panel-default .nav-tabs > .open > a, .with-nav-tabs.panel-default .nav-tabs > .open > a:hover, .with-nav-tabs.panel-default .nav-tabs > .open > a:focus, .with-nav-tabs.panel-default .nav-tabs > li > a:hover, .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #000;
    background-color: rgba(0, 0, 0, 0);
    border-color: transparent;
}


.txt_menu_winner{
    font-family: "db_helvethaica_x";
    color: #fff;
     font-style:italic;
    font-weight: bold;  
    font-size: 1.8em;
    text-shadow: 0.5px 0.5px #000;
}

.txt_body_winner{
    font-family: "db_helvethaica_x";
    color: #000;
    font-weight: bold;  
    font-size: 1.5em;
}
.panel-default > .panel-heading {
    color: rgba(51, 51, 51, 0);
    background-color: rgba(255, 255, 255, 0);
    border-color: rgba(221, 221, 221, 0);
}
.nav-tabs > li {
    float: none;
    margin-bottom: -1px;
    border: 0;
}
  </style>
</head>
<body>
 <!--<div id="full_bg"></div>-->
 
 <div class="container">
   <div class="row bg_winner">
        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-2 "> </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 ">
            <div class="panel with-nav-tabs panel-default center-block">
                <div class="panel-heading ">

                        <ul class="nav nav-tabs ul-center center-block">
                            <li class="icon_yellow_winner"><a href="#tab1default" data-toggle="tab"><div class="txt_menu_winner">ประเภทอายุไม่เกิน 8 ปี</div> </a></li>
                            <li class="icon_blue_winner"><a href="#tab2default" data-toggle="tab"><div class="txt_menu_winner">ประเภทอายุ 8-12 ปี </div></a></li>
                            <li class="icon_green_winner"><a href="#tab3default" data-toggle="tab"><div class="txt_menu_winner">รายชื่อผู้ชนะ Popular Vote </div></a></li>
                             <li class="icon_purple_winner"><a href="#tab4default" data-toggle="tab"><div class="txt_menu_winner">ผู้โชคดีจากการโหวต</div></a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default"><div class="txt_body_winner"> Default 111<br><br><br><br><br></div></div>
                        <div class="tab-pane fade" id="tab2default"><div class="txt_body_winner"> Default 2</div></div>
                        <div class="tab-pane fade" id="tab3default"><div class="txt_body_winner"> Default 3</div></div>
                        <div class="tab-pane fade" id="tab4default"><div class="txt_body_winner"> Default 4</div></div>
                        <div class="tab-pane fade" id="tab5default"><div class="txt_body_winner"> Default 5</div></div>
                    </div>
                </div>
             </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-2 "> </div>             
   </div>
 </div>
            <!--</div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-2 "> </div>
   </div>
 </div>
 <!--<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bg_winner">
            
          <ul class="nav nav-tabs">
                <li role="presentation" class="icon_yellow_winner"><a href="#">Home</a></li>
                <li role="presentation" class="icon_blue_winner" ><a href="#">Profile</a></li>
                <li role="presentation" class="icon_green_winner"><a href="#">Messages</a></li>
                  <li role="presentation" class="icon_purple_winner"><a href="#">Messages</a></li>
              </ul>
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 ">
              
                    <div class="panel with-nav-tabs panel-default">
                        <div class="panel-heading ">
                            
                                <ul class="nav nav-tabs ul-center center-block">
                                    <li class="icon_yellow_winner"><a href="#tab1default1" data-toggle="tab"><h5>Default 1</h5> </a></li>
                                    <li class="icon_blue_winner"><a href="#tab2default" data-toggle="tab"><h5>Default 2 </h5></a></li>
                                    <li class="icon_green_winner"><a href="#tab3default" data-toggle="tab"><h5>Default 3 </h5></a></li>
                                     <li class="icon_purple_winner"><a href="#tab4default" data-toggle="tab"><h5>Default 4</h5></a></li>
                                </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1default">Default 111<br><br><br><br><br></div>
                                <div class="tab-pane fade" id="tab2default">Default 2</div>
                                <div class="tab-pane fade" id="tab3default">Default 3</div>
                                <div class="tab-pane fade" id="tab4default">Default 4</div>
                                <div class="tab-pane fade" id="tab5default">Default 5</div>
                            </div>
                        </div>
                     </div>
                -->
            <!--</div>
        </div>
      
       <!--
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 "><button>ประเภทอายุไม่เกิน 8 ปี</button></div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"><button>ประเภทอายุไม่เกิน 8-12 ปี</button></div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"><button>รายชื่อผู้ชนะ Popular Vote</button></div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"><button>ผู้โชคดีจากการโหวต</button></div>
           <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 ">แแแ</div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 ">
                <div class="bg_winner">
                    <div class="panel with-nav-tabs panel-default">
                        <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <li class="icon_green_winner"><a href="#tab1default1" data-toggle="tab">Default 1 </a></li>
                                    <li><a href="#tab2default" data-toggle="tab">Default 2</a></li>
                                    <li><a href="#tab3default" data-toggle="tab">Default 3</a></li>
                                     <li><a href="#tab4default" data-toggle="tab">Default 4</a></li>
                                </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1default">Default 111<br><br><br><br><br></div>
                                <div class="tab-pane fade" id="tab2default">Default 2</div>
                                <div class="tab-pane fade" id="tab3default">Default 3</div>
                                <div class="tab-pane fade" id="tab4default">Default 4</div>
                                <div class="tab-pane fade" id="tab5default">Default 5</div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 ">แแ</div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bg_winner" >
                <div class="panel with-nav-tabs panel-default">
                    <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1default" data-toggle="tab">Default 1 </a></li>
                                <li><a href="#tab2default" data-toggle="tab">Default 2</a></li>
                                <li><a href="#tab3default" data-toggle="tab">Default 3</a></li>
                                 <li><a href="#tab4default" data-toggle="tab">Default 4</a></li>
                            </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1default">Default 111<br><br><br><br><br></div>
                            <div class="tab-pane fade" id="tab2default">Default 2</div>
                            <div class="tab-pane fade" id="tab3default">Default 3</div>
                            <div class="tab-pane fade" id="tab4default">Default 4</div>
                            <div class="tab-pane fade" id="tab5default">Default 5</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>-->
<!--</div>-->
<br/>

</body>
</html>
