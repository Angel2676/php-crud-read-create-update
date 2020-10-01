<?php
include __DIR__ .'/partials/templates/header.php';
include __DIR__.'/partials/home/server.php';

 ?>



    <div class="container">
        <?php if (!empty($_GET['roomId'])) {
            $stanza_cancellata = $_GET['roomId'] ?>
            <div class="alert alert-warning">
                <?php echo 'hai cancellato la stanza'.$stanza_cancellata ?>
            </div>
        <?php } ?>

        <?php if (!empty($_GET['roomN'])) {
            $stanza_non_cancellata = $_GET['roomN'] ?>
            <div class="alert alert-warning">
                <?php echo 'Non hai cancellato la stanza'.$stanza_non_cancellata ?>
            </div>
        <?php } ?>


        <table class="table">
            <thead>
                <th>ID</th>
                <th>Numero Stanza</th>
                <th>Floor</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php foreach ($results as $room) { ?>
                <tr>
                    <td> <?php echo $room ['id'] ?> </td>
                    <td> <?php echo $room ['room_number'] ?> </td>
                    <td> <?php echo $room ['floor'] ?> </td>
                    <td> <a href="show.php?id=<?php echo $room ['id'];?>">VIEW</a> </td>
                    <td> <a href="update.php?id=<?php echo $room['id'];?>">UPDATE</a> </td>
                    <td>
                        <form class="" action="partials/delete/server.php" method="post">
                            <input type="submit" name="" value="DELETE" class="btn-btn-danger">
                            <input type="hidden" name="id" value=" <?php echo $room['id']; ?> ">
                        </form>
                    </td>

                </tr>


                <?php } ?>
            </tbody>
        </table>
    </div>
<?php include __DIR__ .'/partials/templates/footer.php'; ?>
