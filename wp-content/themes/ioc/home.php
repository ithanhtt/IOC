<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ioc
 */

get_header();
?>

<tr>
    <td class="Cell56_3" valign="top" colspan="1" rowspan="1" style="width:970px; height: 390px">
        <table class="Table_MainCon" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <!--  -->
                    <td class="Cell58_1" valign="top" colspan="1" rowspan="1" style="width:640px;">
                        <div class="TienIch18_Vien" id="TienIch18">
                            <div class="TienIch18_DongDeMuc"></div>
                            <div class="TienIch18_Nen">
                                <?php
                                $lastposts = get_posts(array(
                                    'posts_per_page' => 4
                                ));

                                if ($lastposts) {
                                    foreach ($lastposts as $post) :
                                        setup_postdata($post); ?>
                                        <div class="mySlides TienIch18_KhoiNoiDung">
                                            <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="1" colspan="1" style="">
                                                            <div class="TienIch18_DongAnhMinhHoa">
                                                                <div class="TienIch18_AnhMinhHoa"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail() ?>" alt=""></a></div>
                                                            </div>
                                                            <div class="TienIch18_DongTieuDe"><a href="<?php the_permalink(); ?>" class="TienIch18_TieuDe"><?php echo mb_strimwidth(get_the_title(), 0, 60, '...'); ?></a></div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                <?php
                                    endforeach;
                                    wp_reset_postdata();
                                }
                                ?>
                            </div>
                        </div>
                    </td>
                    <!-- End slider -->
                    <td class="Cell58_2" valign="top" colspan="1" rowspan="1" style="padding:0 0 0 20px; width:310px;">
                        <div class="TienIch19_Vien" id="TienIch19">
                            <div class="TienIch19_Nen" id="divTienIch19">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <!-- loop -->
                                        <?php
                                        $lastposts = get_posts(array(
                                            'posts_per_page' => 2
                                        ));

                                        if ($lastposts) {
                                            foreach ($lastposts as $post) :
                                                setup_postdata($post); ?>
                                                <tr>
                                                    <td valign="top">
                                                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                                            <tbody>
                                                                <tr>
                                                                    <td rowspan="1" colspan="1" style="padding: 5px 0; border-bottom: #9EA3A6 1.5px dashed;">
                                                                        <div class="TienIch19_DongAnhMinhHoa"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail() ?>" class="TienIch19_AnhMinhHoa" alt=""></a></div>
                                                                        <div class="TienIch19_DongTieuDe"><a href="<?php the_permalink(); ?>" class="TienIch19_TieuDe"><?php echo mb_strimwidth(get_the_title(), 0, 50, '...'); ?></a></div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                        <?php
                                            endforeach;
                                            wp_reset_postdata();
                                        }
                                        ?>
                                        <!-- loop -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
    <?php require_once "thanhben.php"; ?>
</tr>

<!-- 1 -->
<!-- 1 -->
<!-- 1 -->

<tr>
    <td class="Cell56_5" valign="top" colspan="1" rowspan="1" style="width:970px; height: 250px;">
        <table class="Table_MainCon" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td class="Cell59_1" valign="top" colspan="1" rowspan="1" style="width:970px;">
                        <div id="ctl19_divLk">
                            <p>
                                <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/??H??_2022.png" style="width: 100%;">
                            </p>
                        </div>
                        <div id="ctl20_divTM" class="TT2_Vien">
                            <div class="TT2_DongTruongMuc">
                                <div><a href="<?php echo get_home_url() ?>/category/tin-tuc-hoat-dong/" class="TT2_TruongMuc">Tin t???c - Ho???t ?????ng</a></div>
                                <div class="Right"></div>
                            </div>
                        </div>

                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>

<!-- 2 -->
<!-- 2 -->
<!-- 2 -->

<tr>
    <td class="Cell56_6" valign="top" colspan="1" rowspan="1" style="width:970px; height: 550px;">
        <table class="Table_MainCon" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <!-- Thong tin moi -->
                    <td class="Cell60_1" valign="top" colspan="1" rowspan="1" style="width:310px;">
                        <div class="TienIch21_Vien" id="TienIch21">
                            <div class="TienIch21_DongDeMuc">
                                <a class="TienIch21_DeMuc" href="<?php echo get_home_url() ?>/category/thong-tin-moi">
                                    <div class="TienIch21_DeMuc">Th??ng tin m???i</div>
                                </a>
                            </div>
                            <div class="TienIch21_Nen" id="divTienIch21">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <ul>
                                            <?php $the_query = new WP_Query(array('cat' => '4', 'posts_per_page' => 4)); ?>
                                            <?php $iterator = 0; ?>
                                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                <tr>
                                                    <td valign="top" class="TienIch21_KhoiNoiDung">
                                                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                                            <tbody>
                                                                <tr>
                                                                    <td rowspan="1" colspan="1" style="">
                                                                        <?php if (has_post_thumbnail() && $iterator == 0) :  ?>
                                                                            <div class="TienIch21_DongAnhMinhHoa">
                                                                                <div class="TienIch21_AnhMinhHoa"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(230, 163)); ?></a></div>
                                                                            </div>
                                                                            <?php $done_last_post_thumbnail = true; ?>
                                                                        <?php endif; ?>
                                                                        <div width="100%" class="TienIch21_KhoiTinLienQuan">
                                                                            <div class="TienIch21_LQ_Dong">
                                                                                <div class="TienIch21_DongTinLienQuan TT21_LQCot1"><a href="<?php the_permalink() ?>" class="TienIch21_TinLienQuan"><span><?php the_title() ?></span></a></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php $iterator++; ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            <?php
                                            endwhile;
                                            wp_reset_postdata();
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                    <!-- Tin ho???t ?????ng trung t??m -->
                    <td class="Cell60_2" valign="top" colspan="1" rowspan="1" style="padding:0 20px 0 20px;width:310px;">
                        <div class="TienIch22_Vien" id="TienIch22">
                            <div class="TienIch22_DongDeMuc"><a class="TienIch22_DeMuc" href="<?php echo get_home_url() ?>/category/tin-hoat-dong-trung-tam">
                                    <div class="TienIch22_DeMuc">Tin ho???t ?????ng Trung t??m</div>
                                </a></div>
                            <div class="TienIch22_Nen" id="divTienIch22">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                        <ul>
                                            <?php $the_query = new WP_Query(array('cat' => '8', 'posts_per_page' => 4)); ?>
                                            <?php $iterator = 0; ?>
                                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                <tr>
                                                    <td valign="top" class="TienIch21_KhoiNoiDung">
                                                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                                            <tbody>
                                                                <tr>
                                                                    <td rowspan="1" colspan="1" style="">
                                                                        <?php if (has_post_thumbnail() && $iterator == 0) :  ?>
                                                                            <div class="TienIch21_DongAnhMinhHoa">
                                                                                <div class="TienIch21_AnhMinhHoa"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(230, 163)); ?></a></div>
                                                                            </div>
                                                                            <?php $done_last_post_thumbnail = true; ?>
                                                                        <?php endif; ?>
                                                                        <div width="100%" class="TienIch21_KhoiTinLienQuan">
                                                                            <div class="TienIch21_LQ_Dong">
                                                                                <div class="TienIch21_DongTinLienQuan TT21_LQCot1"><a href="<?php the_permalink() ?>" class="TienIch21_TinLienQuan"><span><?php the_title() ?></span></a></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php $iterator++; ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            <?php
                                            endwhile;
                                            wp_reset_postdata();
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                    <!-- Tin ho???t ?????ng trong t???nh -->
                    <td class="Cell60_3" valign="top" colspan="1" rowspan="1" style="width:310px;">
                        <div class="TienIch23_Vien" id="TienIch23">
                            <div class="TienIch23_DongDeMuc"><a class="TienIch23_DeMuc" href="<?php echo get_home_url() ?>/category/tin-hoat-dong-trong-tinh">
                                    <div class="TienIch23_DeMuc">Tin ho???t ?????ng trong t???nh</div>
                                </a></div>
                            <div class="TienIch23_Nen" id="divTienIch23">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                        <ul>
                                            <?php $the_query = new WP_Query(array('cat' => '9', 'posts_per_page' => 4)); ?>
                                            <?php $iterator = 0; ?>
                                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                <tr>
                                                    <td valign="top" class="TienIch21_KhoiNoiDung">
                                                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                                            <tbody>
                                                                <tr>
                                                                    <td rowspan="1" colspan="1" style="">
                                                                        <?php if (has_post_thumbnail() && $iterator == 0) :  ?>
                                                                            <div class="TienIch21_DongAnhMinhHoa">
                                                                                <div class="TienIch21_AnhMinhHoa"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(230, 163)); ?></a></div>
                                                                            </div>
                                                                            <?php $done_last_post_thumbnail = true; ?>
                                                                        <?php endif; ?>
                                                                        <div width="100%" class="TienIch21_KhoiTinLienQuan">
                                                                            <div class="TienIch21_LQ_Dong">
                                                                                <div class="TienIch21_DongTinLienQuan TT21_LQCot1"><a href="<?php the_permalink() ?>" class="TienIch21_TinLienQuan"><span><?php the_title() ?></span></a></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php $iterator++; ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            <?php
                                            endwhile;
                                            wp_reset_postdata();
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>

<!-- List post #2 -->
<!-- Chuen doi so -->



<tr>
    <td class="Cell56_7" valign="top" colspan="1" rowspan="1" style="width:970px; height: 80px;">
        <table class="Table_MainCon" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td class="Cell61_1" valign="top" colspan="1" rowspan="1" style="width:970px;">
                        <div id="ctl26_divTM" class="TT2_Vien">
                            <div class="TT2_DongTruongMuc">
                                <div><a href="<?php echo get_home_url() ?>/category/chuyen-doi-so" class="TT2_TruongMuc">Chuy???n ?????i s???</a></div>
                                <div class="Right"></div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<!-- Post -->


<tr>
    <td class="Cell56_8" valign="top" colspan="1" rowspan="1" style="width:970px; height:550px;">
        <table class="Table_MainCon" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td class="Cell62_1" valign="top" colspan="1" rowspan="1" style="width:310px;">
                        <div class="TienIch24_Vien" id="TienIch24">
                            <div class="TienIch24_DongDeMuc"><a class="TienIch24_DeMuc" href="<?php echo get_home_url() ?>/category/chinh-quyen-so">
                                    <div class="TienIch24_DeMuc">Ch??nh quy???n s???</div>
                                </a></div>
                            <div class="TienIch24_Nen" id="divTienIch24">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                        <ul>
                                            <?php $the_query = new WP_Query(array('cat' => '10', 'posts_per_page' => 4)); ?>
                                            <?php $iterator = 0; ?>
                                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                <tr>
                                                    <td valign="top" class="TienIch21_KhoiNoiDung">
                                                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                                            <tbody>
                                                                <tr>
                                                                    <td rowspan="1" colspan="1" style="">
                                                                        <?php if (has_post_thumbnail() && $iterator == 0) :  ?>
                                                                            <div class="TienIch21_DongAnhMinhHoa">
                                                                                <div class="TienIch21_AnhMinhHoa"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(230, 163)); ?></a></div>
                                                                            </div>
                                                                            <?php $done_last_post_thumbnail = true; ?>
                                                                        <?php endif; ?>
                                                                        <div width="100%" class="TienIch21_KhoiTinLienQuan">
                                                                            <div class="TienIch21_LQ_Dong">
                                                                                <div class="TienIch21_DongTinLienQuan TT21_LQCot1"><a href="<?php the_permalink() ?>" class="TienIch21_TinLienQuan"><span><?php the_title() ?></span></a></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php $iterator++; ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            <?php
                                            endwhile;
                                            wp_reset_postdata();
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                    <td class="Cell62_2" valign="top" colspan="1" rowspan="1" style="padding:0 20px 0 20px;width:310px;">
                        <div class="TienIch25_Vien" id="TienIch25">
                            <div class="TienIch25_DongDeMuc"><a class="TienIch25_DeMuc" href="<?php echo get_home_url() ?>/category/xa-hoi-so">
                                    <div class="TienIch25_DeMuc">X?? h???i s???</div>
                                </a></div>
                            <div class="TienIch25_Nen" id="divTienIch25">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                        <ul>
                                            <?php $the_query = new WP_Query(array('cat' => '7', 'posts_per_page' => 4)); ?>
                                            <?php $iterator = 0; ?>
                                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                <tr>
                                                    <td valign="top" class="TienIch21_KhoiNoiDung">
                                                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                                            <tbody>
                                                                <tr>
                                                                    <td rowspan="1" colspan="1" style="">
                                                                        <?php if (has_post_thumbnail() && $iterator == 0) :  ?>
                                                                            <div class="TienIch21_DongAnhMinhHoa">
                                                                                <div class="TienIch21_AnhMinhHoa"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(230, 163)); ?></a></div>
                                                                            </div>
                                                                            <?php $done_last_post_thumbnail = true; ?>
                                                                        <?php endif; ?>
                                                                        <div width="100%" class="TienIch21_KhoiTinLienQuan">
                                                                            <div class="TienIch21_LQ_Dong">
                                                                                <div class="TienIch21_DongTinLienQuan TT21_LQCot1"><a href="<?php the_permalink() ?>" class="TienIch21_TinLienQuan"><span><?php the_title() ?></span></a></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php $iterator++; ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            <?php
                                            endwhile;
                                            wp_reset_postdata();
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                    <td class="Cell62_3" valign="top" colspan="1" rowspan="1" style="width:310px;">
                        <div class="TienIch26_Vien" id="TienIch26">
                            <div class="TienIch26_DongDeMuc"><a class="TienIch26_DeMuc" href="<?php echo get_home_url() ?>/category/kinh-te-so">
                                    <div class="TienIch26_DeMuc">Kinh t??? s???</div>
                                </a></div>
                            <div class="TienIch26_Nen" id="divTienIch26">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                        <ul>
                                            <?php $the_query = new WP_Query(array('cat' => '6', 'posts_per_page' => 4)); ?>
                                            <?php $iterator = 0; ?>
                                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                <tr>
                                                    <td valign="top" class="TienIch21_KhoiNoiDung">
                                                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                                            <tbody>
                                                                <tr>
                                                                    <td rowspan="1" colspan="1" style="">
                                                                        <?php if (has_post_thumbnail() && $iterator == 0) :  ?>
                                                                            <div class="TienIch21_DongAnhMinhHoa">
                                                                                <div class="TienIch21_AnhMinhHoa"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(230, 163)); ?></a></div>
                                                                            </div>
                                                                            <?php $done_last_post_thumbnail = true; ?>
                                                                        <?php endif; ?>
                                                                        <div width="100%" class="TienIch21_KhoiTinLienQuan">
                                                                            <div class="TienIch21_LQ_Dong">
                                                                                <div class="TienIch21_DongTinLienQuan TT21_LQCot1"><a href="<?php the_permalink() ?>" class="TienIch21_TinLienQuan"><span><?php the_title() ?></span></a></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php $iterator++; ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            <?php
                                            endwhile;
                                            wp_reset_postdata();
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>

<!-- Service and media -->

<tr>
    <td class="Cell56_9" valign="top" colspan="1" rowspan="1" style="width:970px;">
        <table class="Table_MainCon" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td class="Cell63_1" valign="top" colspan="1" rowspan="1" style="width:970px;">
                        <div id="ctl32_divLk">
                            <div style="width:970px; padding:0;">
                                <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_dichvu.png" style="width: 970px; height: 26px; padding:0 0 15px 0;">
                                <a href="#" target="_parent"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_tkweb.png" style="width: 222px; height: 234px;"></a>
                                <a href="#" target="_parent"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_duan.png" style="width: 226px; height: 234px; margin-left: 25px; margin-right: 25px;"></a>
                                <a href="#" target="_parent"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_kiemthu.png" style="width: 222px; height: 234px; margin-right: 10px;"></a>
                                <a href="#" target="_parent"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_sohoa.png" style="width: 224px; height: 234px; float: right;"></a>
                            </div>
                        </div>
                        <div id="ctl33_menuHeThong" class="MenuHeThong14">
                            <ul>
                                <li class="" id="li_70"><a href="#"><span>Video</span></a></li>
                                <li class="NganCach">&nbsp;</li>
                                <li class="" id="li_71"><a href="#"><span>???nh</span></a></li>
                            </ul>
                        </div>


                        <div id="ctl34_divVien" class="Video2_Vien">
                            <div class="Video2_DongDeMuc"><a class="Video2_DeMuc" href="#">Video</a></div>
                            <div class="Video2_Nen">
                                <div class="Video2_VungClipChinh">
                                    <div class="Video2_KhoiVideo">
                                        <div class="Video2_Clip"><video class="Video2_KhungVideo" id="video" autoplay="autoplay" controls="" preload="none" mediagroup="myVideoGroup" poster="<?php echo get_template_directory_uri(); ?>/images/vid1.png">
                                                <source id="mp4" src="<?php echo get_template_directory_uri(); ?>/images/8379848608770285270.mp4">
                                            </video></div>
                                        <div class="Video2_DongTenClip"><a href="#" class="Video2_TenClip">D???u ???n chuy???n ?????i s??? 2021 </a></div>
                                    </div>
                                    <div class="Video2_KhoiVideo">
                                        <div class="Video2_Clip"><video class="Video2_KhungVideo" id="video" controls="" preload="none" mediagroup="myVideoGroup" poster="<?php echo get_template_directory_uri(); ?>/images/gdd_4784.jpg">
                                                <source id="mp4" src="<?php echo get_template_directory_uri(); ?>/images/hueioc__hues.mp4">
                                            </video></div>
                                        <div class="Video2_DongTenClip"><a href="#" class="Video2_TenClip">HueIOC nh???n Danh hi???u Sao Khu?? 2020 </a></div>
                                    </div>
                                    <div class="Video2_KhoiVideo">
                                        <div class="Video2_Clip"><video class="Video2_KhungVideo" id="video" controls="" preload="none" mediagroup="myVideoGroup" poster="<?php echo get_template_directory_uri(); ?>/images/capture(1).png">
                                                <source id="mp4" src="<?php echo get_template_directory_uri(); ?>/images/cachdeokhautrang_sub1.mp4">
                                            </video></div>
                                        <div class="Video2_DongTenClip"><a href="#" class="Video2_TenClip">S??? d???ng kh???u trang ????ng c??ch ph??ng d???ch vi??m ph???i c???p do 2019-nCoV </a></div>
                                    </div>
                                </div>
                                <!-- <div class="Video2_VungClip_LQ">
                                    <div class="Video2_DeMuc_LQ">Video kh??c</div>
                                    <div class="Video2_KhoiClip_LQ">
                                        <div class="Video2_DongClip_LQ"><a href="#10" class="Video2_Clip_LQ">C??ng b??? Trung t??m Gi??m s??t, ??i???u h??nh ???? th??? th??ng minh v??o ng??y 25_7 (TRT)</a></div>
                                        <div class="Video2_DongClip_LQ"><a href="#9" class="Video2_Clip_LQ">Clip Gi???i thi???u D???ch v??? ???? th??? th??ng minh t???nh Th???a Thi??n Hu???</a></div>
                                        <div class="Video2_DongClip_LQ"><a href="#8" class="Video2_Clip_LQ">D???ch v??? ???? th??? th??ng minh h?????ng ?????n s??? h??i l??ng c???a ng?????i d??n.</a></div>
                                        <div class="Video2_DongClip_LQ"><a href="#7" class="Video2_Clip_LQ">Th???a Thi??n Hu??? x??? ph???t vi ph???m m??i tr?????ng qua camera</a></div>
                                        <div class="Video2_DongClip_LQ"><a href="#6" class="Video2_Clip_LQ">B?? th?? T???nh ???y L?? Tr?????ng L??u Th??m v?? l??m vi???c v???i S??? Th??ng tin v?? Truy???n th??ng</a></div>
                                        <div class="Video2_DongClip_LQ"><a href="#5" class="Video2_Clip_LQ">X??? l?? ph???n ??nh hi???n tr?????ng t??? Trung t??m Gi??m s??t, ??i???u h??nh ???? th??? th??ng minh</a></div>
                                        <div class="Video2_DongClip_LQ"><a href="#4" class="Video2_Clip_LQ">Clip gi???i thi???u IOC t???i H???i ngh??? ph??t tri???n kinh t??? xanh</a></div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<?php
get_footer();
