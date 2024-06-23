<?php
global $post;

$testo_notizie = dsi_get_option("testo_notizie", "notizie");
$testo_eventi = dsi_get_option("testo_eventi", "notizie");

?>
    <section class="section bg-bluelectric py-5 position-relative d-flex align-items-center overflow-hidden" style="min-height: 240px;" >
        <div class="container">
            <div class="row variable-gutters">
                <div class="col-md-5">
                    <div class="hero-title text-left">
                        <?php the_archive_title( '<h1 class="p-0 mb-2">', '</h1>' ); ?>
                        <?php if (!is_post_type_archive("evento")) {
                            remove_filter('get_the_post_type_description', 'wpautop');
                            the_archive_description("<h2 class=\"h4 font-weight-normal\">","</h2>");
                            add_filter( 'get_the_post_type_description', 'wpautop' );
                        } else { ?>
                            <h2 class="h4 font-weight-normal"><?php echo $testo_eventi ?></h2>
                        <?php }
                        ?>
                    </div><!-- /hero-title -->
                </div><!-- /col-md-5 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /section -->