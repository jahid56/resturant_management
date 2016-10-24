        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">

        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        
        
        <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
      

        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
   
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="js/moment-with-locales.js"></script>

<nav  style="padding: 10px 10px 10px 30px; "class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">


    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Restaurant</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul style= "font-size:28px;" class="nav navbar-nav">
        
         <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('menu') }}">Menu</a></li>
        <li><a href="{{ route('reservation') }}">Table book</a></li>
      	<li><a href="{{ route('about') }}">About Us</a></li>
      	<li><a href="{{ route('contact') }}">Contact Us</a></li>
      </ul>
      <div style="float: right"><form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      </div>
      </div>
      
</div>
</nav>
<div style="background-color: #E6EFF2;   ">

