/* 높이 계산 */
function funLoad(){
	var Cheight = $(window).height();
	$('.height').css({'height':Cheight+'px'});
}
window.onload = funLoad;
window.onresize = funLoad;
$(window).scroll(function() {
	var scTop = $(window).scrollTop();
	head_nav(scTop);
});


/* 높이 변화 */
function head_nav(scTop) {
	if (scTop > 9) {
		$('#wrap').removeClass('off');
		$('#wrap').addClass('off')
	} else {
		$('#wrap').removeClass('off');
	}
	
	if (scTop > 250) {
		$('#contents').removeClass('navifixed');
		$('#contents').addClass('navifixed')
	} else {
		$('#contents').removeClass('navifixed');
	}
}


/* 메뉴 토글 */
(function ($, window, document) {
	// 메뉴 토글
	$('.hg_btn').click(function (){
		$('.h_gnb').stop().toggleClass('on');
		$('.h_logo').stop().toggleClass('on');
	});
}($, window, document));


/* 슬라이드 */
$(".civ_slide").owlCarousel({
	items: 1,
	loop: true,
	nav: true,
	center: true,
	callbacks: true,
	autoplay:false,
	autoplayTimeout:5000,
	autoplayHoverPause:false
});
$(".cp_slide").owlCarousel({
	items:10,
	loop:true,
	autoplay:true,
	autoplayTimeout:2000,
	autoplayHoverPause:false,
	URLhashListener: true
});
$(".csi_contents").owlCarousel({
	items: 1,
	loop: true,
	nav: true,
	center: true,
	callbacks: true,
	URLhashListener:true,
	autoplay:false,
	startPosition: 'URLHash'
});


/* 스크롤 */
/* $(".scroll").click(function(event){
	event.preventDefault();
	$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
}); */
$(document).ready(function(){
	$('a[href^=#]').click(function() {
		var speed = 400;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});
});


/* 카운터 */
$('.counter').each(function () {
	$(this).prop({
		Counter : 0
	}).animate({
		Counter: $(this).text()
	}, {
		duration: 5000,
		easing: 'easeOutCubic',
		step: function (now) {
			$(this).text(Math.ceil(now));
		}
	});
});
/* 보일때 카운터 */
function countFunction(){
	$('.number_point .number').each(function () {
		$(this).prop({
			Counter : 0
		}).animate({
			Counter: $(this).text()
		}, {
			duration: 3500,
			easing: 'easeOutCubic',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});
};
$('.number_point').appear();
$('.number_point').one('appear', function() {
	countFunction();
});


/* 레이어팝업 */
$(window).on('hashchange', function(){
	var className = "popup";
	
	var classUrl = location.href.split("#")[1];
	if (classUrl == "!") {
		$("." + className).removeClass("on");
	} else {
		$("." + classUrl).addClass("on");
	}
});
$(document).ready(function() {
	var classUrl = location.href.split("#")[1];
	$("." + classUrl).addClass("on");
});

/* 검색창 */ 
document.querySelector('.ico_close').addEventListener('click', function(){
	document.querySelector('.search_layer').style.display = 'none';
  document.querySelector('.area_search').style.transform = 'translateY(-200px)';
  document.querySelector('.area_search').style.opacity = '0';
  document.querySelector('.inner_layer').style.opacity = '0';
	document.querySelector('.inner_layer').style.transform = 'translateY(0)';
	document.querySelector('#contents').style.transform = 'translateY(0)';
	$('body').removeClass('open_search');
});

document.querySelector('.area_util .btn_search').addEventListener('click', function(){
	$("html, body").animate({ scrollTop: 0 }, "slow");
	$('body').addClass('open_search');
	document.querySelector('#contents').style.transform = 'translateY(300px)';
	document.querySelector('.search_layer').style.display = 'block';
  document.querySelector('.inner_layer').style.opacity = '1';
	document.querySelector('.area_search').style.opacity = '1';
	document.querySelector('.inner_layer').style.transform = 'translateY(100px)';
	document.querySelector('.area_search').style.transform = 'translateY(100px)';
});

document.getElementById('search_form').addEventListener('submit', function(e){
	e.preventDefault();
	window.location.href = '/?s=' + $('#inpSearch').val();
});