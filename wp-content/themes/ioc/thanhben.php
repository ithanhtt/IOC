<td class="Cell56_4" valign="top" colspan="1" rowspan="6" style="padding:0 0 0 20px;width:360px;">
    <div class="TienIch20_Vien" id="TienIch20">
        <div class="TienIch20_DongDeMuc"><a class="TienIch20_DeMuc" href="<?php echo get_home_url() ?>/category/thong-bao-tu-trung-tam/">
                <div class="TienIch20_DeMuc">Thông báo</div>
            </a></div>
        <div class="TienIch20_Nen" id="divTienIch20">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                    <!-- loop -->
                    <?php
                    $args = array('posts_per_page' => 4, 'category' => 11);

                    $myposts = get_posts($args);
                    foreach ($myposts as $post) : setup_postdata($post); ?>
                        <tr>
                            <td valign="top" class="TienIch20_DongChan">
                                <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                    <tbody>
                                        <tr>
                                            <td rowspan="1" colspan="1" style="">
                                                <div class="TienIch20_DongTieuDe"><a href="<?php the_permalink() ?>" class="TienIch20_TieuDe"><?php the_title() ?><span class="TienIch20_TieuDe_NgayCapNhat"> (<?php echo get_the_date() ?>)</span></a></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                    <!-- loop -->

                </tbody>
            </table>
        </div>
    </div>
    <div id="ctl11_divVanBan" class="VanBan1_Vien">
        <div class="VanBan1_DongDeMuc"><a href="#" class="VanBan1_DeMuc">Văn bản quy phạm pháp luật</a></div>
        <!--  -->
        <div id="box" style="width:100%; height:100px; overflow:hidden;">
            <ul style="padding: 10px;">
                <li style="list-style-type: none; padding-top: 40px;"><a href="#">Quyết định số 3043/QÐ-UBND của UBND tỉnh Thừa Thiên Huế về việc Ban hành Bộ tiêu chí và phương pháp đánh giá mức độ Chính quyền số các cấp tỉnh Thừa Thiên Huế (ngày ban hành: 22/11/2021)</a></li>
                <li style="list-style-type: none; padding-top: 40px;"><a href="#">
                        Chỉ Thị số 29/CT-UBND của UBND tỉnh Thừa Thiên Huế về việc CHỈ THỊ Về đẩy mạnh cải cách hành chính gắn với chính quyền số, dịch vụ đô thị thông minh trên địa bàn tỉnh (ngày ban hành: 27/12/2021)</a></li>
                <li style="list-style-type: none; padding-top: 40px;"><a href="#">Quyết định số 3043/QÐ-UBND của UBND tỉnh Thừa Thiên Huế về việc Ban hành Bộ tiêu chí và phương pháp đánh giá mức độ Chính quyền số các cấp tỉnh Thừa Thiên Huế (ngày ban hành: 22/11/2021)</a></li>
            </ul>
        </div>
        <!--  -->
    </div>

    <div class="TienIch28_Vien" id="TienIch28">
        <div class="TienIch28_DongDeMuc">Văn bản chỉ đạo điều hành</div>
        <div class="TienIch28_Nen" id="divTienIch28">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                    <!-- Loop -->
                    <!-- loop -->
                    <?php
                    $args = array('posts_per_page' => 3, 'category' => 12);

                    $myposts = get_posts($args);
                    foreach ($myposts as $post) : setup_postdata($post); ?>
                        <tr>
                            <td valign="top" class="TienIch28_DongChan">
                                <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                    <tbody>
                                        <tr>
                                            <td rowspan="1" colspan="1" style="">
                                                <div class="TienIch28_DongTieuDe"><a href="<?php the_permalink() ?>" class="TienIch28_TieuDe"><?php the_title() ?></a></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                    <!-- loop -->

                    <!-- Loop -->

                </tbody>
            </table>
        </div>
    </div>
    <div id="ctl13_divLk">
        <div style="width:360px; padding:0;">
            <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_thuvienungdung.png" style="width: 358px; height: 35px;"><a href="https://huecity.vn/" target="_blank"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_hues.png" style="width: 358px; height: 81px;"></a><a href="https://www.bkav.com.vn/" target="_blank"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_bkav.png" style="width: 358px; height: 80px;"></a><a href="https://viettelpay.vn/" target="_blank"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_vtpay.png" style="width: 358px; height: 80px;"></a>
        </div>
    </div>
    <div id="ctl14_divLk">
        <div style="width:360px; margin:20px 0; background:#eff4f7;">
            <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_tailieu.png" style="width: 360px; height: 36px; padding:0px;"><a href="https://huecity.vn/" target="_blank"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_tongquanHueS.png" style="width: 360px; height: 54px; padding:5px 0 0px 0;"></a><a href="https://tuongtac.thuathienhue.gov.vn/UploadFiles/Tai_lieu_huong_dan_su_dung_HUE-S.pdf" target="_blank"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_qltkHueS.png" style="width: 360px; height: 54px; padding:0 0 10px 0;"></a>
        </div>
    </div>
    <div id="ctl15_divLk">
        <div style="width:360px; padding:0;">
            <a href="https://www.mic.gov.vn/" target="_blank"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_botttt.png" style="width: 360px; height: 111px;"></a><a href="https://thuathienhue.gov.vn/" target="_blank"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_cong.png" style="width: 360px; height: 140px; margin-top: 20px;"></a><a href="https://stttt.thuathienhue.gov.vn/" target="_blank"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_sotttt.png" style="width: 358px; height: 141px; margin-top: 20px; margin-bottom: 20px;"></a><a href="https://tuongtac.thuathienhue.gov.vn/" target="_blank"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_tuongtac.png" style="width: 360px; height: 142px;"></a><a href="https://huecity.vn/" target="_blank"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_dichvudttm.png" style="width: 360px; height: 141px; margin-top: 20px;"></a><a href="https://dichvucong.thuathienhue.gov.vn/" target="_blank"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/lk_dvc.png" style="width: 360px; height: 109px; margin-top: 20px;"></a>
        </div>
    </div>
    <div id="ctl16_divLk">
        <p>
            <a href="http://vandongxahoi.mattran.org.vn/"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/MatTran.jpg" style="width: 100%; float: right;"></a>
        </p>
    </div>
    <div id="ctl17_divLk">
        <p>
            <a href="https://tinnhiemmang.vn/danh-ba-tin-nhiem/iocthuathienhuegovvn-1626681072" target="_blank" title="Chung nhan Tin Nhiem Mang"><img alt="Chung nhan Tin Nhiem Mang" height="auto" src="https://tinnhiemmang.vn/handle_cert?id=ioc.thuathienhue.gov.vn" width="360px"></a>
        </p>
    </div>
</td>
<script>
    // auto scoll

    (function() {
        var box = document.getElementById('box');
        box.appendChild(box.firstChild.cloneNode());

        function infScroll() {
            box.scrollTop += 1;
            if (box.scrollTop === 300) {
                box.scrollTop = 0;
            }
            window.requestAnimationFrame(infScroll);
        }
        window.requestAnimationFrame(infScroll);
    }());
</script>