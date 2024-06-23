<?php
/* Template Name: Persone
 *
 * didattica template file
 *
 * @package Design_Scuole_Italia
 */
global $post;
get_header();


function visualizza_utenti($ruolo_utente, $intestazione_sezione) {
    // carica tutti gli utenti e li ordina per cognome
	$args = array(
        'meta_key' => 'last_name', 
        'orderby' => 'meta_value',
        'order' => 'ASC', 
        //seleziona gli utenti in base al ruolo e privacy
	'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => '_dsi_persona_ruolo_scuola',
                'value' => $ruolo_utente,
                'compare' => '='
            ),
	    array(
		'key' => '_dsi_persona_privacy_hidden',
		'value'	=>	'false'
	    )
        )
    );

<<<<<<< HEAD
                    $classcolor = "bg-white";
                    if ($i % 2)
                        $classcolor = "bg-gray-light";

                    $responsabile = dsi_get_meta("responsabile", "_dsi_struttura_", $struttura->ID);
                    $persone = dsi_get_meta("persone", "_dsi_struttura_", $struttura->ID);
                    $altri_componenti = dsi_get_meta("altri_componenti", "_dsi_struttura_", $struttura->ID);

                    ?>
                    <section class="section <?php echo $classcolor; ?> py-5">
                        <div class="container">
                            <div class="title-section text-center mb-5">
                                <h2 class="h4"><a
                                            href="<?php echo get_permalink($struttura); ?>"><?php echo $struttura->post_title; ?></a>
                                </h2>
                            </div><!-- /title-large -->
                            <?php if (is_array($responsabile) && count($responsabile) > 0) { ?>
                                <div class="row variable-gutters mb-4">
                                    <div class="col-lg-3">
                                        <h3 class="text-lg-right mb-3">

                                            <?php 
                                            /*
                                            Modifica per Liceo Pitagora
                                                Correzione naming ruoli persone
                                            START
                                            */
                                            if($struttura->post_title == "Dirigenza"){
											    _e("Dirigente Scolastico", "design_scuole_italia");
											} else if ($struttura->post_title == "Segreteria"){ 
											    _e("DSGA", "design_scuole_italia");
										    } else {
											 _e("Responsabile", "design_scuole_italia");
											};
                                            
                                            /*
                                            END

                                            Modifica per Liceo Pitagora
                                            */

                                            ?>
                                        <?php // _e("Responsabile", "design_scuole_italia"); ?>

                                    </h3>
                                    </div><!-- /col-lg-3 -->
                                    <div class="col-lg-9">
                                        <div class="row variable-gutters">
                                            <?php
                                            foreach ($responsabile as $idutente) {
                                                $autore = get_user_by("ID", $idutente);
                                                ?>
                                                <div class="col-lg-4">
                                                    <div class="card card-bg card-avatar rounded mb-3" style="color: black; background-color: #EA7653">
                                                        <div class="card-body">
                                                            <?php get_template_part("template-parts/autore/card"); ?>
                                                        </div><!-- /card-body -->
                                                    </div><!-- /card card-bg card-avatar rounded -->
                                                </div><!-- /col-lg-4 -->
                                                <?php
                                            }
                                            ?>
                                        </div><!-- /row -->
                                    </div><!-- /col-lg-9 -->
                                </div><!-- /row -->
                            <?php } ?>

                            <?php if (is_array($persone) && count($persone) > 0) { ?>
                                <div class="row variable-gutters mb-4">
                                    <div class="col-lg-3">
                                        <h4 class="text-lg-right mb-3">

                                        <?php 
                                        /*
                                            Modifica per Liceo Pitagora
                                                Correzione naming ruoli persone
                                            START
                                        */

                                        if($struttura->post_title == "Dirigenza"){
											 _e("Collaboratori Vicari", "design_scuole_italia");
											 } else if ($struttura->post_title == "Segreteria"){
											 _e("Assistenti Amministrativi", "design_scuole_italia");
											 } else {
											 _e("Persone", "design_scuole_italia");
										};
                                        
                                        /*
                                            END

                                            Modifica per Liceo Pitagora
                                        */

                                        ?>
                                            
                                        <?php // _e("Persone", "design_scuole_italia"); ?>
                                    
                                        </h4>
                                    </div><!-- /col-lg-3 -->
                                    <div class="col-lg-9">
                                        <div class="row variable-gutters">
                                            <?php
                                            foreach ($persone as $idutente) {
                                                $autore = get_user_by("ID", $idutente);
                                                ?>
                                                <div class="col-lg-4">
                                                    <div class="card card-bg bg-white card-avatar rounded mb-3">
                                                        <div class="card-body">
                                                            <?php get_template_part("template-parts/autore/card"); ?>
                                                        </div><!-- /card-body -->
                                                    </div><!-- /card card-bg card-avatar rounded -->
                                                </div><!-- /col-lg-4 -->
                                                <?php
                                            }
                                            ?>
                                        </div><!-- /row -->
                                    </div><!-- /col-lg-9 -->
                                </div><!-- /row -->
                            <?php } ?>

                            <?php if ($altri_componenti != "") { ?>
                                <div class="row variable-gutters mb-4">
                                    <div class="col-lg-3">
                                        <h3 class="h4 text-lg-right mb-3"><?php _e("Componenti esterni", "design_scuole_italia"); ?></h3>
                                    </div><!-- /col-lg-3 -->
                                    <div class="col-lg-9">
                                        <div class="row variable-gutters">
                                            <span class="h5 text-lg-right mb-3 pt-1 pl-4">
                                                <?php echo $altri_componenti; ?>
                                            </span>
                                        </div><!-- /row -->
                                    </div><!-- /col-lg-9 -->
                                </div><!-- /row -->
                            <?php } ?>

                        </div><!-- /container -->
                    </section><!-- /section -->
                    <?php

                }
            }

        endwhile; // End of the loop.
=======
$users = get_users($args);
    $number_of_users = count($users);
    if ($number_of_users > 0) {
>>>>>>> merge
        ?>
        <section class="section mt-4">
            <div class="container">
                <div class="title-section mb-5">
                <h2 class="h4"><?php echo $intestazione_sezione; ?></h2>
                </div>
            <div class="row variable-gutters">
            <?php
                foreach ($users as $user) {
                    global $autore; 
                    $autore = get_user_by("ID", $user->ID); 
                    get_template_part("template-parts/autore/card-persona");
                }
            ?>
            </div>      
        </section>  
        <?php
    }
}
?>

<main id="main-container" class="main-container redbrown">
    <?php get_template_part("template-parts/common/breadcrumb"); ?>
    <?php get_template_part("template-parts/hero/persone"); ?>
    <?php visualizza_utenti('dirigente', 'Dirigente Scolastico'); ?>
    <?php visualizza_utenti('docente', 'Personale docente'); ?>
    <?php visualizza_utenti('personaleata', 'Personale non docente'); ?>
    	<?php 
	$contenuto_ulteriore = dsi_get_option("contenuto_ulteriore_sezione_persone", "persone");
	if($contenuto_ulteriore!= "") {
	?>
		<section class="section bg-light py-5">
			<div class="container">
				<div class="title-section">
					<h2 class="h4">Informazioni ulteriori</h2>
				</div>
				<?php echo $contenuto_ulteriore; ?>
			</div>
		</section>
	<?php
	} 
	?>
</main>

<?php
get_footer();
