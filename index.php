<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ocean Black Studio</title>
    <link rel="stylesheet" href="_css/reset.css">
    <link rel="stylesheet" href="_css/slider.css">
    <link rel="stylesheet" href="_css/styles.css">
</head>
<body>
   <header>
       <h1>Ocean Black Studio</h1>
       <div class="slider">
        <div class="slide-viewer">
          <div class="slide-group">
            <div class="slide slide-1">
              <img src="images/slide-1.jpg" alt="No two are the same" />
            </div>
            <div class="slide slide-2">
              <img src="images/slide-2.jpg" alt="Monsieur Mints"  />
            </div>
            <div class="slide slide-3">
              <img src="images/slide-3.jpg" alt="The Flower Series"  />
            </div>
            <div class="slide slide-4">
              <img src="images/slide-4.png" alt="Salt o' The Sea"  />
            </div>
          </div>
        </div>
        <div class="slide-buttons"></div>
      </div>
      <nav>
         <div id="navwrap">
          <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="http://oceanblackstudio.com/blog/">Blog</a></li>
          </ul>
         </div>
      </nav>
   </header>
   <section id="maincontent">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d188885.75008764098!2d-83.14296578500907!3d42.29261340845711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b2ac1b54f886b%3A0xb66cd49527fcdc51!2sWindsor%2C+ON!5e0!3m2!1sen!2sca!4v1446757209086" width="960" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php

$first_name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "colinthompson@oceanblackstudio.com, razvanpusca@oceanblackstudio.com, erikmatos@oceanblackstudio.com";
$subject = "Message from Ocean Black visitor";

if ($_POST['submit']) {
    mail ($to, $subject, $message, "From: " . $first_name);
    echo "Your message has been sent<br />";
}


?>
       <form action="<?PHP echo $_SERVER['PHP_SELF']?>" method="post" name="">
       <legend><h2>Email Us:</h2></legend>
		<p>	
			<label for="name">Name:</label>
			<input name="name" type="text" />
		</p><br />
		<p>
			<label for="email">Email:</label>
			<input name="email" type="text" />
		</p><br />

		<p><label for="message">Message:</label></p>
		<p>
		  <textarea name="message" cols="45" rows="9"></textarea>
		</p>
		<input name="submit" type="submit" value="Submit">
		</form>
   </section>
    <footer>
        &copy; Ocean Black Studio <?php echo date( 'Y' ); ?>
    </footer>
   
    <script src="_js/jquery-1.11.0.min.js"></script>
    <script src="_js/script.js"></script>
</body>
</html>