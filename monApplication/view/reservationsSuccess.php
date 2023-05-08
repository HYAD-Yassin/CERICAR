

 <!-- ======= Voyages Section ======= -->
 <section >
      <div class="container">
        <div class="row">
         
           

          <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Conducteur</th>
                            <th scope="col">Départ</th>
                            <th scope="col">Arrivée</th>
                            <th scope="col">Tarif</th>
                            <th scope="col">Nb Place</th>
                            <th scope="col">Heure Depart</th>
                            <th scope="col">Contraintes</th>
                           
                            </tr>
                        </thead>
                        <tbody> <?php foreach( $context->allReservation as $var ){ ?>
                            <tr>  
                            <th scope="row"> <?php echo $var->id ;?> </th>
                            <td>  M. <?php echo $var->voyage->conducteur->nom ;?>  <?php echo $var->voyage->conducteur->prenom ;?>  </td>
                            <td>  <?php echo $var->voyage->trajet->depart ;?>   </td>
                            <td>  <?php echo $var->voyage->trajet->arrivee ;?>   </td>
                            <td>   <?php echo $var->voyage->tarif ;?> €  </td>
                            <td>    <?php echo $var->voyage->nbPlace ;?> place </td>
                            <td>   <?php echo $var->voyage->heureDepart ;?> H </td>
                            <td>  <?php echo $var->voyage->contraintes ;?>  </td>
                          
                            
                            </tr>
                            <?php } ?>
                            
                        </tbody>
            </table>  

          

          
        </div>
      </div>
    </section><!-- End Section -->




