<?php // Repeating Builder ?>

<?php 


	if ( have_rows('builder') ): 

		while ( have_rows('builder') ) : the_row();


			if( get_row_layout() == 'text_box'):
				require('text-box.php');
			endif;


		endwhile;

	endif;

?>