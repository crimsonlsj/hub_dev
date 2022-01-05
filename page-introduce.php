<?php
/**
 * The template for displaying pages
 *
 * @package Hub theme
 */

get_header();
?>
<style>
  .introduce_bg {
    position: absolute;
    height: 500px;
    background-color: #f9e032;
    width: 100%;
    bottom: 0;
  }
  section.c_about #page {margin-bottom: 150px; border-radius: 20px;}
</style>
<!-- Contents S -->
<div id="contents">
  <section class="c_about">
    <div class="wrap">
      <style>
        .Play-Archive {
          display: inline-block;
          /* width: 513px; */
          padding: 0 0 80px;
          margin: 0;
          font-family: Montserrat;
          font-size: 4rem;
          font-weight: 700;
          text-align: center;
          font-stretch: normal;
          font-style: normal;
          line-height: 2.12;
          letter-spacing: normal;
          color: #1d1d1d;
        }
        .title_wrapper {
          display: inline-block;
          width: 100%;
          text-align: left;
        }
        .intorduce_footer_txt .center {display: inline-block; width:100%; text-align: center;}
      </style>
      <div class="introduce_logo">
        <img src="/wp-content/themes/hub/assets/img/gongstar_v_logo.png" alt="공스타 로고">
      </div>
      <span class="Play-Archive">
        Play Archive
      </span>
      <div id="page" class="c_wrap box">
        <div class="title_wrapper"><h3 class="fl title bold deco s1"><mark>Startups Archive Gongju</mark></h3></div>
        <div class="ca_txt text left">
          <p class="big light s1">
          매일 많은 콘텐츠들이 만들어지고 사라집니다.<br>
공스타는 지역의 콘텐츠를 지키(SAVE)고<br>
도시를 새롭게 아카이브합니다.
          </p>
        </div>
        <div class="ca_pic"></div>
        <div class="ca_overview">
          <h3 class="fl title bold deco s1"><mark>MISSION</mark></h3>
          <ul class="text middle left cb">
            <li>
              <strong class="bold ck s1"><span>Save</span></strong>
              <p>지역의 콘텐츠는 지역 주민들이 만들어왔습니다. 그들의 콘텐츠가 시간의 
흐름속에 사라지지 않도록 저장하고 정리하여 새로운 메타버스를 만들어냅니다.
</p>
            </li>
            <li>
              <strong class="bold ck s1"><span>Local</span></strong>
              <p>지역에서 다양한 놀이와 체험활동, 문화교육, 모임 등을 손 쉽게 찾아볼 수 있도록 정리합니다.
</p>
            </li>
            <li>
              <strong class="bold ck s1"><span>Archive</span></strong>
              <p>지역의 따듯한 일상과 유익한 정보들,
콘텐츠와 수 많은 사람들 모두 이곳에서 볼 수 있습니다.
</p>
            </li>
          </ul>
        </div>
        <div class="ca_vision">
          <ul>
            <li><p><span class="t">상호작용</span><br>오프라인을 온라인으로
리디자인 합니다. 그리하여
인터렉티브한 도시재생을
실현합니다.</p></li>
            <li><p><span class="t">지속가능</span><br>지역에서 활동하는 기업들이
모여 각자의 역할을 통해
끊임없이 콘텐츠를 수집하고
만들어갑니다.</p></li>
            <li><p><span class="t">네트워크</span><br>공주의 다양한 기업들과
컨소시움하여 아카이브하고, 
프로젝트를 통해
새로운 콘텐츠를 만들어갑니다.</p></li>
          </ul>
        </div>
        <div class="intorduce_footer_txt">
          <div class="intorduce_footer_txt_t">
          공스타가 새롭게 만든 도시를<br>누리는 주인공이 되어주세요
          </div>
          <div class="b"><h3 class="fl title bold deco s1"><mark>GONG STAR!</mark></h3></div>
        </div>
      </div>
    </div>
    <div class="c_bg"></div>
  </section>
</div>
<!-- Contents E -->
<!-- -->
<div class="fusion-sep-clear"></div>
<div class="c_bg2"></div>
<?php
get_footer();
