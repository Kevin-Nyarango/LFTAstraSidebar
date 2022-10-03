<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$astra_sidebar = apply_filters( 'astra_get_sidebar', 'sidebar-1' );

echo '<div ';
	echo astra_attr(
		'sidebar',
		array(
			'id'    => 'secondary',
			'class' => join( ' ', astra_get_secondary_class() ),
		)
	);
	echo '>';
	?>

	<div class="sidebar-main" <?php /** @psalm-suppress TooManyArguments */ echo apply_filters( 'astra_sidebar_data_attrs', '', $astra_sidebar ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped, Generic.Commenting.DocComment.MissingShort ?>>
		<?php astra_sidebars_before(); ?>

		<?php

		if ( is_active_sidebar( $astra_sidebar ) ) :
				dynamic_sidebar( $astra_sidebar );
		endif;

		astra_sidebars_after();
		?>
	<?php if ( get_field(aliases) ) : ?>

				<h1 style="font-weight:600; font-size:24px; color:black;">
					Aliases:
				</h1>


				<h2  style="font-weight:500; font-size:16px; color:black; margin-top:10px; ">
					<?php 
						echo get_field(aliases)
					?>
				</h2>
	<?php endif; ?>
		
		
		<div style="border:1px solid gray; border-radius:15px; margin: 15px 0; ">	<!-- 	custom sidebar content -->
			
			
			<?php if ( get_field(age) ) : ?>
				<div style="display:flex; gap:16px;  margin:10px 0; padding:5px 0;  align-items:center; border-bottom:solid 1px gray;">
					<h1 style="font-weight:600; font-size:16px; color:black; margin-left:25px;">
						Age :
					</h1>


					<h2  style="font-weight:500; font-size:15px; color:black;">
						<?php 
							echo get_field(age)
						?>
					</h2>
				</div>	
			<?php endif; ?>
		
			<?php if ( get_field(sex) ) : ?>
				<div style="display:flex; gap:16px;  margin:10px 0; padding:5px 0;  align-items:center; border-bottom:solid 1px gray;">
					<h1 style="font-weight:600; font-size:16px; color:black; margin-left:25px;">
						Sex :
					</h1>


					<h2  style="font-weight:500; font-size:15px; color:black;">
						<?php 
							echo get_field(sex)
						?>
					</h2>
				</div>	
			<?php endif; ?>
				
				
			<?php if ( get_field(height) ) : ?>
				<div style="display:flex; gap:16px;  margin:10px 0; padding:5px 0;  align-items:center; border-bottom:solid 1px gray;">
					<h1 style="font-weight:600; font-size:16px; color:black; margin-left:25px;">
						Height :
					</h1>


					<h2  style="font-weight:500; font-size:15px; color:black;">
						<?php 
							echo get_field(height)
						?>
					</h2>
				</div>	
			<?php endif; ?>

		
				
			<?php if ( get_field(weight) ) : ?>
				<div style="display:flex; gap:16px;  margin:10px 0; padding:5px 0;  align-items:center; border-bottom:solid 1px gray;">
					<h1 style="font-weight:600; font-size:16px; color:black; margin-left:25px;">
						Weight :
					</h1>


					<h2  style="font-weight:500; font-size:15px; color:black;">
						<?php 
							echo get_field(weight)
						?>
					</h2>
				</div>	
			<?php endif; ?>
			
				
				
			<?php if ( get_field(eyes) ) : ?>
				<div style="display:flex; gap:16px;  margin:10px 0; padding:5px 0;  align-items:center; border-bottom:solid 1px gray;">
					<h1 style="font-weight:600; font-size:16px; color:black; margin-left:25px;">
						Eyes :
					</h1>


					<h2  style="font-weight:500; font-size:15px; color:black;">
						<?php 
							echo get_field(eyes)
						?>
					</h2>
				</div>	
			<?php endif; ?>

		
			
			<?php if ( get_field(language) ) : ?>
				<div style="display:flex; gap:16px;  margin:10px 0; padding:5px 0;  align-items:center;  border-bottom:solid 1px gray;">
					<h1 style="font-weight:600; font-size:16px; color:black; margin-left:25px;">
						Language :
					</h1>


					<h2  style="font-weight:500; font-size:15px; color:black;">
						<?php 
							echo get_field(language)
						?>
					</h2>
				</div>	
			<?php endif; ?>

				
			<?php if ( get_field(area_last_seen) ) : ?>
				<div style="display:flex; gap:16px;  margin:10px 0; padding:5px 0;  align-items:center; border-bottom:solid 1px gray;">
					<h1 style="font-weight:600; font-size:16px; color:black; margin-left:25px;">
						Area last seen :
					</h1>


					<h2  style="font-weight:500; font-size:15px; color:black;">
						<?php 
							echo get_field(area_last_seen)
						?>
					</h2>
				</div>	
			<?php endif; ?>

			
	
			<?php if ( get_field(race) ) : ?>
				<div style="margin:10px 0 5px 0; padding:5px 0;  align-items:center; border-bottom:solid 1px gray;">
					<div style="display:flex; gap:16px;  ">

						<h1 style="font-weight:600; font-size:16px; color:black; margin-left:25px;">
							Race :
						</h1>


						<h2  style="font-weight:500; font-size:15px; color:black;">
							<?php 
								echo get_field(race)
							?>
						</h2>
					</div>
					
					<div style="display:flex; gap:16px;  margin:5px 0 10px 85px; ">
						
						<h1 style="font-weight:600; font-size:15px; color:black;">
							Complexion :
						</h1>


						<h2  style="font-weight:500; font-size:15px; color:black;">
							<?php 
								echo get_field(complexion)
							?> 
						</h2>
					</div>
				</div>	
			<?php endif; ?>
		
				
			<?php if ( get_field(scars_marks_and_tattoos) ) : ?>
				<div style="display:flex; gap:16px;  margin:10px 0; padding:5px 0;  align-items:center;">
					<h1 style="font-weight:600; font-size:16px; color:black; margin-left:25px;">
						Scars, Marks and Tattoos :
					</h1>


					<h2  style="font-weight:500; font-size:15px; color:black;">
						<?php 
							echo get_field(scars_marks_and_tattoos)
						?>
					</h2>
				</div>	
			<?php endif; ?>
			
			
				
				</div>
		

		
	</div><!-- .sidebar-main -->
</div><!-- #secondary -->
