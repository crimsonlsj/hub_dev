<?php 
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Hub
 * @since 1.0
 */

get_header();

	if( have_posts() ) :
	
	?>
	<style>
		.titlebar {display: none !important;}
		footer.main-footer {display: none !important;}
	</style>
	<div id="wrap" class="main">
	<hr />
	<!-- Aside S -->
	<aside id="aside">
		<div class="a_quick">
			<ul>
				<li><a href="#location"><i class="aq_icon location"></i><span class="blind">Location</span></a></li>
				<li><a href="mailto:info@.co.kr"><i class="aq_icon mail"></i><span class="blind">Send to mail</span></a></li>
			</ul>
		</div>
	</aside>
	<!-- Aside E -->
	<hr />
	<!-- Contents S -->
	<div id="contents">
		<div id="portfolio" class="c_position"></div>
	</div>
	<hr />

<div id="contents-2">
	<section class="c_portfolio c_contents sub">
			<div class="">
				<div class="c_title">
				</div>
				<div id="page" class="c_wrap">
					<div class="cp_list" id="box_local" style="display:block">
					<div class="contents-header">
						<div class="title-n-menu sub">
							<div class="title">
								<!-- <span>HOT</span> -->
								<!-- <span class="image"><img src="/wp-content/themes/hub/assets/img/logotitle.png"></span>
								<span>콘텐츠</span> -->
							</div>
							<!-- <div class="menu sub">
								<button class="menu-item">전체</button>
								<button class="menu-item">라이프</button>
								<button class="menu-item">비즈니스</button>
							</div> -->
						</div>
						<div class="card-list">
						<?php // Start the Loop.	
	
	while ( have_posts() ) : the_post();
	
	// $column_classname = liquid()->layout->has_sidebar() ? 'col-xs-12' : 'col-md-4 col-sm-6';
	
?>

<a href="<?php the_permalink(); ?>" class="card-item type-1">
									<div class="image" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) ?>');"></div>
									<div class="content">
										<div class="label">#<?php echo get_post_meta( get_the_ID(), 'post-link-url', true);?></div>
										<div class="title">
											<span><?php the_title(); ?></span>
											<span><?php echo get_post_meta( get_the_ID(), 'post-quote-url', true); ?></span>
										</div>
										<div class="sub">2021-10-11</div>
										<button class="dots"><span></span></button>
									</div>
								</a>


<?php endwhile; // End of the loop. ?>
<?php
// Set up paginated links.
	$links = paginate_links( array(
	'type' => 'array',
	'prev_next' => true,
	'prev_text' => '<span aria-hidden="true">' . wp_kses_post( __( '<i class="lqd-icn-ess icon-ion-ios-arrow-back"></i>', 'hub' ) ) . '</span>',
	'next_text' => '<span aria-hidden="true">' . wp_kses_post( __( '<i class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>', 'hub' ) ) . '</span>'
));

if( !empty( $links ) ) {

	printf( '<div class="blog-nav"><nav aria-label="' . esc_attr__( 'Page navigation', 'hub' ) . '"><ul class="pagination"><li>%s</li></ul></nav></div>', join( "</li>\n\t<li>", $links ) );
}; ?>
						</div>
					</div>
					</div>
				</div>
			</div>
		</section>
</div>


	<?php else : // If no posts were found.

		get_template_part( 'templates/content/error' );

	endif;

get_footer();