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
      $result1='	<div style="width:30%"></div><div id="result" class="result">Thank You! We will be in touch</div>';
    } else {
      $result1='<div class="result-danger">Sorry there was an error sending your message. Please try again later.</div>';
    }
  }
    }
  ?>
  <?php
  if (isset($_POST["check"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    include 'mail-optin.php';
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
        <label for="check1" class="col-sm-2 control-label"></label>
        <div class="input-col">
        <label for="check" class="col-sm-2 control-label">Join mailing list</label>
        <input id="check" name="check" type="radio" value="optin" class="radio-inline">
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
<?php echo $result1; ?>
