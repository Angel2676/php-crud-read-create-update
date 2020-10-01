<?php
include __DIR__ .'/partials/templates/header.php';

 ?>

 <div class="container">
     <form action="partials/create/server.php" method="post">
         <div class="form-group">
             <label for="roomNumber">Numero della Stanza</label>
             <input type="text" class="form-control" name="roomNumber" placeholder="Inserisci la stanza" value="" id="roomNumber">
         </div>
         <div class="form-group">
             <label for="floor">Floor</label>
             <input type="text" class="form-control" name="floor" value="" placeholder="Inserisci il piano" id="floor">
         </div>
         <div class="form-group">
             <label for="beds">Numero di letti</label>
             <input type="text" class="form-control" name="beds" value="" placeholder="Inserisci i letti" id="beds">
         </div>
         <div class="form-group">
             <input type="submit" class="form-control bg-warning" value="INSERT" id="Modifica">
        </div>
     </form>
 </div>

 <?php

include __DIR__ .'/partials/templates/footer.php';

  ?>
