<?php
get_header();
?>
<tr>
    <td class="Cell56_5" valign="top" colspan="1" rowspan="1" style="width:970px;">
        <table class="Table_MainCon" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td class="Cell59_1" valign="top" colspan="1" rowspan="1" style="width:970px;">

                        <div id="ctl16_ctl00_divTM" class="TMCD2_Vien">
                            <!-- FitcBatDauDocTin -->
                            <div class="TMCD2_DongTruongMuc">
                                <div><?php $category = get_the_category();

                                        $category_parent_id = $category[0]->category_parent;
                                        if ($category_parent_id != 0) {
                                            $category_parent = get_term($category_parent_id, 'category');
                                            echo $category_parent->name . " &gt;&gt; " . $category[0]->name;
                                        } else {
                                            echo $category[0]->name;
                                        }

                                        ?>
                                </div>
                                <div class="Right"></div>
                            </div>
                            <div class="TMCD2_Nen">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <!-- loop -->
                                        
                                        <!-- loop -->
                                        <?php
                                        foreach ((get_the_category()) as $category) {
                                            $the_query = new WP_Query('category_name=' . $category->category_nicename . '&showposts=5&order=ASC');
                                            while ($the_query->have_posts()) : $the_query->the_post();
                                        ?>
                                                <tr>
                                                    <td rowspan="1" colspan="1">
                                                        <div class="TMCD2_DongAnhMinhHoa"><a href="<?php the_permalink() ?>"><img class="TMCD2_AnhMinhHoa" src="<?php the_post_thumbnail() ?></a></div>
                                                        <div class=" TMCD2_DongTieuDe"><a href="<?php the_permalink() ?>" class="TMCD2_TieuDe"><?php the_title() ?></a></div>
                                                        <div class="TMCD2_DongNoiDung"><?php echo wp_trim_words(get_the_content(), 55); ?></div>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td colspan="1" class="TMCD2_TieuDeLienQuan">Các bài khác</td>
                                        </tr>
                                        <tr>
                                            <td colspan="1">
                                                <div class="TMCD2_KhoiTinLienQuan">
                                                    <!-- loop -->
                                                    <?php
                                                    //Create WordPress Query with 'orderby' set to 'rand' (Random)
                                                    $the_query = new WP_Query(array('orderby' => 'rand', 'posts_per_page' => '10'));
                                                    // output the random post
                                                    while ($the_query->have_posts()) : $the_query->the_post();
                                                    ?>
                                                        <div class="TMCD2_DongTinLienQuan"><a href="<?php the_permalink() ?>" class="TMCD2_TinLienQuan"><?php the_title() ?></a></div>
                                                    <?php
                                                    endwhile;

                                                    // Reset Post Data
                                                    wp_reset_postdata();
                                                    ?>
                                                    <!-- loop -->
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- FitcKetThucDocTin -->
                        </div>

                    </td>

                    <?php require_once("thanhben.php"); ?>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<?php

get_footer();
