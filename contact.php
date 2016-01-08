<!doctype html5>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(57.1498817,-2.1960762),
          zoom: 12 ,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <style type="text/css">
    <?php include 'php-fn/eucookie-cdd.php' ; ?>
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <?php
    if(!isset($_COOKIE['eucookie']))
    { ?>
    <script type="text/javascript">
    function SetCookie(c_name,value,expiredays)
    {
    var exdate=new Date()
    exdate.setDate(exdate.getDate()+expiredays)
    document.cookie=c_name+ "=" +escape(value)+";path=/"+((expiredays==null) ? "" : ";expires="+exdate.toUTCString())
    }
    </script>
    <?php } ?>
    <title>EU Cookie Law Script 2</title>
    </head>
    <body>
    <?php
    if(!isset($_COOKIE['eucookie']))
    { ?>
        <div id="eucookielaw" >
                <p>By browsing our site you agree to our use of cookies. You will only see this message once.
                <a href="cookies" id="more">Find out more</a></p>
        </div>



        </section>
    <script type="text/javascript">
    if( document.cookie.indexOf("eucookie") ===-1 ){
    $("#eucookielaw").show();
    SetCookie('eucookie','eucookie',365*10)
    }
    else {
    $("#eucookielaw").remove();
    }
    </script>
    <?php } ?>
<body>
  <header>
    <img src="http://www.peopletraction.co.uk/images/logo-design.svg" class="img-center">
    <div></div>
     <nav class="nav">
      <ul onclick="return true">
        <li><a href="home" >Home</a></li>
        <li><a href="about" >About</a></li>
        <li><a href="home#services" >services</a></li>
        <li><a href="home#why" >why people traction?</a></li>
        <li><a href="contact" class="current" >contact</a></li>

      </ul>
    </nav>
  </header>
  <?php include 'php-fn/sticky-contact.php' ; ?>
  <div class="hr-line">
  </div>
  <main class="main-contact">

    <p>Located in Aberdeen Peopletraction offers a range of recruitment services to startup, SME and large businesses located in the UK. Use the contact form below if you would like to know more or have any questions.</p>
  </main>
  <article>
    <input type="checkbox" id="read_more" role="button">
   <label for="read_more" onclick=""><span class="button">Contact Us</span></label>
    <?php
    	if (isset($_POST["submit"])) {
    		$name = $_POST['name'];
    		$email = $_POST['email'];
    		$message = $_POST['message'];
    		$human = intval($_POST['human']);
    		$from = 'website';
    		$to = 'info@peopletraction.co.uk';
    		$subject = 'New contact from website';
        $headers = 'From: info@peopletraction.co.uk' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
    		// Check if name has been entered
    		if (!$_POST['name']) {
    			$errName = 'Please enter your name';
    		}

    		// Check if email has been entered and is valid
    		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    			$errEmail = 'Please enter a valid email address';
    		}

    		//Check if message has been entered
    		if (!$_POST['message']) {
    			$errMessage = 'Please enter your message';
    		}
    		//Check if simple anti-bot test is correct
    		if ($human !== 5) {
    			$errHuman = 'Your anti-spam is incorrect';
    		}
    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    	if (mail ($to, $subject, $body, $from, $headers)) {
    		$result='	<div style="width:30%"></div><div id="result" class="result">Thank You! We will be in touch</div>';
    	} else {
    		$result='<div class="result-danger">Sorry there was an error sending your message. Please try again later.</div>';
    	}
    }
    	}
    ?>

    <?php
    if (!$errName && !$errEmail && !$errMessage && !$errHuman){
  echo '<div class="container-hidden">';
  }
      ELSE {
  echo '<div class="container">';
  }
  ?>
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<h1 class="page-header text-center">Contact Form</h1>
				<form class="form-horizontal" role="form" method="post" action="contact.php">
				<div style="display:block;">	<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="input-col">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
        </div>
					<div style="display:block;"><div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="input-col">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
          	</div>
				<div style="display:block;"><div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="input-col">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
        </div>
        <div style="display:block;">
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label"><span style="white-space: nowrap;">2 + 3 = ?</span></label>
						<div class="input-col">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
        </div>
					  <div style="display:block;"><div class="form-group">
					<label for="submit" class="col-sm-2 control-label"></label>
          <div class="input-col">
						<input id="submit" name="submit" type="submit" value="Send" class="button">
						</div>
					</div>
          </div>
					  <div style="display:block;"><div class="form-group">
					</div>
          </div>
				</form>
			</div>
		</div>
	</article>
  <?php echo $result; ?>

  <div class="hr-line">
  </div>
  <section id="map">

  </section>

  <?php include 'php-fn/footer.php' ; ?>

</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58149005-2', 'auto');
  ga('send', 'pageview');

</script>
</html>
