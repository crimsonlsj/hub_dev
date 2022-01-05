<?php
/**
 * The template for displaying categories pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header();

	if ( have_posts() ) :

		// get_template_part( 'templates/category', 'layout' );

	// If no content, include the "No posts found" template.
	else :

		// get_template_part( 'templates/content/error' );

	endif;
	?>
<style>
	.titlebar {display: none !important;}
</style>
<style type="text/css">
		#contents .c_intro,
		#contents .c_intro .wrap,
		#contents .c_intro .ci_visual,
		#contents .c_intro .ci_visual .civ_slide,
		#contents .c_intro .ci_visual .civ_slide .item {
			min-height: 100vh;
		}
		#contents .c_intro .ci_slogan .cis_wrap {
			top: calc(50% - 30px);
			height: initial;
			margin-top: 0;
			transform: translate(0, -50%);
		}
		#contents .c_intro .ci_slogan .cis_wrap:before {
			content: none;
		}
		#contents .c_intro .ci_slogan .cis_wrap h3 {
			position: relative;
			width: inherit;
			height: inherit;
			top: inherit;
			margin-top: 0;
			color: #1d1d1d;
			font-size: 50px;
			line-height: 1.5;
		}
		#contents .c_intro .ci_slogan .cis_wrap h3.underline:before {
			content: "";
			position: absolute;
			bottom: 10px;
			width: 100%;
			height: 28px;
			background-color: #f9e032;
			z-index: -1;
		}
		#contents .c_intro .ci_slogan .cis_wrap button {
			position: relative;
			margin-top: 68px;
			left: 60px;
			width: 55px;
		}
		#contents .c_intro .ci_slogan .cis_wrap button img {
			width: 100%;
		}
		#contents .c_intro .ci_slogan .cis_wrap img.logo {
			display: block;
			left: 60px;
			position: relative;
			width: 50px;
			margin-bottom: 42px;
		}

		@media (max-width: 1180px) {
			#contents .c_intro .ci_slogan .cis_wrap button,
			#contents .c_intro .ci_slogan .cis_wrap img.logo {
				left: 35px;
			}
			#contents .c_intro .ci_slogan .cis_wrap h3 {
				font-size: 34px;
			}
		}
		@media (max-width: 800px) {
			#contents .c_intro .ci_slogan {
				display: block;
				left: 0;
				z-index: 1;
				pointer-events: none;
			}
			#contents .c_intro .ci_slogan .cis_wrap {
				top: 130px;
				transform: inherit;
			}
			#contents .c_intro .ci_slogan .cis_wrap img.logo,
			#contents .c_intro .ci_slogan .cis_wrap button {
				display: none;
			}
			#contents .c_intro .ci_slogan .cis_wrap h3 {
				font-size: 35px;
			}
			#contents .c_intro .ci_slogan .cis_wrap h3.underline:before {
				bottom: 6px;
				height: 11px;
				background-color: white;
			}
		}
		@media (max-width: 560px) {
			#aside .a_quick {
				left: -11px;
			}
			#contents .c_intro .ci_slogan .cis_wrap {
				top: 120px;
			}
			#contents .c_intro .ci_slogan .cis_wrap h3 {
				font-size: 25px;
			}
		}
		#contents-2 .c_contents {
			padding-top: 100px;
		}
		#contents-2 .c_contents .contents-header .title-n-menu.sub {
			text-align: left;
			padding-bottom: 50px;
		}
		#contents-2 .c_contents .contents-header .title-n-menu .menu.sub {float: left; grid-template-columns: repeat(3, auto)}
		#contents-2 .c_contents .contents-header .title-n-menu::after {
			content: "";
			display: table;
			clear: both;
		}
	</style>
<div id="wrap" class="main">
	<!-- Header S -->
	<!-- <header id="header">
		<div class="h_logo">
			<a href="index.html" title="Go to Home">
				<i class="hl_n"></i><i class="hl_e"></i><i class="hl_w"></i><i class="hl_b"></i><i class="hl_i"></i><i class="hl_r"></i><i class="hl_d"></i><i class="hl_bar"></i>
				<h1 class="blind"></h1>
			</a>
		</div>
		<hr />
		<nav class="h_gnb">
			<h2 class="blind">GNB</h2>
			<i class="hg_icon"></i>
			<button type="button" class="hg_btn"><span class="blind">Menu Button</span></button>
			<div class="hg_wrap">
				<ul>
					<li>
						<a href="index.html" class="on"><span>인덱스</span></a>
					</li>
					<li>
						<a href="about/index.html"><span>공스타 소개</span></a>
					</li>
					<li>
						<a href="service/index.html"><span>서비스 소개</span></a>
					</li>
					<li>
						<a href="portfolio/index.html"><span>포트폴리오</span></a>
					</li>
					<li>
						<a href="contact/index.html"><span>상담신청</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</header> -->
	<!-- Header E -->
	<hr />
	<!-- Aside S -->
	<aside id="aside">
		<div class="a_quick">
			<ul>
				<li><a href="#location"><i class="aq_icon location"></i><span class="blind">Location</span></a></li>
				<li><a href="mailto:info@.co.kr"><i class="aq_icon mail"></i><span class="blind">Send to mail</span></a></li>
			</ul>
		</div>
		<!-- <div class="a_customer">
			<h2 class="ac_title">SEARCH</h2>
			<a href="tel:0264044224" class="">
				<svg data-v-ae75f7f2="" data-v-9760bdba="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" class="ico_search"><g data-v-ae75f7f2="" fill="none" fill-rule="evenodd"><g data-v-ae75f7f2="" stroke-width="1.6"><g data-v-ae75f7f2="" transform="translate(-308 -16) translate(312 20)"><circle data-v-ae75f7f2="" cx="8.944" cy="8.944" r="8.944"></circle> <path data-v-ae75f7f2="" d="M14.987 14.987L21.017 21.017"></path></g></g></g></svg>
			</a>
		</div> -->
	</aside>
	<!-- Aside E -->
	<hr />
	<!-- Contents S -->
	<div id="contents">
		<div id="portfolio" class="c_position"></div>
	</div>
	<!-- Contents E -->
	<hr />

	<!-- 이쪽에 contents 영역 제작 부탁드립니다 -->
	<!-- 따로 제작이 편하시면 다른 형식으로 새로 작업하셔도 됩니다^^. -->
	
	<!-- 참고 사이트 (헤더, 메인슬라이더, 푸터) : http://www.newbird.co.kr/index.html -->
	<!-- 참고 사이트 (메인 컨텐츠) : https://www.jobda.im/ -->

	<!-- 감사합니다 -->
<!-- <link rel="stylesheet" href="/wp-content/uploads/elementor/css/custom-frontend-lite.min.css"> -->
<div id="contents-2">
	<section class="c_portfolio c_contents sub">
			<div class="">
				<div class="c_title">
					<!-- <p class="ct_e">
						<span><mark>Passion leads to design, Design leads to performance,</mark></span><br />
						<span><mark>Performance leads to success!</mark></span>
					</p> -->
					<!-- <p class="ct_k">
						<span>성공적인 프로젝트를 약속합니다!</span>
					</p> -->
					<!-- <h2 class="ct_m">interactive</h2> -->
				</div>
				<div id="page" class="c_wrap">
					<!-- <div class="tab div5"> -->
						<!-- <ul> -->
							<!-- <li><a href="#!" id="a_local" onClick="chg_portfolio('local')" class="cp_a on">로컬 컨텐츠</a></li>
							<li><a href="#!" id="a_oneday" onClick="chg_portfolio('oneday')" class="cp_a">원데이 클래스</a></li> -->
							<!-- <li><a href="#!" id="a_shoppingmall" onClick="chg_portfolio('shoppingmall')" class="cp_a">SHOPPING MALL</a></li>
							<li><a href="#!" id="a_app" onClick="chg_portfolio('app')" class="cp_a">APP</a></li>
							<li><a href="#!" id="a_crm" onClick="chg_portfolio('crm')" class="cp_a">CRM/ERP</a></li> -->
						<!-- </ul> -->
					<!-- </div> -->
					<div class="cp_list" id="box_local" style="display:block">
					<div class="contents-header">
						<div class="title-n-menu sub">
							<div class="title">
								<!-- <span>HOT</span> -->
								<span class="image"><img src="/wp-content/themes/hub/assets/img/logotitle.png"></span>
								<span>플레이</span>
							</div>
							<div class="menu sub">
								<button class="menu-item">전체</button>
							</div>
						</div>
						<div class="card-list">
							<?php
							 	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
								$args = array( 'category' => 61, 'post_type' =>  'post'); 
								$postslist = get_posts( $args );    
								foreach ($postslist as $post) :  setup_postdata($post); 
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
								<!-- <li>
									<div class="cpl_wrap">
										<div class="cpl_info">
											<div class="cpli_title">
												<strong><?php the_title(); ?></strong>
												<span></span>
											</div>
											<ul>
												<li>
													<strong><mark>TYPE</mark></strong>
													<span><?php echo get_post_meta( get_the_ID(), 'post-link-url', true);?></span>
												</li>
												<li>
													<strong><mark>DETAILS</mark></strong>
													<span><?php echo get_post_meta( get_the_ID(), 'post-quote-url', true); ?></span>
												</li>
												<li>
													<strong><mark>URL</mark></strong>
													<span><a href="<?php echo get_post_meta( get_the_ID(), 'post-video-url', true);?>" target="_blank"><?php echo get_post_meta( get_the_ID(), 'post-video-url', true);?></a></span>
												</li>
											</ul>
										</div>
										<div class="cpl_pic" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) ?>');">
											<div class="cplp_info">
												<a href="<?php the_permalink(); ?>"><span class="blind">MORE</span></a>
												<strong>VIEW</strong>
											</div>
										</div>
									</div>
								</li>   -->
							<?php endforeach; ?>
							1111
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
<script>
	$("#box_all").show();
	function chg_portfolio(idx){
		$(".cp_list").hide();
		$(".cp_a").removeClass("on");
		$("#a_"+idx).addClass("on");
		$("#box_"+idx).show();
	}
</script>
<?php
get_footer();