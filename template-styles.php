<?php
/*
* Template Name: (Styles)
*/
get_header(); ?>

<main id="primary" class="site-main">

	<div class="full">
		<div class="content">
			<div class="section_style_wrapper">
				
				<div class="section_font_styles_wrapper rte">
					<h6 class="section_title">Font Styles</h6>
					<h1>H1 | 70px/ 1.2em | Sample Headline Here</h1>
					<h2>H2 | 50px/ 1.2em | Sample Headline Here</h2>
					<h3>H3 | 40px/ 1.2em | Sample Headline Here</h3>
					<h4>H4 | 28px/ 1.2em | Sample Headline Here</h4>
					<h5>H5 | 24px/ 1.2em | Sample Headline Here</h5>
					<h6>H6 | 22px/ 1.2em | H6 Sample Headline Here</h6>


					<p>p | 19px / | 1.6em | <a href="/">Our atmospheric water</a> generators deliver water where you need it, when you need it. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquam massa ac elit faucibus porta. Ut finibus ut ligula eget elementum. Mauris sed erat ullamcorper, ultricies est feugiat, aliquet nunc. Fusce vitae efficitur justo. Pellentesque consequat nisi at posuere tristique. </p>

					<p class="b">p.bold | 19px / | 1.6em | <a href="/">Our atmospheric water</a> generators deliver water where you need it, when you need it. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquam massa ac elit faucibus porta. Ut finibus ut ligula eget elementum. Mauris sed erat ullamcorper, ultricies est feugiat, aliquet nunc. Fusce vitae efficitur justo. Pellentesque consequat nisi at posuere tristique. </p>

					
					<p class="s">p.small | 16px / | 1.6em | <a href="/">Our atmospheric water</a> generators deliver water where you need it, when you need it. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquam massa ac elit faucibus porta. Ut finibus ut ligula eget elementum. Mauris sed erat ullamcorper, ultricies est feugiat, aliquet nunc. Fusce vitae efficitur justo. Pellentesque consequat nisi at posuere tristique. </p>
					

					<p class="xs">p.extrasmall | 19px / | 1.1875em | <a href="/">Our atmospheric water</a> generators deliver water where you need it, when you need it. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquam massa ac elit faucibus porta. Ut finibus ut ligula eget elementum. Mauris sed erat ullamcorper, ultricies est feugiat, aliquet nunc. Fusce vitae efficitur justo. Pellentesque consequat nisi at posuere tristique. </p>


					<ul>
						<li>List item example</li>
						<li>List item example</li>
						<ul>
							<li>List item example</li>
							<li>List item example</li>
							<li>List item example</li>
						</ul>
						<li>List item example</li>
						<li>List item example</li>
						<li>List item example</li>

					</ul>

					<ol>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere volutpat nibh, at pharetra ligula varius eu.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere volutpat nibh, at pharetra ligula varius eu.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere volutpat nibh, at pharetra ligula varius eu.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere volutpat nibh, at pharetra ligula varius eu.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere volutpat nibh, at pharetra ligula varius eu.</li>
					</ol>


				</div> <!-- section_font_styles_wrapper -->
				
				<div class="section_color_block">
					<h6 class="section_title">Colors</h6>
					<div class="color_item" style="background-color: #46CF63;">
						<p class="nomargin">Green</p>
						<p nomargin>#46CF63</p>
					</div>
					<div class="color_item" style="background-color: #000000;">
						<p class="nomargin white">Black</p>
						<p class="nomargin white">#000000</p>
					</div>
					<div class="color_item" style="background-color: #C6C6C6;">
						<p class="nomargin">Gray</p>
						<p class="nomargin">#C6C6C6</p>
					</div>
					<div class="color_item" style="background-color: #EDEDED;">
						<p class="nomargin">Gray - Light</p>
						<p class="nomargin">#EDEDED</p>
					</div>
					<div class="color_item outline" style="background-color: #FFFFFF;">
						<p class="nomargin">White</p>
						<p class="nomargin">#FFFFFF</p>
					</div>
				</div> <!-- section_color_block -->



				<div class="section_interactions">
					<h6 class="section_title">Links</h6>
					<div class="section_btn_wrapper">
						<a href="/" class="btn">Button - Green</a>
						<a href="/" class="btn black">Button - Black</a>
						<a href="/" class="btn white">Button - White</a>
					</div>
				</div> <!-- section_interactions -->
				<?php if ( have_rows( 'footer_links_credits', 'option' ) ) : ?>
					<?php while ( have_rows( 'footer_links_credits', 'option' ) ) : the_row(); ?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // No rows found ?>
				<?php endif; ?>


			</div>
		</div> <!-- content -->
	</div> <!-- full -->


</main><!-- #main -->
<?php get_footer(); ?>