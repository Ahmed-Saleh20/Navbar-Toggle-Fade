<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="layout/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="layout/css/Main.css"/>
        <link rel="stylesheet" href="layout/css/font-awesome4.min.css" />
        
        <style type="text/css">
        .docnav{
          margin-left:0px;
          margin-top:40px; 
          font-size:20px;
          border-color:#DDD;
          background-color:#eee;
          margin-bottom:40px;
          border-radius: 10px;
          text-align: center;
        }
        .nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
            color: #fff;
            background-color: #31b0d5;
        }
        .docnav > li > a:focus, .docnav > li > a:hover {
            text-decoration: none;
            background-color: #ddd;
        }
        .docnav > li > a {
            position: relative;
            display: block;
            padding: 14px 15px;
        }
        .docnav ul li.active > a, a[aria-expanded="true"] {
            color: #31b0d5;
            background: #31b0d5;
                background-color: rgb(49, 176, 213);
        }
        .gl-navdoc{
          font-size: 13px;
        }
        .btn-attachment{
          width: 100%;
          margin: 0px;
          height: 40px;
          margin-bottom: -9px;
        }
        </style>
        
        <script src="layout/js/jQuery v3.3.1 jquery.min.js"></script>
        <script src="layout/js/Bootstrap v3.3.7 bootstrap.min.js"></script>
		
	</head>
	<body>
        
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <ul class="nav nav-pills docnav">
                  <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
                  <li style="margin-left:0px;"><a data-toggle="pill" href="#menu3">About</a></li>
                </ul>
            </div>
           <div class="col-sm-1"></div>
        </div>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <center><h1><strong>Home</strong></h1><br></center>
            </div>

            <div id="menu3" class="tab-pane fade">
                <center><h1><strong>About</strong></h1><br></center>
            </div>
        </div>
        
	</body>
</html>



