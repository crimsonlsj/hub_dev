<div class="<?php $this->get_grid_class() ?> masonry-item <?php $this->entry_term_classes() ?>">
	<article<?php echo liquid_helper()->html_attributes( $attributes ) ?>>

		<div class="ld-pf-wrap" data-hover3d="true" data-custom-animations="true" data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": "this", "offTriggerHandler": "mouseleave", "ease": "power4.out", "duration": 850, "offDuration": 850, "initValues": { "scale": 1 }, "animations": { "scale": 1.13 } }'>

			<div class="ld-pf-inner" data-stacking-factor="0.8">

				<div class="ld-pf-image">
					<?php $this->entry_thumbnail( 'liquid-grid-hover-3d' ); ?>
				</div>

				<div class="ld-pf-bg"></div>
				
				<div class="ld-pf-details py-3">

					<div class="ld-pf-details-inner justify-content-between">

							<?php $this->entry_cats() ?>

						<div class="ld-pf-details-inner">

							<?php the_title( '<h3 class="ld-pf-title h4">', '</h3>' ); ?>
							<?php $this->entry_subtitle( '<p>', '</p>' ) ?>

						</div>
						<?php
							$time_string = '<time class="published updated text-uppercase ltr-sp-1" datetime="%1$s">%2$s</time>';
							printf( $time_string,
								esc_attr( get_the_date( 'c' ) ),
								get_the_date()
							);
						?>
					</div>
				</div>

				<?php $this->get_overlay_button(); ?>

			</div>

		</div>

	</article>

</div>