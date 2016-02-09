<!DOCTYPE html>
<html lang="en">

	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>People Traction - Recrutiment Strategies</title>
		<meta name="author" content="DSA79">
		<meta name="norobots" content="noindex,nofollow">
		<meta name="keywords" content="responsive, html5 template, one page, landing, startup, business, company, corporate, creative">
		<meta name="description" content="Crossway - Startup Landing Page Template">

		<!-- Libs CSS -->
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,900italic,900,700italic,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-58149005-2', 'auto');
		  ga('require', 'linkid');
		  ga('send', 'pageview');

		</script>
	</head>
	<?php
	ob_start();

	if(isset($_POST['email'])) {


		// EDIT THE 2 LINES BELOW AS REQUIRED

		$email_to = "iain.hamilton@peopletraction.co.uk";

		$email_subject = "Your email subject line";


		$first_name = $_POST['first_name']; // required
		$email_from = $_POST['email']; // required
		$subject = $_POST['subject']; // required
		$comments = $_POST['message']; // required

		$email_message = "Form details below.\n\n";


		function clean_string($string) {
			$bad = array("content-type","bcc:","to:","cc:","href");
			return str_replace($bad,"",$string);
		}


		$email_message .= "Name: ".clean_string($first_name)."\n";
		$email_message .= "Email Address: ".clean_string($email_from)."\n";
		$email_message .= "Subject: ".clean_string($subject)."\n";
		$email_message .= "Message: ".clean_string($comments)."\n";


		// create email headers

		$headers = 'From: '.$email_from."\r\n".

		'Reply-To: '.$email_from."\r\n" .

		'X-Mailer: PHP/' . phpversion();

		@mail($email_to, $email_subject, $email_message, $headers);

		?>
	<body>
		<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MSJDWC"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MSJDWC');</script>
		<!-- End Google Tag Manager -->
		<div id="contentForm">



				<!-- Message sent! (change the text below as you wish)-->
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<div id="form_response" class="text-center">
								<img class="img-responsive" src="img/thumbs/mail_sent.png" alt="image" />
								<h1>Congratulations!!!</h1>
								<p>Thank you <b><?=$first_name;?></b>, your message is sent!</p>
								<a class="btn btn-primary btn-lg" href="../">Back To The Site</a>
							</div>
						</div>
					</div>
				</div>
				 <!--End Message Sent-->

				<?php

				}

				?>

		</div>
		<!-- Google Code for Adwords enquiry Conversion Page -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 937983583;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "YlvLCJDl52MQ3_yhvwM";
		var google_remarketing_only = false;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/937983583/?label=YlvLCJDl52MQ3_yhvwM&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript>

	</body>

</html>
