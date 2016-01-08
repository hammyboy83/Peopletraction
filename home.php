<?php include 'php-fn/head.php' ; ?>
<style type="text/css">
<?php include 'php-fn/eucookie-css.php' ; ?>
</style>
<?php include 'php-fn/eucookie-fn.php' ; ?>

<body>
  <header>
    <img src="http://www.peopletraction.co.uk/images/logo-design.svg" class="img-center">
    <div></div>
     <nav class="nav">
      <ul onclick="return true">
        <li><a href="home" class="current"  >Home</a></li>
        <li><a href="about" >About</a></li>
        <li><a href="#services" >services</a></li>
        <li><a href="#why" >why people traction?</a></li>
        <li><a href="contact" >contact</a></li>
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
  <?php include 'php-fn/sticky-contact.php' ; ?>

  <?php include 'php-fn/hr-line.php' ; ?>
  <?php include 'php-fn/home-content.php' ; ?>
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
