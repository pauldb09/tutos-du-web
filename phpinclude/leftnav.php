<div class="col-lg-4">
            <div class="blog_right_sidebar">
              <aside class="single_sidebar_widget search_widget">
                <form method="GET" action = "../search/" >
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name = "q" placeholder="rechercher un tuto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'rechercher un tuto'" >
                      <div class="input-group-append">
                                        <button class="button" type="button"><i class="ti-search"></i></button>
                                     </div>
                    </div>
                  </div>
                  <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">
                 Recherche
                  </button>
                </form>
              </aside>
              <aside class="single_sidebar_widget post_category_widget">
                <h4 class="widget_title">Categories</h4>
                <ul class="list cat-list">
                  <li>
                    <a href="../tuto/?type=tout&filtre=1" class="d-flex">
                      <p>Web</p>
                      <p>(37)</p>
                    </a>
                  </li>
                  <li>
                    <a href="../tuto/?type=tout&filtre=2" class="d-flex">
                      <p>Discord</p>
                      <p>(10)</p>
                    </a>
                  </li>
                  <li>
                    <a href="../tuto/?type=tout&filtre=3" class="d-flex">
                      <p>C++</p>
                      <p>(03)</p>
                    </a>
                  </li>
                  <li>
                    <a href="../tuto/?type=tout&filtre=4" class="d-flex">
                      <p>Windows</p>
                      <p>(11)</p>
                    </a>
                  </li>
                 
                </ul>
              </aside>
              <aside class="single_sidebar_widget popular_post_widget">
                <h3 class="widget_title">Articles récents</h3>
                <?php
                
$requeteSQL = "SELECT * FROM `tuto` WHERE `statut` = 'valide'  ORDER BY `date` DESC LIMIT 5";
$res = mysqli_query($conn,$requeteSQL);
if($res){
        while($lign = mysqli_fetch_row($res)){;
         
         echo ' 
                <div class="media post_item">
                  <img src="'.$lign['3'].'" class = "klein" alt="post">
                  <div class="media-body">
                    <a class="d-inline-block" href="../tuto/?type=singletuto&id='.$lign['0'].'">
                      <h3>'.$lign['1'].'</h3>
                    </a>
                    <p>'.$lign['6'].'</p>
                  </div>
                </div>
                ';
        }
      }
               ?>
               <style>
                  .klein{
                     height:30px;
                  }
                  </style>
               </aside>
              <aside class="single_sidebar_widget tag_cloud_widget">
                <h4 class="widget_title">Tags</h4>
                <ul class="list">
                  <li>
                    <a href="../tuto/?type=tout&filtre=1&sf=1">html</a>
                  </li>
                  <li>
                    <a href="../tuto/?type=tout&filtre=1&sf=2">php</a>
                  </li>
                  <li>
                    <a href="../tuto/?type=tout&filtre=1&sf=3">css</a>
                  </li>
                  <li>
                    <a href="../tuto/?type=tout&filtre=1&sf=4">sql</a>
                  </li>
                  <li>
                    <a href="../tuto/?type=tout&filtre=4&sf=1">exel</a>
                  </li>
                  <li>
                    <a href="../tuto/?type=tout&filtre=4&sf=1">cmd</a>
                  </li>
                 
                </ul>
              </aside>
              <div id = "newsletter">
              </div>
              <aside class="single_sidebar_widget newsletter_widget" >
                <h4 class="widget_title">Newsletter
                <p>Ne ne vous  enverrons que les informations essentielles du site ;-)</p>
                </h4>
            
                <form action="#">
                  <div class="form-group">
                  <div class="input-group mb-3">
                    <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adresse mail'" placeholder="Adresse mail" required="">
                    <div class="input-group-append">
                                        <button class="button" type="button"><i class="ti-email"></i></button>
                                     </div>
                </div>
                  </div>
                  
                  <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">
                  S'inscrire
                  </button>
                </form>
              </aside>

            </div>
          </div>
        </div>
      </div>
    </section>