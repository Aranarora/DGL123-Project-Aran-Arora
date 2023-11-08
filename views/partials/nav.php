<header>

        <nav class="navbar">
        <a href="/">RunRentals</a>
        <!-- creating menu in css only idea taken from https://codepen.io/alvarotrigo/pen/MWEJEWG  -->
        <input id="menu-toggle" type="checkbox" />
            <label class="menu-button-container" for="menu-toggle">
            <mark class="menu-button"></mark>
            </label>
            <ul class="links">
                <li><a href="ride">Ride</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact Us</a></li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <?php
                if(isset($_SESSION["userid"])){
                  ?>
                  <li><a href = "/profile"><?php echo $_SESSION["useruid"]; ?> </a> </li>
                  <li><a class = "active" href="includes/logout.php">LOGOUT</a> </li>
                  <?php }
                  else{
                    ?>
                <li><a href="#signup">SIGN UP</a> </li>
                <li><a href="#login">LOGIN</a>
            </li>
            <?php } 
            ?>
            </ul>
        </nav>
         <!-- https://codepen.io/colorlib/pen/rxddKy -->
            
      <div id="login" class="login-page">
      <div class="form">
      <a href="#close" title="Close" class="close">X</a>

      <h2>LOGIN</h2>
        <form class="login-form" action="includes/login.php" method="post">
        <input type="text" name="uid" type="text" placeholder="Username"/>
        <input type="password" name="psw" type="password" placeholder="Password"/>
          <button class="form-wrapper-button" type="submit" name="submit">LOGIN</button>
          <p class="message">Not registered? <a href="#signup">Create an account</a></p>
        </form>
        </div>
      </div>
      <div id="signup" class="login-page">
      <div class="form">
      <a href="#close" title="Close" class="close">X</a>

      <h2>SIGN UP</h2>
        <form class="login-form" action="includes/signup.php" method="post">
        <input type="text" name="uid" type="text" placeholder="Username"/>
        <input type="password" name="psw"  type="password" placeholder="Password"/>
        <input type="password" name="pswrepeat"  type="password" placeholder="Repeat password"/>
        <input type="text" name="email"  type="email" placeholder="E-mail"/>
          <button class="form-wrapper-button" type="submit" name="submit">SIGN UP</button>
          <p class="message">Already registered? <a href="#login">Sign In</a></p>
        </form>
        </div>
      </div>

</header>