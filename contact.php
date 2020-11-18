
<?php $loginprotection = 'no';
require('status.php')?>
<!DOCTYPE html>
<html lang = "fr" dir = "ltr" class = "no-js">
<title>Tutos du Web | Contact</title>

<?php 
$page = '../contact.php';
require('phpinclude/navbar.php');


?>

<section class="contact-section section_padding">
    <div class="container">



      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Contact
          <p>Vous pouvez ici nous contacter pour une sugestion , une idée.....</p></h2>
      
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="" method="post" id="contactForm" >
            <div class="row">
       
              <div class="col-sm-6">
                <div class="form-group">
                <div class="input-group mb-3">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom'" placeholder="Nom" required>
                  <div class="input-group-append">
                                        <button class="button" type="button"><i class="ti-user"></i></button>
                                     </div>
                </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                <div class="input-group mb-3">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adresse mail'" placeholder="Adresse mail" required>
                  <div class="input-group-append">
                                        <button class="button" type="button"><i class="ti-email"></i></button>
                                     </div>
                </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                <div class="input-group mb-3">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sujet'" placeholder=" Sujet" required>
                  <div class="input-group-append">
                                        <button class="button" type="button"><i class="ti-comment"></i></button>
                                     </div>
                </div>
                
                </div>
                
              </div>
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre message...'" placeholder="Votre message..." required></textarea>
                    
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1">Envoyer</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-help"></i></span>
            <div class="media-body">
              <h3>Forum</h3>
              <p>Posez une question a la communauté </p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-comment"></i></span>
            <div class="media-body">
              <h3><a href = "">Serveur Discord<a></h3>
              <p>Venez discuter sur discord</p>
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
<?php require('phpinclude/footer.php')?>
