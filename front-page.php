<?php
    get_header();
?>

    <div id="event-header">
        <div class="block-visual">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div id="event-main">
        <div class="content">
            <h2><?php the_field('text_field');  ?></h2>
            <div class="block-text">
                <p><?php the_field('description');  ?></p>
                <div class="block-img">
                    <img src="<?php echo get_field('image_field')['url']; ?>" alt="image description">
                </div>
            </div>
            <?php if ( have_rows('about_blocks') ) : ?>
                <ul class="list-info">
                    <?php while( have_rows('about_blocks') ) : the_row(); ?>
                        <li>
                            <div class="img-box">
                                <?php $img_url = get_sub_field('image_block')['sizes']['thumbnail']; ?>
                                <img src="<?php echo $img_url; ?>" alt="image description">
                            </div>
                            <span><?php the_sub_field('icon_description');  ?></span>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
        <!-- start section speakers -->
        <section class="section-speakers">
            <div class="block-speakers">
                <h2><?php the_field('speaker_description');  ?></h2>
                <?php if ( have_rows('speakers') ) : ?>
                    <div class="slick-slider slick-speakers">
                        <?php while( have_rows('speakers') ) : the_row(); ?>
                            <div class="box-speaker">
                                <div class="box-img">
                                    <?php $img_url = get_sub_field('image_block')['sizes']['thumbnail']; ?>
                                    <img src="<?php echo $img_url; ?>" alt="speaker" width="160" height="160">
                                </div>
                                <div class="box-txt">
                                    <h3><?php the_sub_field('name');  ?></h3>
                                    <span><?php the_sub_field('position');  ?></span>
                                    <p><?php the_sub_field('field_description');  ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </div>

<?php
get_footer();