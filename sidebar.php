<div class="aside_bar col-sm-3 col-xs-12">
                            <div class="list-group list-group-style">

                            <?php

                                $args = array(
                                    'fields' => 'all',
                                    'hide_empty' => '0',
                                );

                                $genres = get_terms('genre', $args);

                                foreach ($genres as $genre) {

                                    $output = '<a href="';
                                    $output .= get_term_link((int)$genre->term_id, 'genre');
                                    $output .= '" class="list-group-item">';
                                    $output .= $genre->name;
                                    $output .= '</a>';

                                    echo $output;
                                }

                             ?>

                            </div>
                            <div class="razdelitel">
                                <h4>Мы в социальных сетях</h4>
                                <script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>
                                <!-- VK Widget -->
                                <div id="vk_groups"></div>
                                <script type="text/javascript">
                                    VK.Widgets.Group("vk_groups", {mode: 0, width: "220", height: "400", color1: 'DEE9E8', color2: '2B587A', color3: '5B7FA6'}, 86963875);
                                </script>
                            </div>
                            <div class="razdelitel_podpiska col-xs-12">
                                <h4>Подпишись на новинки!</h4>
                                <!--  место под виджет -->
                            </div>
                        </div>
