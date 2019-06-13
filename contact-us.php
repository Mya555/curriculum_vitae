<?php
/*
 * @author: Bella Ozdamirova
 * @date: 02/06/2019
 */
include "header.php";
?>

<body class="top-navigation pushy-right-side borderless">

<?php
include "menu.php";
?>


<section class="white-wrapper special-max-width allow-overflow">
    <div class="section-inner drag-me-up">

        <div class="row">
            <div class="col-md-2 avatar">
                <h3 class="section-title">Contact</h3>

                <a href="#" class="photo">

                    <img src="assets/images/avatar.PNG"/>
                    <div class="glow-wrap">
                        <i class="glow"></i>
                    </div>
                </a>

            </div>
            <div class="col-md-5 col-sm-offset-3 awesome-text">

                <p class="line-1 anim-typewriter"></p>
                <div class="css-typing">
                    <p>
                        if(sad() === true) {
                    </p>
                    <p>
                        sad().stop();
                    </p>
                    <p>
                        beAwesome(); }
                    </p>
                </div>

            </div>
        </div>
        <div class="mb90 clearfix"></div>
        <div class="container">
            <div class="row mb90">
                <div class="col-sm-3 adress message">
                    <p><img src="https://img.icons8.com/material-rounded/15/000000/user.png"> Ozdamirova Bella.</p>
                    <p><img src="https://img.icons8.com/metro/15/000000/email.png"> contact@devs-project.fr</p>
                    <p><img src="https://img.icons8.com/metro/15/000000/phone.png"> 07.68.89.64.32.</p>
                    <p><img src="https://img.icons8.com/material/15/000000/worldwide-location.png"> Saint-Louis, France.
                    </p>
                </div>
                <div class="col-sm-8 col-sm-offset-1">
                    <?php

                    if (isset( $_POST['message'] )) {

                        $message = '<h1>Message envoyé depuis Devs-project</h1>
    <p><b>Nom : </b>' . $_POST['name'] . '<br>
    <b>Email : </b>' . $_POST['email'] . '<br>
    <b>Message : </b>' . $_POST['message'] . '</p>';

                        $retour = mail( 'contact@devs-project.fr', 'Message envoyé via le cv en ligne', $message );
                        if ($retour) {
                            echo '<p style="color: mediumseagreen;">Votre message a bien été envoyé.</p>';
                        } else {
                            echo '<p style="color: #ac2925">Une erreur est survenue, votre message n\'a pas pu être délivré.</p>';
                        }
                    }
                    ?>
                    <div class="row">
                        <div id="message" class="col-sm-12"></div>
                        <div class="col-sm-12">
                            <form method="POST" id="contactform"
                                  class=" message main-contact-form">
                                <div class="form-group">
                                    <input type="text" class="form-control col-md-4 mb20" for="name" name="name"
                                           placeholder="Votre Nom *" id="name" required
                                           data-validation-required-message="Veuillez entrer votre nom."/>
                                    <input type="email" class="form-control col-md-4 mb20" for="email" name="email"
                                           placeholder="Votre Email *" id="email" required
                                           data-validation-required-message="Veuillez entrer votre email."/>
                                </div>
                                <textarea name="message" for="message" class="form-control mb20" id="message"
                                          placeholder="Votre Message *" required
                                          data-validation-required-message="Veuillez entrer votre message."></textarea>
                                <input class="btn btn-primary mt30 pull-right" type="submit" name="submit"
                                       value="Envoyer"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mapwrapper"></div>
        </div>
    </div>
</section>

<?php
include('footer.php');
?>


</div>

<?php
include "scripts.php";
?>

</body>
</html>