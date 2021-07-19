<!DOCTYPE html>
<html lang="en">

<?php include("src/page_assets/global_variables.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="/src/css/newstyles.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script
      src="https://kit.fontawesome.com/1ac5dd5d04.js"
      crossorigin="anonymous"
    ></script>
    <script src="src/js/scroll.js"></script>
    <title>Home</title>
  </head>

  <body>
    <header>
      <!-- Header -->
      <div class="parallax">
        <div class="mask">
          <span class="headline">cocoweb<b>.uk</b></span>
          <span class="subtitle">professional website development</span>
          <a class="button" href="#coreValues">
            <i class="fas fa-angle-double-down downArrow"></i>
          </a>
        </div>
      </div>
    </header>

    <main>
      <!-- Our Core Values-->
      <div class="content" id="coreValues">
        <div class="title"><h1>Our Core Values</h1></div>
        <div class="coreValues">
          <div class="flexChild">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="flexChild">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="flexChild">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="flexChild">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>
      </div>

      <div class="contenttwo"></div>
    </main>

    <footer>
    <?php include("src/page_assets/footer_template.php"); ?>
    </footer>
  </body>

</html>
