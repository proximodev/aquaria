<?php if ( have_rows( 'product_specs_one' ) ) : ?>
	<?php while ( have_rows( 'product_specs_one' ) ) : the_row(); ?>
		<?php 
		$product_title_one = get_sub_field( 'product_title_one' );
		$production_one = get_sub_field( 'production_one' );
		$dispenser_one = get_sub_field( 'dispenser_one' );
		$dispenser_image_one = get_sub_field( 'dispenser_image_one' );
		$specifications_one = get_sub_field( 'specifications_one' );
		$capacity_one = get_sub_field( 'capacity_one' );
		$weight_one = get_sub_field( 'weight_one' );
		$size_one = get_sub_field( 'size_one' );
		$use_one = get_sub_field( 'use' );
		?>
	<?php endwhile; ?>
<?php endif; ?>
<?php if ( have_rows( 'product_specs_column_two' ) ) : ?>
	<?php while ( have_rows( 'product_specs_column_two' ) ) : the_row(); ?>
		<?php 
		$product_title_two = get_sub_field( 'product_title_two' );
		$production_two = get_sub_field( 'production_two' );
		$dispenser_two = get_sub_field( 'dispenser_two' );
		$dispenser_image_two = get_sub_field( 'dispenser_image_two' );
		$specifications_two = get_sub_field( 'specifications_two' );
		$capacity_two = get_sub_field( 'capacity_two' );
		$weight_two = get_sub_field( 'weight_two' );
		$size_two = get_sub_field( 'size_two' );
		$use_two = get_sub_field( 'use' );
		?>
	<?php endwhile; ?>
<?php endif; ?>
<?php if ( have_rows( 'product_specs_column_three' ) ) : ?>
	<?php while ( have_rows( 'product_specs_column_three' ) ) : the_row(); ?>
		<?php 
		$product_title_three = get_sub_field( 'product_title_three' );
		$production_three = get_sub_field( 'production_three' );
		$dispenser_three = get_sub_field( 'dispenser_three' );
		$dispenser_image_three = get_sub_field( 'dispenser_image_three' );
		$specifications_three = get_sub_field( 'specifications_three' );
		$capacity_three = get_sub_field( 'capacity_three' );
		$weight_three = get_sub_field( 'weight_three' );
		$size_three = get_sub_field( 'size_three' );
		$use_three = get_sub_field( 'use' );
		?>
	<?php endwhile; ?>
<?php endif; ?>


<div class="section_table_wrapper">
	<div class="section_table_row">
		<div> <h6 class="nomargin">Tech Specs</h6> </div>
		<div> <h4 class="nomargin">	<?php echo $product_title_one; ?>  </h4> </div>
		<div> <h4 class="nomargin"> <?php echo $product_title_two; ?>  </h4> </div>
		<div> <h4 class="nomargin"> <?php echo $product_title_three; ?> </h4> </div>
	</div> <!-- section_table_row  -->
	<div class="section_table_row">
		<div> <h6 class="nomargin">Production</h6> </div>
		<div> <p class="nomargin"><?php echo $production_one; ?></p>  </div>
		<div> <p class="nomargin"><?php echo $production_two; ?></p>  </div>
		<div> <p class="nomargin"><?php echo $production_three; ?></p> </div>
	</div> <!-- section_table_row  -->
	<div class="section_table_row">
		<div> <h6 class="nomargin">Dispenser</h6> </div>
		<div> 
			<?php if ($dispenser_image_one) : ?>
				<img src="<?php echo esc_url( $dispenser_image_one['url'] ); ?>" alt="<?php echo esc_attr( $dispenser_image_one['alt'] ); ?>" />
			<?php endif; ?> 
			<p class="nomargin"><?php echo $dispenser_one; ?> </p>
		</div>
		<div> 
			<?php if ($dispenser_image_two) : ?>
				<img src="<?php echo esc_url( $dispenser_image_two['url'] ); ?>" alt="<?php echo esc_attr( $dispenser_image_two['alt'] ); ?>" />
			<?php endif; ?> 
			<p class="nomargin"><?php echo $dispenser_two; ?> </p>
		</div>
		<div>
			<?php if ($dispenser_image_three) : ?>
				<img src="<?php echo esc_url( $dispenser_image_three['url'] ); ?>" alt="<?php echo esc_attr( $dispenser_image_three['alt'] ); ?>" />
			<?php endif; ?> 
			<p class="nomargin"><?php echo $dispenser_three; ?></p>
		</div>
	</div> <!-- section_table_row  -->
	<div class="section_table_row">
		<div> <h6 class="nomargin">Specifications</h6> </div>
		<div> <p class="nomargin"><?php echo $specifications_one; ?></p> </div>
		<div> <p class="nomargin"><?php echo $specifications_two; ?></p> </div>
		<div> <p class="nomargin"><?php echo $specifications_three; ?></p> </div>
	</div> <!-- section_table_row  -->
	<div class="section_table_row">
		<div> <h6 class="nomargin">Capacity</h6></div>
		<div> <p class="nomargin"><?php echo $capacity_one; ?></p> </div>
		<div> <p class="nomargin"><?php echo $capacity_two; ?></p> </div>
		<div> <p class="nomargin"><?php echo $capacity_three; ?></p>  </div>
	</div> <!-- section_table_row  -->
	<div class="section_table_row">
		<div> <h6 class="nomargin">Weight</h6> </div>
		<div> <p class="nomargin"><?php echo $weight_one; ?></p> </div>
		<div> <p class="nomargin"><?php echo $weight_two; ?></p> </div>
		<div> <p class="nomargin"><?php echo $weight_three; ?></p> </div>
	</div> <!-- section_table_row  -->
	<div class="section_table_row">
		<div> <h6 class="nomargin">Size</h6> </div>
		<div> <p class="nomargin"><?php echo $size_one; ?></p> </div>
		<div> <p class="nomargin"><?php echo $size_two; ?></p> </div>
		<div><p class="nomargin"> <?php echo $size_three; ?></p> </div>
	</div> <!-- section_table_row  -->


	<div class="section_table_row">
		<div> <h6 class="nomargin"> Use </h6> </div>
		<div> <p class="nomargin"> <?php echo $use_one; ?></p> </div>
		<div> <p class="nomargin"> <?php echo $use_two; ?></p> </div>
		<div><p class="nomargin"> <?php echo $use_three; ?></p> </div>
	</div> <!-- section_table_row  -->
</div> <!-- section_table_wrapper -->


<div class="section_table_wrapper_mobile">
	<div class="section_table_row_mobile">
		<div class="table_row"> <h4 class="nomargin">	<?php echo $product_title_one; ?> </h4> </div>
		<div class="table_row"> <h6 class="nomargin">Production</h6>  <p class="nomargin"> <?php echo $production_one; ?></p> </div>
		<div class="table_row"> 
			<h6 class="nomargin">Dispenser</h6> 
			<div class="section_dispenser_content">
				<?php if ($dispenser_image_one) : ?>
					<img src="<?php echo esc_url( $dispenser_image_one['url'] ); ?>" alt="<?php echo esc_attr( $dispenser_image_one['alt'] ); ?>" />
				<?php endif; ?> 
				<p class="nomargin"> <?php echo $dispenser_one; ?></p> </div>
			</div> 
			<div class="table_row"> <h6 class="nomargin">Specifications</h6>  <p class="nomargin"> <?php echo $specifications_one; ?> </p> </div>
			<div class="table_row"> <h6 class="nomargin">Capacity</h6> <p class="nomargin"> <?php echo $capacity_one; ?> </p></div>
			<div class="table_row"> <h6 class="nomargin">Weight</h6> <p class="nomargin">  <?php echo $weight_one; ?>  </p> </div>
			<div class="table_row"> <h6 class="nomargin">Size</h6> <p class="nomargin"> <?php echo $size_one; ?>  </p> </div>
			<div class="table_row"> <h6 class="nomargin">Use</h6> <p class="nomargin"> <?php echo $use_one; ?>  </p> </div>

		</div> <!-- section_table_row_mobile -->
		<div class="section_table_row_mobile">
			<div class="table_row"> <h4 class="nomargin">	<?php echo $product_title_two; ?> </h4> </div>
			<div class="table_row"> <h6 class="nomargin">Production</h6>  <p class="nomargin"> <?php echo $production_two; ?></p> </div>
			<div class="table_row"> 
				<h6 class="nomargin">Dispenser</h6> 
				<div class="section_dispenser_content">
					<?php if ($dispenser_image_two) : ?>
						<img src="<?php echo esc_url( $dispenser_image_two['url'] ); ?>" alt="<?php echo esc_attr( $dispenser_image_two['alt'] ); ?>" />
					<?php endif; ?> 
					<p class="nomargin"> <?php echo $dispenser_two; ?></p> 
				</div>
			</div> 
			<div class="table_row"> <h6 class="nomargin">Specifications</h6>  <p class="nomargin"> <?php echo $specifications_two; ?> </p> </div>
			<div class="table_row"> <h6 class="nomargin">Capacity</h6> <p class="nomargin"> <?php echo $capacity_two; ?> </p></div>
			<div class="table_row"> <h6 class="nomargin">Weight</h6> <p class="nomargin">  <?php echo $weight_two; ?>  </p> </div>
			<div class="table_row"> <h6 class="nomargin">Size</h6> <p class="nomargin"> <?php echo $size_two; ?>  </p> </div>
			<div class="table_row"> <h6 class="nomargin">Use</h6> <p class="nomargin"> <?php echo $use_two; ?>  </p> </div>

		</div> <!-- section_table_row_mobile -->
		<div class="section_table_row_mobile">
			<div class="table_row"> <h4 class="nomargin"><?php echo $product_title_three; ?> </h4> </div>
			<div class="table_row"> <h6 class="nomargin">Production</h6>  <p class="nomargin"> <?php echo $production_three; ?></p> </div>
			<div class="table_row"> 
				<h6 class="nomargin">Dispenser</h6> 
				<div class="section_dispenser_content">
					<?php if ($dispenser_image_three) : ?>
						<img src="<?php echo esc_url( $dispenser_image_three['url'] ); ?>" alt="<?php echo esc_attr( $dispenser_image_three['alt'] ); ?>" />
					<?php endif; ?> 
					<p class="nomargin"> <?php echo $dispenser_three; ?></p> 
				</div>
			</div>
			<div class="table_row"> <h6 class="nomargin">Specifications</h6>  <p class="nomargin"> <?php echo $specifications_three; ?> </p> </div>
			<div class="table_row"> <h6 class="nomargin">Capacity</h6> <p class="nomargin"> <?php echo $capacity_three; ?> </p></div>
			<div class="table_row"> <h6 class="nomargin">Weight</h6> <p class="nomargin"> <?php echo $weight_three; ?> </p> </div>
			<div class="table_row"> <h6 class="nomargin">Size</h6> <p class="nomargin"> <?php echo $size_three; ?>  </p> </div>
			<div class="table_row"> <h6 class="nomargin">Use</h6> <p class="nomargin"> <?php echo $use_three; ?>  </p> </div>

		</div> <!-- section_table_row_mobile -->
	</div>
</div>
