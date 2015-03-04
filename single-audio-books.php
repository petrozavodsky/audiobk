<?php get_header( ); ?>

<div class="row row_transform">
    <ol class="breadcrumb ol_class col-xs-12">
        <li class=" ol_class active">
            <h4><a href=""><img id="subskribe" src="<?php echo bloginfo('template_url') ?>/images/rss/1419019438_rss.png" alt=""></a>Аудиокниги раздел новинки</h4>
        </li>

    </ol>
</div>
<div class="row row_transform clearfix">
    <section id="section" class="rty">
        <!-- контент-->


        <div class="content_glav2 col-lg-9 col-md-9 col-sm-9 col-xs-9">

            <div class="kniga_1 col-lg-11 col-md-11 col-sm-11 col-xs-11">
                <!-- общий блок описание книги -->
                <div class="kypit_kng_top col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2>Слушать Аудиокнигу онлайн</h2>
                </div>

                <div class="img_kniga col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <img src="../../../../images/img_knig/4461.jpg" alt="">
                </div>
                <div class="text_opisabnie col-lg-8 col-md-11  col-xs-10">

                    <p>Книга Богатый папа бедный папа</p>
                    <span>Каждый веб-разработчик знает, что такое текст-«рыба». Текст этот, несмотря на название, не имеет никакого отношения к обитателям водоемов. Используется он веб-дизайнерами для вставки на интернет-страницы и демонстрации внешнего вида контента, просмотра шрифтов, абзацев, отступов и т.д. Так как цель применения такого текста исключительно демонстрационная, то и смысловую нагрузку ему нести совсем необязательно. Более того, нечитабельность текста сыграет на руку при оценке качества восприятия макета.</span>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 left_pos">
                    <div class="site_knopki col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <script type="text/javascript">
                            (function () {
                                if (window.pluso)
                                    if (typeof window.pluso.start == "function") return;
                                if (window.ifpluso == undefined) {
                                    window.ifpluso = 1;
                                    var d = document,
                                        s = d.createElement('script'),
                                        g = 'getElementsByTagName';
                                    s.type = 'text/javascript';
                                    s.charset = 'UTF-8';
                                    s.async = true;
                                    s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';
                                    var h = d[g]('body')[0];
                                    h.appendChild(s);
                                }
                            })();
                        </script>
                        <div class="pluso" data-background="none;" data-options="medium,square,line,horizontal,counter,sepcounter=1,theme=14" data-services="vkontakte,facebook,twitter,moimir,google,yazakladki,email"></div>
                    </div>
                    <!-- здесь кнопки-->

                </div>

                <div class="kypit_kng_top col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2>Купить книгу онлайн богатый папа бедный папа</h2>
                </div>
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 opsh_kep_kn">
                    <div class="img_kniga col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <a href="#"><img src="images/1740844.jpg" alt="">
                        </a>
                    </div>
                    <div class="text_opisabnie col-lg-8 col-md-6 col-sm-6 col-xs-12">

                        <span><i>Автор:</i> Кийосаки Роберт <br>
						<i>Переводчик:</i> Белошеев О. Г. <br>
               		<i> Издательство:</i> Попурри, 2014 г. <br>
               		 <i>Серия:</i> Богатый папа </span>

                        <h3>Цена 382 р</h3>
                        <br>

                    </div>
                    <div class="bootom_pok col-lg-11 col-md-9 col-sm-9 col-xs-9">
                        <a class="pokypka" href="#">Узнать о бесплатной доставке</a>
                    </div>

                    <div class="kypit_kng_top col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2>Слушать книгу онлайн богатый папа бедный папа</h2>
                    </div>
                    <div class="flash_play col-lg-11">
                        <!--блок флеш прлеера -->
                        <object id="audioplayer141" type="application/x-shockwave-flash" data="http://audiobk.ru/flash_uppod_player/uppod.swf" width="100%" height="455">
                            <param name="bgcolor" value="#ffffff" />
                            <param name="allowScriptAccess" value="always" />
                            <param name="movie" value="http://audiobk.ru/flash_uppod_player/uppod.swf" />
                            <param name="flashvars" value="st=http://audiobk.ru/style_audio_uppod_player/audio210-504.txt&amp;pl=http://audiobk.ru/page/playlist/playlist_audio210-141.txt" />
                        </object>
                    </div>

                    <div class="vk_vedget col-lg-11">
                        <!--виджет коментариев -->

                        <!-- Put this script tag to the <head> of your page -->
                        <script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>

                        <script type="text/javascript">
                            VK.init({
                                apiId: 4798199,
                                onlyWidgets: true
                            });
                        </script>

                        <!-- Put this div tag to the place, where the Comments block will be -->
                        <div id="vk_comments"></div>
                        <script type="text/javascript">
                            VK.Widgets.Comments("vk_comments", {
                                limit: 10,
                                width: "",
                                attach: "*"
                            });
                        </script>

                    </div>
                </div>
            </div>





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
