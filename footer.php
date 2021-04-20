</main>
<div id="footer">
  <div id="ft_group" class="none">
    <div class="contact_gr clearfix">
      <div class="box ft_contact_tel left_col">
        <p><a href="tel:0337016930" onclick="ga('send','event','tel','click','sp_footer_phone');"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/tel_B.png" width="100%" alt="tel" /></a></p>
      </div>
      <div class="box ft_contact_map left_col">
        <p><a href="https://goo.gl/maps/fwAttTrjyUk" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_B.png" width="100%" alt="" /></a></p>
      </div>
      <div class="box up right_col">
        <p><a href="#header"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/up.png" width="100%" alt="up" /></a></p>
      </div>
    </div>

  </div>
  <p id="f_logo"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/f_logo.png" width="170" height="139" alt="フランス料理　aBee" /></p>
  <address>
    <img src="<?php echo get_template_directory_uri(); ?>/shared/img/address.png" width="60" height="22" alt=" &copy; aBee" />
  </address>
</div>
</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/shared/js/common.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/shared/js/sp_nav.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/shared/js/instagram.min.js"></script>
<script>
  var userFeed = new Instafeed({
    get: 'user',
    userId: 1708817873,
    accessToken: '1708817873.cc30f62.c6e084f6d5b047b8958f053a5cd4e76d',
    limit: 10,
    resolution: 'low_resolution',
    sortBy: "random",
    template: '<li><a href="{{link}}"><img src="{{image}}" width="200" height="200" alt=""></a></li>',
  });
  userFeed.run();
</script>


<script type="text/javascript">
  $(function() {
    var slider = $('#slider_img').bxSlider({
      auto: true,
      pause: 4000,
      speed: 1000,
      mode: 'fade',
      controls: false
    });
  });

  $(function() {
    var slider = $('.photo_eff').bxSlider({
      auto: true,
      pause: 4000,
      speed: 1000,
      mode: 'horizontal',
      controls: true
    });
  });
  $(function() {
    var slider = $('.about_eff').bxSlider({
      auto: true,
      pause: 4000,
      speed: 1000,
      slideWidth: 1000,
      mode: 'horizontal',
      controls: true
    });
  });




  $(window).load(function() {
    $('#tab_content .tab').hide();
    $('#tab_content .tab:first').show();

    $('#tab_navi li').click(function() {

      $('#tab_navi li span').removeClass("active");
      $(this).find('span').addClass("active");
      // $('#tab_content .tab').hide();

      $('#tab_content .tab ul').addClass("reactive");
      $('#tab_content .tab').fadeOut(500);



      var indexer = $(this).index(); //gets the current index of (this) which is #nav li
      $('#tab_content .tab ul:eq(' + indexer + ')').removeClass("reactive");
      $('#tab_content .tab:eq(' + indexer + ')').fadeIn(500); //uses whatever index the link has to open the corresponding box 
    });
  });
</script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    //navi fix scroll

    $("#fixNav_wrap").hide();
    $(window).scroll(function() {
      if ($(this).scrollTop() > 300) {
        $('#fixNav_wrap').fadeIn(500);
      } else {
        $('#fixNav_wrap').fadeOut(500);
      }


    });




    $(function() {

      var set = 300; //ウインドウ上部からどれぐらいの位置で変化させるか

      var boxTop = new Array;
      var current = -1;

      //各要素の位置
      $('.sec_box').each(function(i) {
        boxTop[i] = $(this).offset().top;
      });

      //最初の要素にclass="on"をつける
      changeBox(0);

      //スクロールした時の処理
      $(window).scroll(function() {
        scrollPosition = $(window).scrollTop();
        for (var i = boxTop.length - 1; i >= 0; i--) {
          if ($(window).scrollTop() > boxTop[i] - set) {
            changeBox(i);
            break;
          }
        };
      });

      //ナビの処理
      function changeBox(secNum) {
        if (secNum != current) {

          current = secNum;
          secNum2 = secNum + 1; //HTML順序用

          $('#fixNav li a').removeClass('current');
          $('#fixNav li a:nth-child(' + secNum2 + ')').addClass('current');
          $('#fixNav_wrap span').stop().animate({
            width: $('#fixNav li:nth-child(' + secNum2 + ')').outerWidth(),
            left: $('#fixNav li:nth-child(' + secNum2 + ')').position().left
          }, 1500);

        }
      };



    });


    //navi fix hover


    $('#fixNav_wrap span').css({
      width: $('#fixNav_wrap .current').outerWidth(),
      left: $('#fixNav_wrap .current').position().left
    });


    $('#fixNav a').mouseover(function() {
      $('#fixNav_wrap span').stop().animate({
        width: $(this).outerWidth(),
        left: $(this).position().left
      }, 1000);
    });


  });
</script>




<script type="text/javascript">
  $(function() {
    var ua = navigator.userAgent;
    if (ua.indexOf('iPhone') < 0 && ua.indexOf('Android') < 0) {
      $('.telhref').contents().unwrap();
    }
  });




  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "http://connect.facebook.net/ja_JP/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<?php wp_footer(); ?>
</body>

</html>