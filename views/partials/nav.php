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
                <li><a href="contact">Contact Us</a>
                <li><a href="#">SIGN UP</a>
                <li><a href="#login">LOGIN</a>
            </li>
            </ul>
        </nav>
         <!-- https://codepen.io/colorlib/pen/rxddKy -->
            
      <div id="login" class="login-page">
      <div class="form">
      <a href="#close" title="Close" class="close">X</a>

      <h2>Login Form</h2>
        <form class="login-form">
        <input type="text" id="field-1" type="text" placeholder="username"/>
        <input type="password" id="field-1" type="password" placeholder="password"/>
          <button class="form-wrapper-button">LOGIN</button>
          <p class="message">Not registered? <a href="#signup">Create an account</a></p>
        </form>
        </div>
      </div>
      <div id="signup" class="login-page">
      <div class="form">
      <a href="#close" title="Close" class="close">X</a>

      <h2>Sign Up Form</h2>
        <form class="login-form">
        <input type="text" id="field-1" type="text" placeholder="username"/>
        <input type="password" id="field-1" type="password" placeholder="password"/>
        <input type="text" id="field-1" type="email" placeholder="email address"/>
          <button class="form-wrapper-button">SIGN UP</button>
          <p class="message">Already registered? <a href="#login">Sign In</a></p>
        </form>
        </div>
      </div>

</header>