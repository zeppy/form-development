<!doctype html>
<html>
<head>
	<title>Form Development</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src=""></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<header>
	<h1>Form Development</h1>
</header>

<section>
	<form action="#" method="post" class="center">
		<label for="first-name" class="first-name">First Name</label>
		<input type="text" name="first-name" placeholder="First Name" id="first-name" />

		<label for="last-name" class="last-name">Last Name</label>
		<input type="text" name="last-name" placeholder="Last Name" id="last-name" />

		<label for="email" class="email">Email Address</label>
		<input type="email" name="email" placeholder="Email Address" id="email" />

		<label for="Message" class="message">Message</label>
		<textarea name="message" id="message" placeholder="Type your message here"></textarea>

		<button type="submit" class="center">Send Message</button>
	</form>
</section>

</body>
</html>