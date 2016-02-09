<?php
echo '
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<?php
if(!isset($_COOKIE["eucookie"]))
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
</head>
<body>
<?php
if(!isset($_COOKIE["eucookie"]))
{ ?>
    <div id="eucookielaw" >
            <p>By browsing our site you agree to our use of cookies. You will only see this message once.
            <a href="cookies/" id="more" style="color:#ffffff;text-decoration:underline;">Find out more</a></p>
    </div>



    </section>
<script type="text/javascript">
if( document.cookie.indexOf("eucookie") ===-1 ){
$("#eucookielaw").show();
SetCookie("eucookie","eucookie",365*10)
}
else {
$("#eucookielaw").remove();
}
</script>
<?php } ?>
';
?>
