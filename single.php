<?php
get_header();
?>
    <div id="event-main">
        <div class="content">
            <div class="block-content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <h1><?php the_field('text_block');  ?></h1>
            <p><?php the_field('text');  ?></p>
            <div class="img-box">
                <img src="<?php echo get_field('image_block')['url']; ?>" alt="image description">
            </div>
            <h2><?php the_field('title');  ?></h2>
            <?php if ( have_rows('block_repeater') ) : ?>
                <ul class="list-info">
                    <?php while( have_rows('block_repeater') ) : the_row(); ?>
                        <li>
                            <div class="img-box">
                                <?php $img_url = get_sub_field('image_box')['sizes']['thumbnail']; ?>
                                <img src="<?php echo $img_url; ?>" alt="image description">
                            </div>
                            <span><?php the_sub_field('description');  ?></span>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
<?php
get_footer();
