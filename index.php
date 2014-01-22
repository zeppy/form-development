<!doctype html>
<html>
<head>
	<title>Form Development</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="script.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<header class="page-title">
	<h1>Form Development</h1>
</header>

<section>
	<form action="#" method="post" class="center">
		<label for="first-name" id="first-name">First Name</label>
		<input type="text" name="first-name" placeholder="First Name" />

		<label for="last-name" id="last-name">Last Name</label>
		<input type="text" name="last-name" placeholder="Last Name" />

		<label for="email" id="email">Email Address</label>
		<input type="email" name="email" placeholder="Email Address" />

		<label for="message" id="message">Message</label>
		<textarea name="message" placeholder="Message" class="center"></textarea>

		<button type="submit" class="center">Send Message</button>
	</form>
</section>
	
</body>
</html>