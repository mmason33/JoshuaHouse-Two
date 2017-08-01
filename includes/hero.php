<?php 

$bgImage = get_field('bg_image');
$bgPosition = get_field('bg_position');
$textCenter = (get_field('text_center') == true ? ' text-center' : '');
$content = get_field('content');

?>

<section class="hero" style="background: url(<?php echo $bgImage; ?>)no-repeat <?php echo $bgPosition; ?>;background-size: cover;">

	<div class="hero-content container">
		<div class="row">
			<div class="head col-md-12<?php echo $textCenter; ?>">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</section>