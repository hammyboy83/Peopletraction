<!doctype html5>
<html>
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
<body id="lost">
  <div style="height:15%">
  </div>
  <div class="lost" style="height:33%;width:60%;margin:auto;text-align:center; background-color:14748c;  ">
    <p class="lostp">Oooops...it looks like you have got a bit lost!</p>
    <p class="lostp"><a href="home" style="text-decoration:underline;color:#ffffff;">Click here</a> to get back to our site.</p>
  </div>
  <div style="height:33%">
  </div>
</body>
</html>
