<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>AHIT Demo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Wi1dgh0s7</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="Home.php">Home</a>
            <a class="nav-link" href="Features.php">Features</a>
            <a class="nav-link" href="index.php?file=contact.php">Contact</a>
	<?php
	if (isset($_GET['domain'])) {
		echo "<pre class='bg-default'>";
		$domain = str_replace(array(';','&','&&','|','||','`'),'', $_GET['domain']);
		$whois=system("whois {$domain}");
		echo $whois;
		echo "</pre>";
}
?>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Demo Site</h1>
        <p class="lead">site is Under Construction take this site as a demo to find vulnerabilities, Thank you. </p>
        <p class="lead">
	<form class="form-inline my-2 my-lg-0" action="?domain=" method="get">
    <input class="form-control mr-sm-2" type="text" style="width: 300px;" placeholder="google.com" name="domain">
    <button class="btn btn-primary my-2 my-sm-0" type="submit">Click here</button>
</form>
         
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
        </div>
      </footer>
    </div>
