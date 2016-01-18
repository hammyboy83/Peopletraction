<header>
<img src="http://www.peopletraction.co.uk/images/logo-design.svg" class="img-center">
<div></div>
 <nav class="nav">
  <ul onclick="return true">
  <?php

  if ($class == "home")
  {
      echo '
      <li><a href="home" class="current">Home</a></li>';
    }
    else
    {
      echo '<li><a href="home">Home</a></li>';
    }
    ;
    ?>
    <?php

    if ($class == "about")
    {
        echo '
        <li><a href="about" class="current">About</a></li>';
      }
      else
      {
        echo '<li><a href="about" >About</a></li>';
      }
      ;
      ?>
      <?php

      if ($class == "services")
      {
          echo '
          <li><a href="home#services" class="current">Services</a></li>';
        }
        else
        {
          echo '<li><a href="home#services" >Services</a></li>';
        }
        ;
        ?>
        <?php

        if ($class == "why")
        {
            echo '
            <li><a href="home#why" class="current">Why</a></li>';
          }
          else
          {
            echo '<li><a href="home#why" >Why</a></li>';
          }
          ;
          ?>
          <?php

          if ($class == "contact")
          {
              echo '
              <li><a href="contact" class="current">contact</a></li>';
            }
            else
            {
              echo '<li><a href="contact" >contact</a></li>';
            }
            ;
            ?>
  </ul>
</nav>
</header>
