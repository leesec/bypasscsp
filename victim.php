<html>
<head>
<meta http-equiv="Content-Security-Policy" content="style-src 'none';form-action 'none'">
</head>
<body>

<?php echo $_GET["xss"];?>

<form method="POST" id="subscribe" action="/api/v1/newsletter/subscribe">

<input type="hidden" name="password" value="5f4dcc3b5aa765d61d8327deb882cf99" />

<input type="submit" value="Subscribe to newsletter" />

</form>

</body>

</html> 


