<?php get_header( ); ?>


                <div class="row row_transform">
                    <ol class="breadcrumb ol_class col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <li class=" ol_class active">
                            <h4><a href=""><img id="subskribe" src="<?php echo bloginfo('template_url') ?>/images/rss/1419019438_rss.png" alt=""></a>Аудиокниги раздел новинки</h4>
                        </li>

                    </ol>
                </div>
                <div class="row row_transform">
                    <section id="section">
                        <!-- контент-->
                        <div class="content_glav col-sm-9 col-xs-12">

                            <?php


                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'post_type' => 'audio-books',
                                'posts_per_page' => 24,
                                'paged' => $paged
                            );

                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();

                                    ?>

                                    <div class="obv_kniga col-xs-2">
                                        <div>
                                            <a href="<?php the_permalink($post->ID) ?> "> <?php the_post_thumbnail($post->ID, 'class=kniga_img') ?> </a>
                                        </div>
                                        <a class="style_a_knigi" href="<?php the_permalink($post->ID) ?> ">" <?php the_title( ); ?> "</a>

                                        <div class="row">
                                            <div class="obv_knigi_1 " >
                                                <ul>
                                                    <li class="list_style_1 list_text_transform"><a href="<?php the_permalink($post->ID) ?>"><?php echo get_post_meta($post->ID, 'meta1_book-author', true) ?></a></li>
                                                    <li class="list_style_2 list_text_transform"><a href="<?php the_permalink($post->ID) ?>"><?php echo get_post_meta($post->ID, 'meta1_book-year', true) ?></a></li>
                                                    <li class="list_style_3 list_text_transform"><a href="<?php the_permalink($post->ID) ?>"><?php echo get_post_meta($post->ID, 'meta1_book-voice', true) ?></a></li>
                                                </ul>
                                            </div>
                                            <div class="obv_knigi_2 ">
                                                <ul>
                                                    <li class="list_style_1_1 list_text_transform"><a href="<?php the_permalink($post->ID) ?>"><?php echo get_post_meta($post->ID, 'meta1_book-time', true) ?></a></li>
                                                </ul>
                                            </div>
                                            <div class="bottom_peodrobno ">
                                                <a href="<?php the_permalink($post->ID) ?>">
                                                    <span class="h6_style ">Подробнее</span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>


                                    <?php


                                } // end while


                               // global $query;


                                 ?>


                                <div class="navigation_footer_kontent col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php
                                $big = 999999999; // need an unlikely integer
                                $args = array(
                                    'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                    'format'             => '?page=%#%',
                                    'total'              => $query->max_num_pages,
                                    'current'            => max( 1, get_query_var('paged') ),
                                    'show_all'           => True,
                                    'end_size'           => 1,
                                    'mid_size'           => 2,
                                    'prev_next'          => True,
                                    'prev_text'          => __('«'),
                                    'next_text'          => __('»'),
                                    'type'               => 'list',
                                    'add_args'           => False,
                                    'add_fragment'       => '',
                                    'before_page_number' => '',
                                    'after_page_number'  => ''
                                );
                                 echo paginate_links($args);
                                 ?>
                            </div>



                                 <?php

                            } // end if

                            ?>

                        </div>
                    </section>
                    <aside>
                        <!-- правый сайд бар-->
                        <?php get_sidebar(); ?>
                    </aside>
                </div>
            </div>
        </div>
        <!-- конец контэйнера-->

<?php get_footer( ); ?>
