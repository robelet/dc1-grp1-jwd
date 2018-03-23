<article class="col-4 miniature">
    <a href="photo.php?id=<?php echo $photo["id"]; ?>">
        <img src="images/<?php echo $photo["image"]; ?>" alt="mini" title="mini">
        <p class="likes"><?php echo $photo["nb_likes"]; ?> likes</p>
    </a>
    <div class="infos">
        <h3><?php echo $photo["titre"]; ?> #<?php echo $photo["categorie_id"]; ?></h3>

        <!-- Affichage des tags -->
        <?php if (count($photo["tags"]) > 0) : ?>
            <p>
                <?php foreach ($photo["tags"] as $tag) : ?>
                    # <?php echo $tag; ?>
                <?php endforeach; ?>
            </p>
        <?php endif; ?>

        <p><?php echo $photo["date_creation_format"]; ?></p>
    </div>
</article>