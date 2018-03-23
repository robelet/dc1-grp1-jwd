<?php
require_once 'functions.php';
require_once 'model/database.php';

$id = $_GET["id"];

$photo = getPhoto($id);

$liste_commentaires = getAllCommentaireByPhoto($id);


getHeader($photo["titre"], "Description de la photo");
?>

<header>
    <div class="row col_center">
        <?php getMenu(); ?>
    </div>
</header>

<h1><?php echo $photo["titre"]; ?></h1>
<img src="images/<?php echo $photo["image"] ?>">

<h3> <?php echo $photo["description"] ;?></h3>

    <h3> <?php echo $photo["date_creation_format"] ;?></h3>

    <form method="POST" action="insert-commentaire.php">
        <textarea name="commentaire"></textarea>
        <input type="hidden" name="photo_id" value="<?php echo $id; ?>">
        <input type="submit">
    </form>

        <section>
             <?php foreach ($liste_commentaires as $commentaires) : ?>
                <article>
                     <time>
                           <?php echo $commentaires["date_creation_format"];?>
                     </time>
                      <p>  <?php echo $commentaires["content"];?> </p>
                </article>
             <?php endforeach; ?>
        </section>



<?php getFooter(); ?>