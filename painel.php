<!doctype html>
<html>
<head>
	<?php require("query/load.php");?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
		</script>
<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap-4.3.1.js" type="text/javascript"></script>	
<title>Documento sem título</title>
</head>

<body style="background-color: 	<?php get_bgcolor();?>">
	<h1 id="logo">CRDesign</h1>
	<div id="menuTOP">
	  <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="index.php">Navbar</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
	      <ul class="navbar-nav mr-auto">
	        <li class="nav-item active"> <a class="nav-link" href="painel.php">Painel<span class="sr-only">(current)</span></a> </li>
	        <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
	        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </a>
	          <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
	            <div class="dropdown-divider"></div>
	            <a class="dropdown-item" href="#">Something else here</a> </div>
            </li>
	        <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
          </ul>
	      <form class="form-inline my-2 my-lg-0">
	        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
	
	
	
	
	<script type="text/javascript" src="js/javascript.js">	</script>
	<script type="text/javascript">	LOADBackgroudColo();</script>
	<h3>Painel Administrativo</h3>
	<script type="text/javascript" src="js/jsPainel.js"></script>
	BackGround Color: <input type="color" id="backg" onChange="alterabg(this.value);"></input>
	Text Color: <input type="color" id="textg" onChange="alteratc(this.value);"></input>
	<div id="pp">oi</div>
</body>
</html>