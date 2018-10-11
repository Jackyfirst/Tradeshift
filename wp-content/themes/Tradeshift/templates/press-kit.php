<?php
/*
Template Name: Press Kit
*/

get_header();
?>

<main style="width: 100%" class="container main-content onboarding">
	
	<div class="container">
		<h1 style="margin-bottom: 25px"><?php _e("Tradeshift Press Kit", 'Tradeshift'); ?></h1>
		
		<div class="logos">
			
			<?php
			$items = json_decode(file_get_contents('wp-content/themes/Tradeshift/json/press-kit-assets.json'));
			
			foreach ($items as $item):
			?>
				
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
					
					<div class="image-tile" style="overflow: hidden; width: 175px; height: 175px;">
						<a href="<?php echo $item->link; ?>" class="partner-link">
							<img
								style="display: block; width: 175px;"
								src="<?php echo $item->image; ?>"
							>
						</a>
					</div>
					
					<div style="margin: 0px auto 28px auto; width: 175px;">
						<div class="text-left">
							<?php echo $item->title; ?>
						</div>
						
						<div class="text-left text-bold">
							<?php echo $item->subtitle; ?>
						</div>
					</div>
					
				</div>
				
			<?php endforeach; ?>
			
		</div>
		
	</div>
	
</main>

<?php get_footer(); ?>
