<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Marque</th>
      <th scope="col">Modéle</th>
      <th scope="col">Couleur</th>
      <th scope="col">Immatriculation</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($liste_vehicules as $vehicule) {
        echo "<tr>";
        echo "<td>".$vehicule->getIdVehicule()."</td>";
        echo "<td>".$vehicule->getMarque()."</td>";
        echo "<td>".$vehicule->getModele()."</td>";
        echo "<td>".$vehicule->getCouleur()."</td>";
        echo "<td>".$vehicule->getImmatriculation()."</td>";
        echo "<td><a href='?action=modifierVehicule&vehiculeId=".$vehicule->getIdVehicule()."'><img src='./Ressources/img/edit.png' width='50'></a>
        </td>";
        ?>
        <td><img src='./Ressources/img/delete.png' width='20' data-toggle="modal" data-target="#vtc-<?php echo $vehicule->getIdVehicule(); ?>"></td>

        <!-- Modal -->
        <div class="modal fade" id="vtc-<?php echo $vehicule->getIdVehicule(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                supprimer: <?php echo $vehicule->getModele()." ".$vehicule->getMarque(); ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                <a href="?action=supprimerVehicule&vehiculeId='<?php echo $vehicule->getIdVehicule(); ?>'">
                  <button type="button" class="btn btn-danger">Oui</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <?php
        echo "</tr>";
      }
    ?>
  </tbody>
</table>

