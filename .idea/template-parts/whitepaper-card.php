<?php
$whitepapers = get_the_terms( get_the_ID(), 'whitepapercat' );
$children = '';
?>

<div class="card">
    <div>
        <?php $wallpaper_whitepaper = get_field( 'wallpaper_whitepaper' ); ?>
        <?php if ( $wallpaper_whitepaper ) : ?>
            <div class="image">
                <img src="<?php echo esc_url( $wallpaper_whitepaper['url'] ); ?>" alt="<?php echo esc_attr( $wallpaper_whitepaper['alt'] ); ?>" />
            </div>
        <?php endif; ?>
    </div>
    <div>
        <a href="<?php the_permalink() ?>"><h4><?php the_field( 'title_whitepaper' ); ?></h4></a>
        <?php if( has_term('', 'whitepapercat') ){
            echo '<ul class="tags">';
            foreach ( $whitepapers as $whitepaper ) {
                $children = $whitepaper->name;
                echo '<li><span>';
                echo $children;
                echo '</span></li>';
            }
            echo '</ul>';
        } ?>
    </div>
</div>