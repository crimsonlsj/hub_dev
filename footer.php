<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the main containers
 *
 * @package Hub theme
 */
?>

			<?php liquid_action( 'after_content' ); ?>
			</div>
			<?php liquid_action( 'after_contents_wrap' ); ?>
			<div class="introduce_bg"></div>
		</main>
<link rel="stylesheet" href="/wp-content/themes/hub/css/commons.css" />		
<?php if(false) { ?>
<div class="elementor-section-wrap">
	<section class="full-width elementor-section-full_width elementor-element">
		<div class="responsive">
			<img src="/wp-content/uploads/2021/10/mck_6168d4c615612-scaled-1.jpeg">
			<img src="/wp-content/uploads/2021/10/mck_616cf8aadf8f5-scaled-1.jpeg">
			<img src="/wp-content/uploads/2021/10/mck_616cf89f561c1-scaled-1.jpeg">
			<img src="/wp-content/uploads/2021/10/mck_6168d4c615612-scaled-1.jpeg">
			<img src="/wp-content/uploads/2021/10/mck_616cf8aadf8f5-scaled-1.jpeg">
			<img src="/wp-content/uploads/2021/10/mck_616cf89f561c1-scaled-1.jpeg">	
		</div>
	</section>
</div>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
	$('.responsive').slick({
  dots: false,
  infinite: true,
	autoplay: true,
  speed: 300,
	arrows: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
				dots: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
				dots: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>
<?php } ?>
		<?php
		liquid_action( 'before_footer' );
		liquid_action( 'footer' );
		?>
		<style type="text/css">
		#footer {
			background-color: #111427;
		}
		#footer .f_wrap {
			padding: 25px 20px;
			margin: 0 -20px;
			font-size: 12px;
			color: #a7acb3;
		}
		#footer .f_wrap .f_info {
			display: grid;
			grid-template-columns: 140px auto auto;
			gap: 32px;
			align-items: end;
			justify-content: left;
			padding-bottom: 23px;
			border-bottom: 1px solid rgba(255, 255, 255, 0.5);
		}
		#footer .f_wrap .f_info > img.logo {
			width: 100%;
			max-width: 100%;
		}
		#footer .f_wrap .f_info .company-info {
			text-align: left;
		}
		#footer .f_wrap .copyright {
			margin-top: 13px;
		}
		#footer .f_copyright,
		#footer .f_download {
			bottom: 100px;
			z-index: 99;
		}

		@media (max-width: 800px) {
			#footer .f_wrap {
				padding: 14px 22px;
				margin: 0;
			}
			#footer .f_wrap .f_info {
				gap: 12px;
				justify-content: stretch;
				border-bottom: none;
				padding-bottom: 15px;
			}
			#footer .f_wrap .f_info .company-info {
				grid-column-end: span 3;
			    order: 1;
				padding-top: 12px;
				border-top: 1px solid rgba(255, 255, 255, 0.5);
			}
			#footer .f_wrap .f_info .email {
				grid-column-end: span 2;
				align-self: center;
				justify-self: end;
			}
		}
		@media (max-width: 560px) {
			#footer .f_wrap .f_info {
				grid-template-columns: 66px auto auto;
			}
		}
	</style>
	<!-- Footer S -->
	<footer id="footer">
		<div class="wrap">
			<!-- <div class="f_title">
				!-- <p class="ft_e">
					<span><mark>The most important step is understanding and</mark></span><br />
					<span><mark>Empathizing with project.</mark></span>
				</p>
				<p class="ft_k">
					<span>공스타는 e비즈니스 마케팅 에이전시입니다.</span>
				</p>
				<h2 class="ft_m"></h2> --
			</div> -->
			<div class="f_wrap box">
				<div class="f_info">
					<img src="/wp-content/themes/hub/images/new/logo-2.png" class="logo"/>
					<div class="company-info">
						<div style="margin-bottom: 10px;">대표자 송유진 | 사업자번호 821-86-02205</div>
						<div>주소 공주시 공주대학로 56 산학연구관 510호</div>
					</div>
					<div class="email">대표메일 gongstar2021@gmail.com</div>
				</div>
				<div class="copyright">
					© <span id="year">2021</span>  GONGSTAR ALL rights reserved
				</div>
				<script>
					document.querySelector("#year").innerText = new Date().getFullYear();
				</script>
				<!-- <div class="f_info">
					<ul>
						<li>
							<strong>COMPANY</strong>
							<span class="cm">(주)공스타</span>
						</li>
						<li class="fi_address">
							<strong>ADDRESS</strong>
							<span>서울특별시 마포구 양화로10길 19, 상록빌딩 2층 202호</span>
						</li>
						<li>
							<strong>BUSINESS LICENSE</strong>
							<span>332-81-00662</span>
						</li>
						<li>
							<strong>TEL</strong>
							<span><a href="tel:0264044224">02-6404-4224</a></span>
						</li>
						<li>
							<strong>E-MAIL</strong>
							<span><a href="mailto:info@.co.kr">info@.co.kr</a></span>
						</li>
					</ul>
				</div> -->
				<!-- <div class="f_btn">
					<ul>
						<li><a href="contact/index.html" class="btn big t2 arrow">REQEUST</a></li>
						<li><a href="#location" class="btn big arrow">LOCATION</a></li>
					</ul>
				</div> -->
			</div>
		</div>
		<hr />
		<!-- <div class="f_download">
			<a href="#!"><span><strong>COMPANY</strong> BROCHURE</span><i></i></a>
		</div> -->
		<hr />
		<div class="f_copyright">
			&copy; 2022 <strong>공스타</strong>
		</div>
	</footer>
	<!-- Footer E -->
		<?
		liquid_action( 'after_footer' );
		?>

	</div>

	<?php liquid_action( 'after' ) ?>
	
	<script src="/wp-content/themes/hub/js/lib.js"></script>
	
	<?php wp_footer(); ?>

</body>
</html>
