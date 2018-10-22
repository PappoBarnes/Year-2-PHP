<!-- /*Sole Search Year 2 Web Progrmamming Assignment 1 -->

<!-- /*---___---___---___---___---*/
/*---___---___---___---___---*/
/* PHP*/
/*---___---___---___---___---*/
/*---___---___---___---___---*/ -->










<!-- /*---___---___---___---___---*/
/*---___---___---___---___---*/
/* HTML*/
/*---___---___---___---___---*/
/*---___---___---___---___---*/ -->

<!DOCTYPE HTML>
<html>
<head>
	<title>Sole Search, For Sneakerheads</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text" rel="stylesheet">
		<!-- <link rel="stylesheet" type="text/css" href="css/sole_search.css"> -->
</head>
<body>

	<header>
		<a href="assign.php"><button>sole search<button></a>
		<div id="blank"></div>
		<a href="design.php"><button>design</button></a>
		<a href="details.php"><button>details</button></a>
		</header>



	<section id="mainSearch">
			<div id=searchResult> 

			<form action="details.php" method="GET" id="form">
			<fieldset id=searchBox>
			<label for="search"></label>
			<input type="text" name="search" id="search" placeholder="Search Your Sole"></input>
			</fieldset>
			<input type="submit" id="searchButton"></input>
		</form> 
		</div>
	</section>
			<section id=resultContainer>
				
			</section>

</body>
</html>
