<?php get_header(); ?>
            <div id="main">
                <div id="content">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div>
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
                            <p><?php the_content(); ?></p>
                        </div>            
                    <?php endwhile?>
                         
                    <?php else: ?>
                    <div id="destaques">
                        <div><img src="<?php bloginfo('template_url'); ?>/img/materia-1.png" /></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/img/materia-2.png" /></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/img/publicidade.png" /></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/img/materia-3.png" /></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/img/materia-4.png" /></div>
                    </div>

                    <div id="materias">
                        <div><img src="<?php bloginfo('template_url'); ?>/img/materia-5.png" /></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/img/materia-6.png" /></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/img/materia-7.png" /></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/img/materia-8.png" /></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div><!-- #main -->
<?php get_footer(); ?>