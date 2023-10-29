<section class="check_all_features">
    <div class="block">
        <?php if ( $attributes['title'] ) : ?>
            <h2><?php echo $attributes['title']; ?></h2>
        <?php endif; ?>

        <?php if ( $attributes['description'] ) : ?>
            <?php echo $attributes['description']; ?>
        <?php endif; ?>

        <?php if ( $attributes['button-link'] ) : ?>
            <div>
                <a href="<?php echo $attributes['button-link']; ?>" class="btn white"><?php echo $attributes['button-title']; ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>