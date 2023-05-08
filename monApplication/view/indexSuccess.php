 <!-- ======= Hero Section ======= -->
 <section class="hero">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <a class="hero-brand" href="index.html" title="Home"><img alt="Bell Logo" src="assets/img/logo.png"></a>
        </div>
      </div>

      <div class="col-md-12">
        <h1>
        Choisissez le trajet qui vous convient !
        </h1>

        <p class="tagline">
         Vers plus de 300 villes, nos bus vous emmènent à petits prix.
        </p>
        <p id="identif" class="tagline">
        <?php echo $context->getSessionAttribute('user_login')?>
        </p>
    
        <a class="btn btn-full scrollto" href="#contact">Recherchez Un Voyage</a>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.html"><img src="assets/img/logo-nav.png" alt=""></a>
      
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#portfolio">Découvrez Avec Nous</a></li>

        
         


          <?php 
          if(!isset($_SESSION['user_id']))
          {?>

        <li><a href="#" data-toggle="modal" data-target="#logoutModal2">Se Connecter</a></li>

        <li><a href="#" data-toggle="modal" data-target="#logoutModal">Inscription</a></li>
     
          <?php } else{ ?>

            <li><a href="logout.php" >Se Déconnecter </a></li>

            <li><a href="#reservations" >Mes Réservations</a></li>
          
          <?php }
          ?>
         
        
          
        </ul>
      </nav>
      <!-- #nav-menu-container -->

      <nav class="nav social-nav pull-right d-none d-lg-inline">
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
      </nav>
    </div>
  </header><!-- End Header -->

  <main id="main">


















  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="section-title2" >Inscription :</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                <div class="container">

                <div class="col-lg-12 col-md-12">
            <div class="form">
              <form action="monApplicationAjax.php?action=ajouterUtilisateur" method="post" role="form" class="php-email-form">
                
              <div class="form-group">
                  <input type="text" name="nom" class="form-control"  placeholder="Nom :" data-rule="minlen:3" data-msg="Le nom est incorrect" />
                  <div class="validate"></div>
                </div>


              <div class="form-group">
                  <input type="text" name="prenom" class="form-control"  placeholder="Prénom :" data-rule="minlen:3" data-msg="Le prénom est incorrect" />
                  <div class="validate"></div>
                </div>

               



                <div class="form-group">
                <label for="start">Date de Naissance:</label>
                <input type="date" name="date" class="form-control" id="start" name="trip-start" 
                  value="2010-01-01"
                  min="1900-01-01" max="2018-12-31">


                  <div class="validate"></div>
                </div>

                <div class="form-group">
                  <input type="text" name="pseudo" class="form-control"  placeholder="Pseudo :" data-rule="minlen:3" data-msg="Le pdeuso est incorrect " />
                  <div class="validate"></div>
                </div>


                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password :" data-rule="minlen:3" data-msg="Le mode de passe est incorrect" />
                  <div class="validate"></div>
                </div>
             
                
               
      
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="reqAjax"></div>
                  
                </div>
                <div class="text-center"><button type="submit">S'inscrire</button></div>
                


              </form>
            </div>
          </div>
          </div>



                </div>

        
            </div>
        </div>
    </div>














<div class="modal fade" id="logoutModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="section-title2" >Connectez-Vous :</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                <div class="container">

                <div class="col-lg-12 col-md-12">
            <div class="form">
              <form action="monApplicationAjax.php?action=seconnecter" method="post" role="form" class="php-email-form2">
                
              

                <div class="form-group">
                  <input type="text" name="pseudo" class="form-control" id="arrivée" placeholder="Pseudo :" data-rule="minlen:3" data-msg="Le pdeuso est incorrect " />
                  <div class="validate"></div>
                </div>


                <div class="form-group">
                  <input type="password" name="password" class="form-control" id="arrivée" placeholder="Password :" data-rule="minlen:3" data-msg="Le mode de passe est incorrect" />
                  <div class="validate"></div>
                </div>
             
                
              
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="reqAjax"></div>
                  
                </div>
                <div class="text-center"><button class="loginsubmit" type="submit">Se Connecter</button></div>
         


              </form>
            </div>
          </div>
          </div>



                </div>

        
            </div>
        </div>
    </div>




 






















    <!-- ======= About Section ======= -->
    <section class="about" id="about">

      <div class="container text-center">
        <h2>
            A Propos De CERI CAR !
        </h2>

        <p>
          
        </p>

        <div class="row stats-row">
          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">232</span> Voyages Par Jour
            </div>
          </div>

          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">79</span> Trajets Par Jour
            </div>
          </div>

          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">1,463</span> Réservations Par Jour
            </div>
          </div>

          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">986</span> Voyageurs Par Jour
            </div>
          </div>
        </div>
      </div>

    </section><!-- End About Section -->



    <!-- ======= Welcome Section ======= -->
    <section class="welcome text-center">
      <h2>Bienvenue à CERI CAR !!</h2>
      <p>
      </p>
      <img alt="Bell - A perfect theme" class="gadgets-img hidden-md-down" src="assets/img/gadgets.png">
    </section><!-- End Welcome Section -->


     <!-- ======= Recherche Voyage Section ======= -->
     <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="section-title">Recherchez Un Voyage</h2>
          </div>
        </div>

        


          <div class="col-lg-12 col-md-12">
            
              <form action="monApplicationAjax.php?action=rechercheVoyage" method="POST"  class="php-email-form">
                
            
              <div class="form-group">
                  <input type="text" name="départ" class="form-control" id="départ" placeholder="Entrez Votre Ville De Départ :" data-rule="minlen:3" data-msg="Le nom de la ville est incorrect" />
                  <div class="validate"></div>
                </div>

                <div class="form-group">
                  <input type="text" name="arrivée" class="form-control" id="arrivée" placeholder="Entrez Votre Ville D'Arrivée :" data-rule="minlen:3" data-msg="Le nom de la ville est incorrect" />
                  <div class="validate"></div>
                </div>

                <div class="form-group">
                <select name="nb_places" class="form-control" id="nb_places">

                      <option value="1">1 Place</option>
                      <option value="2">2 Places</option>
                      <option value="3">3 Places</option>
                      <option value="4">4 Places</option>
                      <option value="5">5 Places</option>
                      <option value="6">6 Places</option>
                      <option value="7">7 Places</option>
                      <option value="8">8 Places</option>
                      <option value="9">9 Places</option>
                      <option value="10">10 Places</option>
                      
                     
               </select>
                </div>
                
               
        
               
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="reqAjax"></div>
                  
                </div>
                <div class="text-center"><button type="submit">Recherchez</button></div>
                


              </form>
            </div>
          </div>

        </div>
     
    </section><!-- End Section -->







    <!-- ======= Features Section ======= -->
    <section class="features" id="features">

      <div class="container">
        <h2 class="text-center">
        Allez où vous voulez. D'où vous voulez.
        </h2>

        <div class="row">
          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              

              <div>
                <h3>
                  Pratique
                </h3>

                <p>
                Trouvez rapidement un covoiturage ou un bus à proximité parmi les millions de trajets proposés.
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
             

              <div>
                <h3>
                Facile
                </h3>

                <p>
                Trouvez le trajet parfait ! Il vous suffit d’entrer votre adresse exacte, de choisir le voyage qui vous convient le mieux, et de réserver.
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
            

              <div>
                <h3>
                Direct
                </h3>

                <p>
                Que vous prévoyiez à l’avance ou réserviez en dernière minute, vous trouverez toujours un tarif avantageux.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="feature-col col-lg-6 col-xs-12">
            <div class="card card-block text-center">
              

              <div>
                <h3>
                Avoir le choix
                </h3>

                <p>
                L'avantage des routes ? Elles vont partout ! Littéralement. Profitez de milliers de destinations.
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-6 col-xs-12">
            <div class="card card-block text-center">
             

              <div>
                <h3>
                  Communauté
                </h3>

                <p>
                Nous connaissons chacun de nos membres et de nos partenaires de bus. Comment ? Nous vérifions profils, avis, et pièces d'identité. Vous savez ainsi avec qui vous voyagez.
                </p>
              </div>
            </div>
          </div>

          
        </div>
      </div>

    </section><!-- End Features Section -->




   

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio" id="portfolio">

      <div class="container text-center">
        <h2>
        
        Découvrez des nouuveaux lieu avec nous :
        </h2>

      </div>

      <div class="portfolio-grid">
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="assets/img/porf-1.jpg" class="venobox" data-gall="portfolioGallery"><img alt="" src="assets/img/porf-1.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                      Voir La Photo...
                    </h3>

                   
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="assets/img/porf-2.jpg" class="venobox" data-gall="portfolioGallery"><img alt="" src="assets/img/porf-2.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                    Voir La Photo...
                    </h3>

                    
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="assets/img/porf-3.jpg" class="venobox" data-gall="portfolioGallery"><img alt="" src="assets/img/porf-3.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                    Voir La Photo...
                    </h3>

                    
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="assets/img/porf-4.jpg" class="venobox" data-gall="portfolioGallery"><img alt="" src="assets/img/porf-4.jpg">
                <div class="portfolio-over">
                  <div>
                    <h3 class="card-title">
                    Voir La Photo...
                    </h3>

                    
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        


  
        </div>
      </div>
    </section><!-- End Portfolio Section -->
    


     


    <section id="proposer">
     
      <div class="container text-center">
    
      <div class="col-md-12">
       
        <h2 class="section-title">Proposez Un Voyage !</h2>

       
    
        <p class="tagline" style="color: black">
          Vous pouvez proposé un voyage si vous êtes un utilisateur conducteur !!!
        </p>
        
        <a class="btn btn-full scrollto" href="#" data-toggle="modal" data-target="#proposerform">Proposer Un Voyage</a>
      </div> </div>

    </section><!-- End Section -->



    <div class="modal fade" id="proposerform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="section-title2" >Proposer Un Voyage :</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                <div class="container">

                <div class="col-lg-12 col-md-12">
            <div class="form">
              <form action="monApplicationAjax.php?action=Proposer" method="post" role="form" class="php-email-form">
                
              

                <div class="form-group">
                  <input type="text" name="départ" class="form-control" id="départ" placeholder="Entrez le Départ de votre voyage :" data-rule="minlen:3" data-msg="Le départ de votre voyage est incorrect " />
                  <div class="validate"></div>
                </div>
                
                
                <div class="form-group">
                  <input type="text" name="arrivée" class="form-control" id="arrivée" placeholder="Entrez l'Arrivée de votre voyage :" data-rule="minlen:3" data-msg="L'arrivée de votre voyage est incorrect " />
                  <div class="validate"></div>
                </div>
      
                <div class="form-group">
                  <input type="text" name="tarif" class="form-control" id="tarif" placeholder="Entrez le Tarif de votre voyage :" data-rule="minlen:1" data-msg="le tarif de votre voyage est incorrect " />
                  <div class="validate"></div>
                </div>


                <div class="form-group">
                  <input type="text" name="nbplace" class="form-control" id="nbplace" placeholder="Entrez le nombre de places de votre voyage :" data-rule="minlen:1" data-msg="le nombre de places de votre voyage est incorrect " />
                  <div class="validate"></div>
                </div>

                <div class="form-group">
                  <input type="text" name="heuredpr" class="form-control" id="heuredpr" placeholder="Entrez l'heure de départ de votre voyage :" data-rule="minlen:1" data-msg="l'heure de départ de votre voyage est incorrect " />
                  <div class="validate"></div>
                </div>

                <div class="form-group">
                  <input type="text" name="contraintes" class="form-control" id="contraintes" placeholder="Entrez les contraintes de votre voyage :" data-rule="minlen:3" data-msg="les contraintes de votre voyage est incorrect " />
                  <div class="validate"></div>
                </div>

              
             
                
              
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="reqAjax"></div>
                  
                </div>
                <div class="text-center"><button class="submit" type="submit">Ajouter Le Voyage</button></div>
         


              </form>
            </div>
          </div>
          </div>



                </div>

        
            </div>
        </div>
    </div>



    <!-- ======= Recherche Voyage Section ======= -->

    <section id="contact">
      <div class="container" id="reservations">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="section-title">Mes Réservations</h2>
          </div>
        </div>

        
    
          <div class="col-lg-12 col-md-12">

         
            
              <form action="monApplicationAjax.php?action=reservations" method="POST"  class="php-email-form">
                
            
              <div class="form-group">
               <h3 class="text-center" >
                  Ici vous trouverez vos réservation sur notre plateform !!!
              </h3>
                </div>

             
          
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="reqAjax"></div>
                  
                </div>
                <div class="text-center"><button type="submit">Mes Réservations</button></div>
                


              </form>
            </div>
          </div>

        </div>
     
    </section> <!-- End Section -->











  

    <!-- ======= Team Section ======= -->
    <section class="team" id="team">
      <div class="container">
        <h2 class="text-center">
          Meet our team
        </h2>

        <div class="row" >
          <div class="col-sm-4 col-xs-5" style="  margin-left: auto;     margin-right: auto; ">
            <div class="card card-block">
              <a href="#"><img alt="" class="team-img" src="assets/img/team-1.jpg">
                <div class="card-title-wrap">
                  <span class="card-title">Yassin HYAD </br></span> <span class="card-text">PHP DEVELOPER</span>

                </div>

                <div class="team-over">
                  <h4 class="hidden-md-down">
                    Connect with me
                  </h4>

                  <nav class="social-nav">
                    <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                  </nav>

                  <p>
                    Etudiant en L3 informatique Option Systémes et Réseaux.
                  </p>
                </div>
              </a>
            </div>
          </div>

        

       

      
        </div>
      </div>
    </section><!-- End Team Section -->



   

  </main><!-- End #main -->




  <!-- ======= Footer ======= -->
  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              &copy; Copyright <strong>CERI CAR</strong>. All Rights Reserved
            </p>
            <div class="credits">
              
              Released by Yassin HYAD
            </div>
          </div>

          
         

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/tether/js/tether.min.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/lockfixed/jquery.lockfixed.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>



  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
