<?php
get_header();
?>
    <div id="event-main">
        <div class="content">
            <h1>Title of the page</h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
            <div class="img-box">
                <img src="images/speaker-02.png" width="160" height="160" alt="speaker">
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
    </div>
<?php
get_footer();
