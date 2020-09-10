<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($tous_les_conducteurs as $conducteur) {
        echo "<tr>";
        echo "<td>".$conducteur->getIdConducteur()."</td>";
        echo "<td>".$conducteur->getPrenom()."</td>";
        echo "<td>".$conducteur->getNom()."</td>";
        echo "<td><a href='?action=modifierConducteur&conducteurId=".$conducteur->getIdConducteur()."'><img src='./Ressources/img/edit.png' width='50'></a>
        </td>";
        ?>
        <td><img src='./Ressources/img/delete.png' width='20' data-toggle="modal" data-target="#vtc-<?php echo $conducteur->getIdConducteur(); ?>"></td>

        <!-- Modal -->
        <div class="modal fade" id="vtc-<?php echo $conducteur->getIdConducteur(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                supprimer: <?php echo $conducteur->getPrenom()." ".$conducteur->getNom(); ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                <a href="?action=supprimerConducteur&conducteurId='<?php echo $conducteur->getIdConducteur(); ?>'">
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
