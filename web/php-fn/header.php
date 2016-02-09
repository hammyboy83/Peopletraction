<header>
<img src="http://www.peopletraction.co.uk/images/logo-design.svg" class="img-center/" alt="People Traction logo">
<div></div>
 <nav class="nav">
  <ul onclick="return true/">
  <?php

  if ($class == "home")
  {
      echo '
      <li><a href="" class="current/">Home</a></li>';
    }
    else
    {
      echo '<li><a href="">Home</a></li>';
    }
    ;
    ?>
    <?php

    if ($class == "about")
    {
        echo '
        <li><a href="about" class="current/">About</a></li>';
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
          <li><a href="#services" class="current/">Services</a></li>';
        }
        else
        {
          echo '<li><a href="#services" >Services</a></li>';
        }
        ;
        ?>
        <?php

        if ($class == "why")
        {
            echo '
            <li><a href="#why" class="current/">Why</a></li>';
          }
          else
          {
            echo '<li><a href="#why" >Why</a></li>';
          }
          ;
          ?>
          <?php
          if ($class == "Blog")
          {
              echo '
              <li><a href="blog/" class="current/">Blog</a></li>';
            }
            else
            {
              echo '<li><a href="blog/">Blog</a></li>';
            }
            ;
            ?>
          <?php

          if ($class == "contact")
          {
              echo '
              <li><a href="contact" class="current/">contact</a></li>';
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
