<!doctype html5>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <meta name="description" content="We create and deliver sustainable recruitment strategies for our clients. By utilising the most advanced technologies and forward thinking strategies we focus on providing an excellent recruitment experience for hiring managers and candidates alike." />
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
              <a href="#" id="more">Find out more</a></p>
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
  <header>
    <img src="http://www.peopletraction.co.uk/images/logo-design.svg" class="img-center">
    <div></div>
     <nav class="nav">
      <ul onclick="return true">
        <li><a href="home.html" class="current"  >Home</a></li>
        <li><a href="about.html" >About</a></li>
        <li><a href="#services" >services</a></li>
        <li><a href="#why" >why people traction?</a></li>
        <li><a href="contact.html" >contact</a></li>
        <script>
        $('a[href^="#"]').on('click', function(event) {
    var target = $(this.href);
    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});
        </script>
      </ul>
    </nav>
  </header>
  </section>
  <?php include 'php-fn/sticky-contact.php' ; ?>

  <div class="hr-line">
  </div>
<?php include 'php-fn/footer.php' ; ?>
</body>
</html>
