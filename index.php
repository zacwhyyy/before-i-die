<!DOCTYPE html>
<html>
<head>
	<title>Before I die, I want to</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="What do you want to do before you die?">
    <meta property="og:url" content="http://limzhiyang.com/codetolearn/project3-beforeidie/" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Before I die, I want to..." />
	<meta property="og:description" content="What do you want to do before you die?" />
	<meta property="og:image" content="http://limzhiyang.com/codetolearn/project3-beforeidie/image/banner-fb.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php $fileDirectory = "http://limzhiyang.com/codetolearn" ?>
	<!-- Navigation Bar -->
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand" href="#">Before I Die</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo $fileDirectory; ?>">Code to Learn</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="http://limzhiyang.com/profile/" target="_blank">About Me</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<!-- Content Starts Here -->
	<div class="container mt-5">
		<div class="row pt-5">
			<div class="col-1 col-sm-2"></div>
			<div class="col-10 col-sm-8">
				<h1 class="text-center">Before I die, I want to...</h1>
			</div>
			<div class="col-1 col-sm-2"></div>
		</div>
		<div class="row mt-2">
			<div class="col-1 col-sm-2"></div>
			<div class="col-10 col-sm-8">
				<form method="post" action="function.php"> 
					<div class="form-row align-items-center">
						<div class="col-12 col-sm-9">
						<input class="form-control form-control-lg" type="text" name="myInput" id="myInput" placeholder="What's your last wish?">
						</div>
					
						<div class="col-12 col-sm-3">
						<input class="btn btn-lg btn-info" type="submit" value="Leave a Note" id="submit">
						</div>
					</div>
				</form>
			</div>
			<div class="col-1 col-sm-2"></div>
		</div>
		<div class="row mt-5 mb-5">
			<div class="col-1 col-sm-2"></div>
			<div class="col-10 col-sm-8">
			<h4 class="text-center">What other people says...</h4>
			<hr>
			<?php include 'readFunction.php';?>
			</div>
			<div class="col-1 col-sm-2"></div>
		</div>
	</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>

<script src="script.js"></script>