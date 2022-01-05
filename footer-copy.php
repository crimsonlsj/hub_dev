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
		</main>
<?php if(is_front_page()) { ?>
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
		<footer class="main-footer site-footer footer" id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
			<div data-elementor-type="wp-post" data-elementor-id="547" class="elementor elementor-547" data-elementor-settings="[]">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-518ab29 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="518ab29" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fc25ca6" data-id="fc25ca6" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-50b85cd elementor-widget elementor-widget-ld_fancy_image" data-id="50b85cd" data-element_type="widget" data-widget_type="ld_fancy_image.default">
				<div class="elementor-widget-container">
			
			<div id="" class="lqd-imggrp-single">
				
				<div class="lqd-imggrp-img-container">
					
							
										<figure><img src="https://architecturehub.liquid-themes.com/elementor/wp-content/uploads/2021/08/img-1@2x-11.jpg" title="" alt=""></figure>
																				
				</div>
			</div>

				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-4412e71 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="4412e71" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f2ef009" data-id="f2ef009" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section data-section-luminosity="dark" class="elementor-section elementor-inner-section elementor-element elementor-element-0917a70 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="0917a70" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-df0add6" data-id="df0add6" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-2619476 elementor-widget elementor-widget-image" data-id="2619476" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img src="/wp-content/uploads/2021/11/gonstar_logo.png" title="" alt="" width="280px">															</div>
				</div>
				<div class="elementor-element elementor-element-bfc26c8 elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-widget elementor-widget-hub_fancy_heading" data-id="bfc26c8" data-element_type="widget" data-widget_type="hub_fancy_heading.default">
				<div class="elementor-widget-container">
			
		<div id="ld-fancy-heading-616ca60adc7b1" class="ld-fancy-heading">
			<h2 class="ld-fh-element elementor-heading-title lqd-highlight-underline lqd-highlight-grow-left h4"> Let's Build Something Great Together</h2>		</div>

				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section data-section-luminosity="dark" class="elementor-section elementor-inner-section elementor-element elementor-element-0fbcc16 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="0fbcc16" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-d51cf02" data-id="d51cf02" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-723f0e0 elementor-widget elementor-widget-hub_fancy_heading" data-id="723f0e0" data-element_type="widget" data-widget_type="hub_fancy_heading.default">
				<div class="elementor-widget-container">
			
		<div id="ld-fancy-heading-616ca60ae0fab" class="ld-fancy-heading">
			<p class="ld-fh-element lqd-highlight-underline lqd-highlight-grow-left p"> 충남 공주시 공주대학로 56 산학연구관</p>		</div>

				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-28ae1a5" data-id="28ae1a5" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-ff8e608 elementor-widget elementor-widget-hub_fancy_heading" data-id="ff8e608" data-element_type="widget" data-widget_type="hub_fancy_heading.default">
				<div class="elementor-widget-container">
			
		<div id="ld-fancy-heading-616ca60ae2be1" class="ld-fancy-heading">
			<p class="ld-fh-element lqd-highlight-underline lqd-highlight-grow-left p"> makedesign0724@gmail.com </p>		</div>

				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-32cd804" data-id="32cd804" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-a645df9 elementor-widget elementor-widget-hub_fancy_heading" data-id="a645df9" data-element_type="widget" data-widget_type="hub_fancy_heading.default">
				<div class="elementor-widget-container">
			
		<div id="ld-fancy-heading-616ca60ae49b1" class="ld-fancy-heading">
			<!-- <p class="ld-fh-element lqd-highlight-underline lqd-highlight-grow-left p">공스타 서비스는 공주 소상공인들의 적극적인 참여와 소통으로 이루어집니다.</p>		</div> -->

				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section data-section-luminosity="dark" class="elementor-section elementor-inner-section elementor-element elementor-element-1a511eb elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="1a511eb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bdaf451" data-id="bdaf451" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-36ab190 elementor-widget elementor-widget-ld_custom_menu" data-id="36ab190" data-element_type="widget" data-widget_type="ld_custom_menu.default">
				<div class="elementor-widget-container">
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-46dde82" data-id="46dde82" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-e0594a6 elementor-widget elementor-widget-ld_custom_menu" data-id="e0594a6" data-element_type="widget" data-widget_type="ld_custom_menu.default">
				<div class="elementor-widget-container">
			
			<div class="lqd-fancy-menu lqd-custom-menu right lqd-menu-td-none">
			
							<ul class="reset-ul inline-nav" id="e0594a6">
				
						<li>
							<a href="#"> 

																	<span class="link-icon left-icon icon-next-to-label"></span>	
								
								HOME  
															</a>
													</li>

						
						<li>
							<a href="#"> 

																	<span class="link-icon left-icon icon-next-to-label"></span>	
								
								공스타 소개  
															</a>
													</li>

						
						<li>
							<a href="#"> 

																	<span class="link-icon left-icon icon-next-to-label"></span>	
								
								콘텐츠  
															</a>
													</li>
													<li>
							<a href="#"> 

																	<span class="link-icon left-icon icon-next-to-label"></span>	
								
								플레이  
															</a>
													</li>
													<li>
							<a href="#"> 

																	<span class="link-icon left-icon icon-next-to-label"></span>	
								
								네트워크  
															</a>
													</li>													
										</ul>
						</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
						</div>
					</div>
		</footer>
		<?
		liquid_action( 'after_footer' );
		?>

	</div>

	<?php liquid_action( 'after' ) ?>

	<script src="/wp-content/themes/hub/js/lib.js"></script>
	<?php wp_footer(); ?>

</body>
</html>


<style type="text/css">
		footer {
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
			bottom: 100px
		}

		@media (max-width: 800px) {
			#footer .f_wrap {
				padding: 14px 12px;
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
						<div style="margin-bottom: 10px;">대표자 송국진 | 사업자번호 1234-234-212342</div>
						<div>주소  충청남도 공주시 메이크로 123 19, 공주대학교 2층 (공주동)</div>
					</div>
					<div class="email">대표메일 gongstar@naver.com</div>
				</div>
				<div class="copyright">
					© 2021  GONGSTAR ALL rights reserved
				</div>
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
			&copy; 2021 <strong>공스타</strong>
		</div>
	</footer>
	<!-- Footer E -->