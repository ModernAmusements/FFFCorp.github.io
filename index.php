<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - PHP Contact Form Example (2020)</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Contact Form 2020</title>
</head>

<body>
  
<form action="/dist/email.php" method="post" name="contactform">
  
<p><label for="first">First Name *</label><br>
<input maxlength="50" name="first_name" id="first" size="30" type="text" required placeholder="First Name"  /></p>
   
<p><label for="last">Last Name *</label><br>
<input maxlength="50" name="last_name"  id="last" size="30" type="text" required  placeholder="Last Name" /></p>
  
  
<p><label for="phone">Telephone *</label><br>
<input maxlength="30" name="telephone" id="phone" size="30" type="text" required  placeholder="&#215;&#215;&#215;-&#215;&#215;&#215;-&#215;&#215;&#215;&#215;" /></p>
  
  
<p><label for="emailadr">Email *</label><br>
<input maxlength="80" name="email" id="emailadr" size="30" type="email"required  placeholder="you@example.com" /></p>
  

<p><label for="msg">Message *</label><br>
<textarea cols="25" maxlength="1000" id="msg" name="comments" rows="6" required placeholder="Tell us more..." ></textarea></p>
 
<small>* Required</small>
<p><input type="submit" value="Send Message" /></p>
 
</form>
  
</body>
</html>
<!-- partial -->
  <script  src="./script.php"></script>

</body>
</html>
