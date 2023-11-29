<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>
<main>
    <div class="content-wrap">
        <h1>Lets Ride</h1>

    <div class="cardssection">
        <div class="allcards">
            <article class="cards">
            <div>
                <picture class="black">
                    <img src="imagefolder/ride-rent.jpg" alt="Electric scooter red and black color on road">
                </picture>
            <div>
                <h3>Model X</h3>
                <p>
                Introducing our cutting-edge electric scooter model, the Model X. Engineered for urban mobility, this sleek and agile scooter is designed to effortlessly navigate through bustling city streets, sidestepping traffic jams with ease. With a top speed of 30 km per hour, it's not just a ride; it's a swift and eco-friendly journey that complements your urban lifestyle. </p>
                 <?php
                if(isset($_SESSION["userid"])){
                  ?>
                  <a class="btn" href="#book">Book Now</a>
                  <?php }
                  else{
                    ?>
               <a class="btn" href="#signup">Book Now</a>
            <?php } 
            ?>
            </div>
            </article>
            <article class="cards">
            <div >
                <picture class="black">
                    <img src="imagefolder/ride-rent.jpg" alt="Electric scooter red and black color on road">
                </picture>
            <div>
                <h3>Model Y</h3>
                <p>
                Introducing our cutting-edge electric scooter model, the Model Y. Engineered for urban mobility, this sleek and agile scooter is designed to effortlessly navigate through bustling city streets, sidestepping traffic jams with ease. With a top speed of 30 km per hour, it's not just a ride; it's a swift and eco-friendly journey that complements your urban lifestyle. </p>
                 <?php
                if(isset($_SESSION["userid"])){
                  ?>
                  <a class="btn" href="#book">Book Now</a>
                  <?php }
                  else{
                    ?>
               <a class="btn" href="#signup">Book Now</a>
            <?php } 
            ?>

            </div>
            </article>
            <article class="cards">
            <div>
                <picture class="black">
                    <img src="imagefolder/ride-rent.jpg" alt="Electric scooter red and black color on road">
                </picture>
            <div>
                <h3>Model Z</h3>
                <p>
                Introducing our cutting-edge electric scooter model, the Model Z. Engineered for urban mobility, this sleek and agile scooter is designed to effortlessly navigate through bustling city streets, sidestepping traffic jams with ease. With a top speed of 30 km per hour, it's not just a ride; it's a swift and eco-friendly journey that complements your urban lifestyle. </p>
                 <?php
                if(isset($_SESSION["userid"])){
                  ?>
                  <a class="btn" href="#book">Book Now</a>
                  <?php }
                  else{
                    ?>
               <a class="btn" href="#signup">Book Now</a>
            <?php } 
            ?>
            </div>
            <div id="book" class="login-page">
      <div class="form">
      <a href="#close" title="Close" class="close">X</a>

      <h2>Book Now</h2>
        <form class="login-form" method="post">
        <input name="uid" type="text" placeholder=<?php echo $_SESSION["useruid"]; ?> />
        <input  name="date" type="date"/>
        <input  name="time" type="time" placeholder="hh:mm"/>
          <button class="form-wrapper-button" type="submit" name="submit">Book</button>
        </form>
        </div>
      </div>
            </article>
            </div>
        </div>
</div>
</main>
<?php require('partials/foot.php') ?>