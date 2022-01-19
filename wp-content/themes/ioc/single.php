<?php
get_header();
?>

<tr>
	<td class="Cell56_5" valign="top" colspan="1" rowspan="1" style="width:970px;">
		<table class="Table_MainCon" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td class="Cell59_1" valign="top" colspan="1" rowspan="1" style="width:970px;">
						<div id="ctl16_ctl00_divTM" class="HT_Dang2">
							<!-- FitcBatDauDocTin -->
							<div class="TT_TinChiTiet_Vien" id="Tm40">
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
								<div class="TT_TinChiTiet_Nen">
									<div class="TT_TinChiTiet_DeMuc"></div>
									<div class="TT_TinChiTiet_TieuDe"><?php echo get_the_title() ?></div>
									<div class="TT_TinChiTiet_NgayCapNhat"><a class="Font_Tang" href="#" title="Tăng font" onclick="Tang();return false;"><img border="0" src="<?php echo get_template_directory_uri(); ?>/images/fonttang.png" alt=""></a><a class="Font_Giam" href="#" title="Giảm font" onclick="Giam();return false;"><img border="0" src="<?php echo get_template_directory_uri(); ?>/images/fontgiam.png" alt=""></a><span>Ngày cập nhật <span><?php echo get_the_date() ?></span></span></div>
									<div class="TT_TinChiTiet_DocTin">
										<table class="TT_TinChiTiet_DongAnhMinhHoa">
											<tbody>
												<tr>
													<td><img class="TT_TinChiTiet_AnhMinhHoa" border="0" alt="" src="<?php the_post_thumbnail() ?></td>
												</tr>
												<tr>
													<td class=" TT_TinChiTiet_MoTaAnh">
														<?php $image_id = get_post_thumbnail_id(get_the_ID());
														$alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
														echo $alt_text;
														?>
													</td>
												</tr>
											</tbody>
										</table>
										<span>
											<?php the_content() ?>
										</span>
									</div>
									<div class="TT_TinChiTiet_DongChucNang"><a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" target="_blank" class="f1"><img border="0" src="<?php echo get_template_directory_uri(); ?>/images/facebook.gif" alt=""></a>&nbsp;<a href="http://twitter.com/intent/session?original_referer=<?php the_permalink() ?>" target="_blank" class="f2"><img border="0" src="<?php echo get_template_directory_uri(); ?>/images/twitter.gif" alt=""></a>&nbsp;<a href="<?php the_permalink() ?>" target="_blank" class="f3"><img border="0" src="<?php echo get_template_directory_uri(); ?>/images/google.gif" alt=""></a>&nbsp;<a href="" onclick="return windowPopup('<?php the_permalink() ?>',550,500);" class="Mail"><img border="0" src="<?php echo get_template_directory_uri(); ?>/images/mail.gif" alt=""> Gửi tin qua email</a>&nbsp;&nbsp;<a href="" onclick="return windowPopup('<?php the_permalink() ?>',750,500);" class="Print"><img border="0" src="<?php echo get_template_directory_uri(); ?>/images/print.gif" alt="">&nbsp;In ấn</a></div>
									
									<div class="TT_TinChiTiet_TinLienQuanTieuDe">Các tin khác</div>
									<div id="divPhanTrang1">

										<?php
										$related = get_posts(
											array(
												'category__in' => wp_get_post_categories($post->ID),
												'numberposts'  => 10,
												'post__not_in' => array($post->ID)
											)
										);

										if ($related) {
											foreach ($related as $post) {
												setup_postdata($post);
										?>
												<div class="TT_TinChiTiet_DongTinLienQuan">
													<a class="TT_TinChiTiet_TinLienQuan" href="<?php the_permalink() ?>"><?php the_title() ?><span class="TT_TinChiTiet_TinLienQuan_ThoiGian"> (<?php echo get_the_date() ?>)</span></a>

												</div>
										<?php
											}
											wp_reset_postdata();
										}
										?>
									</div>
								</div>
							</div><!-- FitcKetThucDocTin -->
						</div>
						<input type="submit" name="ctl16$ctl00$btnSuKien" value="Button" id="ctl16_ctl00_btnSuKien" style="display:none;">

					</td>
					<?php require_once("thanhben.php") ?>
				</tr>
			</tbody>
		</table>
	</td>
</tr>

<?php
get_footer();
