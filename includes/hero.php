<?php

$bgImage = get_field('bg_image');
$bgColor = get_field('bg_color');
$bgPosition = get_field('bg_position');
$textCenter = (get_field('text_center') == true ? ' text-center' : '');
$content = get_field('content');

?>
<?php if (!empty($bgImage)): ?>
	<section class="hero" style="background: url(<?php echo $bgImage; ?>)no-repeat <?php echo $bgPosition; ?>;background-size: cover;">
<?php else: ?>
		<section class="hero" style="background:<?php echo $bgColor; ?> ">
<?php endif; ?>

	<div class="hero-content container">
		<div class="row">
			<div class="col-md-12<?php echo $textCenter; ?>">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</section>
