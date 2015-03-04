<?php
/*
    Template Name: Карта сайта
*/


get_header( ); ?>


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
