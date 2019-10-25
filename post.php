<html>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">


<head>
	<!-- reuire section to php-->
	<?php	require("query/load.php");?>
	<meta charset="utf-8"/>
	<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
	
<body style="background-color: 	<?php get_bgcolor();?> color: <?php get_txtcolor();?>">
	
<!-- script section-->	
<script type="text/javascript" src="js/instant.js"></script><!-- responsvel pela ajax na barra de pesquisas-->
<script type="text/javascript" src="js/javascript.js"></script><!-- todos os recursos javascript-->
<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script><!-- necessario para a barra de pesquisas bootstrap-->
<script src="js/popper.min.js" type="text/javascript"></script><!-- necessario para a barra de pesquisas bootstrap-->
<script src="js/bootstrap-4.3.1.js" type="text/javascript"></script><!-- necessario para a barra de pesquisas bootstrap-->
	
	
<h1>CRDesign</h1>
	
	<div id="general">
					<?php require("query/postSHOW.php"); ?>
	
	</div>
	
<div id="menuTOP">
	  <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="index.php">HOME</a>
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
	<div id="subs">
		<a class="nav-link" href="subs.php">ASSINE</a>
	</div>
	      <div class="form-inline my-2 my-lg-0">
	        <input type="text" id="sBox" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
	        <button onclick="showResult(document.getElementById('sBox').value);" class="btn btn-outline-success my-2 my-sm-0">Search</button>
          </div>
        </div>
      </nav>
    </div>
<div id="rodape"><center> corporation &reg; CR Design, all Rigths reservated.</center></div>
</body>
</html>