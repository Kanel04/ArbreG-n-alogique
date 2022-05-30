<?php
session_start();
$objetPdo = new PDO("mysql:host=localhost;dbname=sgbd",'root','');






          if (isset($_POST['cherch'])){
             
              $rech=isset($_POST['recherche']) ? $_POST['recherche']:"";                 
           $resP = $objetPdo->prepare('SELECT * FROM individu WHERE nom LIKE :resulte');
           $resP->bindParam(':resulte', $rech);
           $resP->execute();
           $v=$resP->fetchAll();
           if ($v){
            ?>
            <script>
            alert("<?php<a href="details.php?numParticipant=<?= $participant['id_individu']?>" onClick="return confirm('cliquer ici')">
                                            <button class="btn btn-danger">Supprimer</button>
</a>?>")
            </script>
            <?php
           }else{
               echo"aucun resultat";
           }
          }


?>