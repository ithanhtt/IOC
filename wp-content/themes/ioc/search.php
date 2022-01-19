<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ioc
 */

get_header();
?>

<tr>
	<td class="Cell59_1" valign="top" colspan="1" rowspan="1" style="width:970px; height: 2650px;">
		<div id="ctl16_divVien" class="KQTimKiem_Vien">
			<div id="ctl16_divDeMuc" class="KQTimKiem_DeMuc">Kết quả tìm kiếm</div>
			<div id="ctl16_divNen" class="KQTimKiem_Nen">
				<table id="ctl16_tblConTrol" cellpadding="0" cellspacing="0" border="0" width="100%">
					<tbody>
						<tr>
							<td id="ctl16_tdNoiDung" class="KQTimKiem_DongText">Nội dung:</td>
							<td>
								<input name="s" id="search" type="text" value="<?php the_search_query(); ?>" id="ctl16_txtFind" class="TextBox" onfocus="NhanEnter('ctl16_btnTimKiem','ctl16_txtFind');" style="width:70%;">
							</td>
						</tr>
						<tr>
							<td>
							</td>
							<td class="KQTimKiem_DongButton">
								<input type="submit" name="ctl16$btnTimKiem" value="Tìm kiếm" id="ctl16_btnTimKiem" class="KQTimKiem_Button">
							</td>
						</tr>
					</tbody>
				</table>

				<div id="ctl16_divKetQua" class="KQTimKiem_DongKetQua">Tìm thấy <span class="KQTimKiem_ConSo"><?php $allsearch = new WP_Query("s=$s&showposts=0");
																												echo $allsearch->found_posts ?></span> kết quả</div>
				<div id="ctl16_divHienThi">
					<table cellspacing="0" cellpadding="0" border="0" width="100%">
						<tbody>
							<!-- Loop -->
							<?php
							$s = get_search_query();
							$args = array(
								's' => $s
							);
							// The Query
							$the_query = new WP_Query($args);
							if ($the_query->have_posts()) {
								while ($the_query->have_posts()) {
									$the_query->the_post();
							?>
									<tr>
										<td class="KQTimKiem_DongTieuDe"><a class="KQTimKiem_TieuDe" href="<?php the_permalink() ?>"><?php the_title() ?></a></td>
									</tr>
									<tr>
										<td class="KQTimKiem_NoiDung">
											<?php echo wp_trim_words(get_the_content(), 55); ?></td>
									</tr>
								<?php
								}
							} else {
								?>
								<div class="alert alert-info">
									<p>Không có kết quả nào phù hợp</p>
								</div>
							<?php } ?>
							<!-- Loop -->
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</td>
		<?php require_once("thanhben.php"); ?>
</tr>

<?php
get_footer();
