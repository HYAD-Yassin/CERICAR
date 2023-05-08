

 <!-- ======= Voyages Section ======= -->
 <section >
      <div class="container">
        <div class="row">
         
           

          <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Conducteur</th>
                            <th scope="col">Trajet</th>
                            <th scope="col">Tarif</th>
                            <th scope="col">Nb Place</th>
                            <th scope="col">Heure Depart</th>
                            <th scope="col">Contraintes</th>
                            <th scope="col">Réservation</th>
                            </tr>
                        </thead>
                        <tbody> <?php foreach( $context->voyage as $var ){ ?>
                            <tr>  
                            <th scope="row"> <?php echo $var->id ;?> </th>
                            <td> M. <?php echo $var->conducteur->nom ;?>   </td>
                            <td>  <?php echo $var->trajet->id ;?>    </td>
                            <td>  <?php echo $var->tarif;?> €  </td>
                            <td>  <?php echo $var->nbPlace ;?> place </td>
                            <td>  <?php echo $var->heureDepart ;?> H </td>
                            <td>  <?php echo $var->contraintes ;?>  </td>
                            

                            <td>  

                            <div  id="reserver" >
                            <div  class="form">
                            <form action="monApplicationAjax.php?action=Reserver" method="post" role="form" class="php-email-form">
                            <input name="voyage_id" type="hidden" value=" <?php echo $var->id ;?>" > 
                           
                            
                            <button id="reserv" type="submit">Réservez</button> 

                           

                          </script>
                            
                            <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="reqAjax"></div>
                            
                            </div>

                            </form>
                            </div>
                            </div>
                         
                             </td>



                            </tr>
                            <?php } ?>
                            
                        </tbody>
            </table>  

          

          
        </div>
      </div>
    </section><!-- End Section -->




