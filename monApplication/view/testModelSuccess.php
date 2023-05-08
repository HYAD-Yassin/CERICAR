<h3>USER</h3>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Identifiant</th>
      <th scope="col">Mot de Pass</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> <?php echo $context->user->id ;?> </th>
      <td>  <?php echo $context->user->identifiant ;?>   </td>
      <td>  <?php echo $context->user->pass ;?>    </td>
      <td>  <?php echo $context->user->nom ;?>  </td>
      <td>  <?php echo $context->user->prenom ;?>    </td>
      
    </tr>
    
  </tbody>
</table>





<h3>Trajet</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Départ</th>
      <th scope="col">Ariivée</th>
      <th scope="col">Distance</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> <?php echo $context->trajet->id ;?> </th>
      <td>  <?php echo $context->trajet->depart ;?>   </td>
      <td>  <?php echo $context->trajet->arrivee ;?>    </td>
      <td>  <?php echo $context->trajet->distance ;?>  </td>
    </tr>
    
  </tbody>
</table>

<h3>VOYAGE</h3>
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
    </tr>
  </thead>
  <tbody> <?php foreach( $context->voyage as $var ){ ?>
    <tr>  
      <th scope="row"> <?php echo $var->id ;?> </th>
      <td>  <?php echo $var->conducteur->nom ;?>   </td>
      <td>  <?php echo $var->trajet->id ;?>    </td>
      <td>  <?php echo $var->tarif;?>  </td>
      <td>  <?php echo $var->nbPlace ;?>  </td>
      <td>  <?php echo $var->heureDepart ;?>  </td>
      <td>  <?php echo $var->contraintes ;?>  </td>
    </tr>
      <?php } ?>
    
  </tbody>
</table>

<h3>RESERVATION</h3>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Voyage</th>
      <th scope="col">Voyageur</th>
   
    </tr>
  </thead>
  <tbody>
    <?php foreach( $context->reservation as $var ){ ?>
    <tr>

      <th scope="row"> <?php echo $var->id ;?> </th>
      <td>  <?php echo $var->voyage->id ;?>   </td>
      <td>  <?php echo $var->voyageur->id ;?>    </td>
    
    </tr>
     <?php } ?>
    
  </tbody>
</table>