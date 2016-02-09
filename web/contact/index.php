<?php include '../php-fn/head.php' ; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>

<?php include '../php-fn/g-map-fn.php' ; ?>

<?php include '../php-fn/eucookie-css.php' ; ?>

<?php include '../php-fn/eucookie-fn.php' ; ?>

<body>
        <?php
        $class = contact;
        include '../php-fn/header.php' ; ?>

        <?php include '../php-fn/sticky-contact.php' ; ?>

        <?php include '../php-fn/hr-line.php' ; ?>

        <main class="main-contact">
              <p>Located in Aberdeen, People Traction offers a range of recruitment services to startup, SME and large businesses located in the UK. Use the contact form below if you would like to know more or have any questions.</p>
              <?php include '../php-fn/contact-form.php' ; ?>
        </main>

        <?php include '../php-fn/hr-line.php' ; ?>

        <?php include '../php-fn/g-map.php' ; ?>

        <?php include '../php-fn/footer.php' ; ?>

</body>

<?php include '../php-fn/ga.php' ; ?>

</html>
