<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ioc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<center>
		<form>
			<div id="divMain">
				<table id="tblMain" class="Table_Main" cellpadding="0" cellspacing="0">
					<tbody>
						<!-- Header -->
						<tr>
							<td class="Cell56_1" valign="top" colspan="2" rowspan="1" style="width:1350px;">
								<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
									<div id="ctl03_divVien" class="TimKiem1_Vien">
										<div id="ctl03_divDeMuc" class="TimKiem1_DeMuc">Tìm kiếm</div>
										<div id="ctl03_divNen" class="TimKiem1_Nen">
											<div id="ctl03_divDongText" class="TimKiem1_DongTextBox">
												<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="TimKiem1_TextBox" placeholder="Nhập từ khóa" onfocus="NhanEnter('ctl03_btnTim','ctl03_txtFind1');this.value='';">
											</div>
											<div id="ctl03_divDongNutTim" class="TimKiem1_DongNutTim">
												<input type="submit" value="Tìm" onclick="return KiemTra('ctl03_txtFind1');" id="ctl03_btnTim" class="TimKiem1_NutTim">
											</div>
										</div>
									</div>
								</form>
							</td>
						</tr>
						<!-- Menu bar -->
						<tr>
							<td class="Cell56_2" valign="top" colspan="2" rowspan="1" style="width:1350px;">
								<table class="Table_MainCon" cellpadding="0" cellspacing="0">
									<tbody class="">
										<tr>
											<td class="Cell57_1" valign="top" colspan="1" rowspan="1" style="width:46px;">
												<div id="ctl05_divLk">
													<div style="">
														<a href="<?php echo get_home_url(); ?>" target="_parent"><img alt="" src="<?php echo get_template_directory_uri() ?>/images/home(1).png" style="width: 46px; height: 46px;"></a>
													</div>
												</div>
											</td>
											<td class="Cell57_2" valign="top" colspan="1" rowspan="1" style="width:1304px;">
												<?php
												wp_nav_menu(array(
													'menu'   => 'menu-1',
													'container'   => 'div',
													'container_class'   => 'MenuHeThong13',
													'container_id'   => 'ctl06_menuHeThong',
													'add_li_class'   => 'Con',
												));
												?>

			</div>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>