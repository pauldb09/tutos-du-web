
<?php $loginprotection = 'no';
require('../status.php')?>
<!DOCTYPE html>
<html lang = "fr" dir = "ltr" class = "no-js">
<title>Tutos du Web | newsletter</title>

<?php 
$page = '../newsletter/';
require('../phpinclude/navbar.php');


?>

<section class="contact-section section_padding">
    <div class="container">



      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Newsletter
          <p>Si vous aimez le contenu de Tutos du web , vous pouvez vous inscrire a la newsletter mensuelle ou vous recevez , une fois par mois , les nouveautés du site (tutos , informations importantes etc...)
             Vous ne recevrez pas de span et votre adresse mail ne sortira pas du site ;-)
          </p></h2>
      
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="" method="post" id="contactForm" >
            <div class="row">
       
           
              <div class="col-sm-12">
                <div class="form-group">
                <div class="input-group mb-3">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adresse mail'" placeholder="Adresse mail" required>
                  <div class="input-group-append">
                                        <button class="button" type="button"><i class="ti-email"></i></button>
                                     </div>
                </div>
                </div>
              </div>
             
             
              
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1">Inscription</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-x">X</i></span>
            <div class="media-body">
              <h3>Pas de Spams</h3>
              <p>juste les informations utiles ;-) !</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-comment"></i></span>
            <div class="media-body">
              <h3><a href = "">1 mail par mois <a></h3>
              <p>pas un de plus !</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>support@tutosduweb..fr</h3>
              <p>envoyez nous vos questions !</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php require('../phpinclude/footer.php')?>
