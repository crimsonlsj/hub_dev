<?php
/**
 * The template for displaying the header
 *
 * @package Hub theme
 */

?><!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
<head <?php liquid_helper()->attr( 'head' ); ?>>

	<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="/wp-content/themes/hub/css/init.css" />
	<link rel="stylesheet" href="/wp-content/themes/hub/css/common.css" />
	<link rel="stylesheet" href="/wp-content/themes/hub/css/layout.css" />
	<!-- <link rel="stylesheet" href="/wp-content/themes/hub/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="/wp-content/themes/hub/css/owl.theme.default.css" /> -->
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
	<script src="/wp-content/themes/hub/js/html5.js"></script>
	<script src="/wp-content/themes/hub/js/jquery-1.11.0.min.js"></script>
	<script src="/wp-content/themes/hub/js/owl.carousel.min.js"></script>
	<script src="/wp-content/themes/hub/js/jquery.easing.1.3.min.js"></script>
	<script src="/wp-content/themes/hub/js/jquery.appear.js"></script>
	<style>
		#lqd-contents-wrap {padding-left:0; padding-right: 0;}
	</style>
</head>

<body <?php body_class(); ?> <?php liquid_helper()->attr( 'body' ); ?>>
	
	<?php
		if (function_exists('wp_body_open')) {
			wp_body_open();
		}
	?>

	<?php liquid_action( 'before' ) ?>

	<div id="wrap">

		<?php
			liquid_action( 'before_header' );
			// liquid_action( 'header' );
			liquid_action( 'after_header' );
		?>
		<?php if(false) { ?>
		<section id="main_image_bg"></section>
		<?php } ?>
		<main <?php liquid_helper()->attr( 'content' ); ?>>

			<?php liquid_action( 'before_contents_wrap' ); ?>

			<div <?php liquid_helper()->attr( 'contents_wrap' ); ?>>

			<?php liquid_action( 'before_content' ); ?>

			<header id="header">
			<div class="h_logo">
				<a href="/" title="Go to Home">
					<img src="/wp-content/uploads/2021/11/gonstar_logo.png" alt="공스타 로고" />
					<h1 class="blind">GONG STAR</h1>
				</a>
			</div>
			<hr />
			<nav class="h_gnb">
				<h2 class="blind">GNB</h2>
				<i class="hg_icon"></i>
				<button type="button" class="hg_btn"><span class="blind">Menu Button</span></button>
				<div class="hg_wrap">
				<?php
						$link = $_SERVER['REQUEST_URI'];
						$link_array = explode('/',$link);
						$pagel = $link_array[count($link_array)-1];
				?>
					<ul>
						<li>
							<a href="/" class="<?php echo $pagel == "" ? "on" : "";?>"><span>HOME</span></a>
						</li>
						<li>
							<a href="/introduce" class="<?php echo $pagel == "introduce" ? "on" : "";?>"><span>공스타 소개</span></a>
						</li>
						<li>
							<a href="/category/interactive" class="<?php echo $pagel == "interactive" ? "on" : "";?>"><span>콘텐츠</span></a>
						</li>
						<li>
							<a href="/category/active" class="<?php echo $pagel == "active" ? "on" : "";?>"><span>플레이</span></a>
						</li>
						<li>
							<a href="/category/network" class="<?php echo $pagel == "network" ? "on" : "";?>"><span>네트워크</span></a>
						</li>
						<li>
						<div class="area_util">
							<button data-v-9760bdba="" type="button" class="btn_search" style=""><span data-v-9760bdba="" class="screen_out">검색창 열기</span> <svg data-v-ae75f7f2="" data-v-9760bdba="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" class="ico_search"><g data-v-ae75f7f2="" fill="none" fill-rule="evenodd"><g data-v-ae75f7f2="" stroke-width="1.6"><g data-v-ae75f7f2="" transform="translate(-308 -16) translate(312 20)"><circle data-v-ae75f7f2="" cx="8.944" cy="8.944" r="8.944"></circle> <path data-v-ae75f7f2="" d="M14.987 14.987L21.017 21.017"></path></g></g></g></svg></button>
						</div>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<div class="search_layer">

    <div data-v-c8bf84c8="" class="inner_layer">
      <div data-v-c8bf84c8="" class="layer_head"><strong data-v-c8bf84c8=""><a data-v-c8bf84c8="" href="/"><span
              data-v-c8bf84c8="" class="screen_out">gongstar</span>
						</a></strong></div>
      <div data-v-c8bf84c8="" class="layer_body">
        <h2 data-v-c8bf84c8="" class="screen_out">검색</h2>
        <div data-v-c8bf84c8="" class="area_search">
          <div data-v-c8bf84c8="" class="group_search">
            <form data-v-c8bf84c8="" autocomplete="off" class="wrap_search" id="search_form"><svg data-v-4267c0f5="" data-v-c8bf84c8=""
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" class="ico_search_bold">
                <title data-v-4267c0f5="">검색</title>
                <g data-v-4267c0f5="" fill="none" fill-rule="evenodd">
                  <g data-v-4267c0f5="" transform="translate(-333 -214) translate(309 192) translate(24 22)">
                    <path data-v-4267c0f5="" d="M0 0H28V28H0z"></path>
                    <circle data-v-4267c0f5="" cx="12.944" cy="12.944" r="8.944" stroke-width="2.5" class="stroke">
                    </circle>
                    <path data-v-4267c0f5="" d="M18.987 18.987L25.017 25.017" stroke-width="2.5" class="stroke"></path>
                  </g>
                </g>
              </svg> <input data-v-c8bf84c8="" type="text" id="inpSearch" placeholder="무엇이 궁금하신가요?"> <label
                data-v-c8bf84c8="" for="inpSearch" class="screen_out">검색어</label></form>
            <div data-v-df070f3a="" data-v-c8bf84c8="" class="wrap_tag"><a data-v-df070f3a="" href="javascript;"
                class="link_tag">#공주</a><a data-v-df070f3a="" href="javascript;" class="link_tag">#행사</a><a
                data-v-df070f3a="" href="javascript;" class="link_tag">#원데이</a></div>
          </div>
          <!---->
        </div> <button data-v-c8bf84c8="" type="button" class="btn_close"><span data-v-c8bf84c8="" class="screen_out">검색창
            닫기</span> <svg data-v-7171d635="" data-v-c8bf84c8="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"
            class="ico_close">
            <g data-v-7171d635="" fill="none" fill-rule="evenodd" stroke-linecap="square">
              <g data-v-7171d635="" stroke-width="1.6">
                <path data-v-7171d635="" d="M0 0.5L16.5 17.5"
                  transform="translate(-547 -167) translate(187 145) translate(360 22) translate(6 5)"></path>
                <path data-v-7171d635="" d="M0 0.5L16.5 17.5"
                  transform="translate(-547 -167) translate(187 145) translate(360 22) translate(6 5) matrix(-1 0 0 1 17 0)">
                </path>
              </g>
            </g>
          </svg></button>
      </div>
    </div>
  </div>