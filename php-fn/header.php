<? php
echo '
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
    $("a[href^="#"]").on("click", function(event) {
var target = $(this.href);
if( target.length ) {
    event.preventDefault();
    $("html, body").animate({
        scrollTop: target.offset().top
    }, 1000);
}
});
    </script>
  </ul>
</nav>
</header>
'

 ?>
