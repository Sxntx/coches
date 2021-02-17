<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    		<link rel="icon" href="{{asset('images/Logo.jpg')}}">
    
   	<title>About</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	   

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @section('nav')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand disabled" href="{{ url('/') }}">Blogg</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}" id="hd" >Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('cars')}}" id="hd" >Cars</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('about')}}" id="hd" >About</a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ url('sugerencias')}}" id="hd" >Suggestions</a>
          </li>
        </ul>
      </div>
    </nav>
    
    <style type="text/css">
    
    
/*- Footer -*/
footer {
	padding: 0;
	font-size: 12px;
	font-weight: 500;
	text-transform: uppercase;
	letter-spacing: 1px;
	color: #717171;
	text-align: center;
	border-top: 1px solid #CECECE;
}
footer .footer-socials {
	margin: 60px 0 20px;
}
footer .footer-socials a {
	display: inline-block;
	margin-right: 5px;
	background-color: #626165;
	color: #fff;
	padding: 10px;
	font-size: 20px;
	line-height: 45px;
	width: 45px;
	height: 45px;
	border-radius: 50%;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	transition: all 0.2s ease-out;
}
footer .footer-socials a:hover {
	background-color: #dddddd;
}
footer .footer-bottom {
	padding: 0px 0 15px;
}


    
    
    </style>
  </head>

