<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Joe's Coaches</title>
    <link rel="stylesheet" href="stylesheet.css">
  </head>

  <body>

    <div class="bg-container">

      <img class="bg-img" src="bg.jpg" alt="No image will be displayed">

      <div class="container">

        <h1>LOG IN</h1>

        <form id="login-form" action="" method="post">

          <div class="tbox">

            <input id="uname" type="text" name="" value="" placeholder="Username">

          </div>

          <div class="tbox">

            <input id="pwd" type="password" name="" value="" placeholder="Password">

          </div>

          <input class="btn" type="submit" name="" value="Login" onclick="validateLogin()">

        </form>

        <a class="b1" href="#">FORGOT PASSWORD</a>
        <a class="b2" href="#">CREATE AN ACCOUNT</a>

      </div>

      <div class="modal">

        <div class="modal-header">

          <img src="img.jfif" alt="">

        </div>

        <p>Incorrect username or password</p>
        <button class="btn" type="button" name="button" onclick="dismissModal()">TRY AGAIN</button>

      </div>

    </div>

  </body>

  <script type="text/javascript" src="main.js">

  </script>
</html>
