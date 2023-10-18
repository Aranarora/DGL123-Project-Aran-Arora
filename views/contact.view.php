<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>
<main class="content-wrap">
        <h1>Contact Us</h1>

        <div class="form-wrapper">
            <h2>Contact Form</h2>
            <form method="post" action="link-of-the-action">
                <label for="field-1">
             Full Name<span class="form-label-required"
              >* (required)</span></label>
                <input type="text" id="field-1" name="placeholder-1" placeholder="Ex: Aran Arora" required/>

                <label for="field-2">Mobile numbeer<span class="form-label-required"
              >* (required)</span></label>
                <input type="text" id="field-2" name="placeholder-2" placeholder="Ex: 7781234567" required/>

                <label for="field-3">E-mail<span class="form-label-optional"
              >* (optional)</span
            ></label>
                <input type="text" id="field-3" name="placeholder-2" placeholder="Ex: aran1234@gmail.com" />
                <div class="form-wrapper-button">
                    <input type="submit" value="Submit" />
                </div>
            </form>
        </div>

    </main>
<?php require('partials/foot.php') ?>