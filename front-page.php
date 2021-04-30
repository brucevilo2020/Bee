<?php get_header(); ?>

<section class="news_section">
    <?php
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'paged' => $paged,
    );

    $the_query = new WP_Query($args);
    ?>

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="con">
                <a href="<?php echo get_permalink(get_page_by_path('News')) ?>">
                    <div class="container">
                        <div class="date"><?php echo get_the_date('Y-m-d'); ?></div>
                        <div class="desc"><?php echo the_title(); ?></div>
                        <div class="more">More</div>
                    </div>
                </a>
            </div>
            <hr>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<div id="container">
    <div id="lead" class="content clearfix sec_box">
        <!--		<p class="oshirase">
			<span>－ 2020年、おせちの予約開始しました。
 －</span><br />
		 	詳細・お申し込みはお電話にて承ります。

		</p>-->

        <p class="pc">
            尾山台のカウンターフレンチ 「a Bee アベー」では、ランチ・ディナーともにコースにてご提供し、<br />
            ゆったり流れる時間の中でお楽しみいただけます。<br />
            食材はオーナーシェフの地元、鳥取県の野菜や境港直送の鮮魚など、旬のものを使用し、<br />
            味だけでなく見た目にも四季を感じさせる美しい盛り付けで、<br />
            季節によって見せるお料理の顔や味をご提供させていただきます。<br />
            普段の食事、デート、記念日、クリスマスディナーなどにご利用ください。<br />
        </p>
        <p class="sp">
            尾山台のカウンターフレンチ 「a Bee アベー」では、
            ランチ・ディナーともにコースにてご提供し、
            ゆったり流れる時間の中でお楽しみいただけます。
            食材はオーナーシェフの地元、鳥取県の野菜や境港直送の鮮魚など、
            旬のものを使用し、

            味だけでなく見た目にも四季を感じさせる美しい盛り付けで、
            季節によって見せるお料理の顔や味をご提供させていただきます。
            普段の食事、デート、記念日、クリスマスディナーなどにご利用ください。
        </p>
        <p>旬の食材を使ったメニューやワインの紹介、<br />
            お料理教室やコラボレーション企画などの最新情報はこちらをご覧ください。<br />
        </p>
        <p class="bnr"><a href="#facebook"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/fb_btn.png" width="51" height="51" alt=" Facebook" class="over" /></a></p>
        
    </div>

    <!--  #lead -->

    <div id="about" class="sec_box">
        <div class="lead content">
            <h2 class="pc"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_h2.png" width="380" height="55" alt="ABOUT" /></h2>
            <h2 class="sp"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/sp/about_h2.png" width="262px" height="auto" alt="ABOUT" /></h2>
            <p class="pc">ベルギー、フランスでは<br />
                料理の腕を磨くとともに、現地で食材が出来るまでの過程も体験しました。<br />
                水や土、育て方ひとつで変わる、素材の味。<br />
                食材へのこだわりだけでなく、日本にはない、<br />
                料理への「追求の形」を目の当たりにすることができました。</p>

            <p class="pc">培ってきた経験を生かし、静岡県の契約農家で栽培された旬の食材や境港直送の鮮魚など、<br />
                厳選した美味しい食材を使用しております。<br />
                体に馴染むような自分らしいフランス料理をご提供させていただきます。</p>
            
             <p class="sp">ベルギー、
                フランスでは料理の腕を磨くとともに、
                現地で食材が出来るまでの過程も体験しました水や土、
                育て方ひとつで変わる、素材の味。
                食材へのこだわりだけでなく、日本にはない、
                料理への「追求の形」を目の当たりにすることができました。</p>

            <p class="sp">培ってきた経験を生かし、
                静岡県の契約農家で栽培された旬の食材や境港直送の鮮魚など
                厳選した美味しい食材を使用しております。
                体に馴染むような自分らしいフランス料理をご提供させていただきます。</p>

        </div>
        <div class="menu_contents sec_bg" id="slide_panel">
            <div id="sec1" class="m_menu1 panel content">
                <div class="x_close"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/close.png" width="49" height="67" alt="close" /></div>
                <h3><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_h3_1.png" width="380" height="66" alt="ベルギーでの経験" /></h3>
                <p class="txt">グルメの街、デュルビュイのホテル「ル・サングリエ・デ・ザルデンヌ」。<br />
                    過去に皇太子ご夫妻も宿泊された、有名なホテルのレストランで経験を積み、<br />
                    本格フレンチを学ぶ。</p>
                <p class="photo1"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo1.jpg" width="370" height="255" alt="お店周辺" /></p>
                <p class="photo2"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo2.jpg" width="406" height="305" alt="スタッフ" /></p>
                <p class="photo3"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo3.jpg" width="371" height="255" alt="街並み" /></p>
                <p class="photo4"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo4.jpg" width="300" height="230" alt="料理" /></p>
            </div>

            <!--  #sec1 -->

            <div id="sec2" class="m_menu2 panel content">
                <div class="x_close"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/close.png" width="49" height="67" alt="close" /></div>
                <h3 class=><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_h3_2.png" width="380" height="66" alt="パリでの経験" /></h3>
                <p class="txt pc">街のレストラン「レストラン・ブール・ノワゼット」。<br />
                    美食の要素を残しながらも、季節の食材を現代的に仕上げる技を学び、<br />
                    前菜、メイン、デザートの全工程を経験したことで、<br />
                    オリジナルフレンチへと拍車が掛かる。</p>

                    <p class="txt sp">街のレストラン「レストラン・
                        ブール・ノワゼット」。
                    美食の要素を残しながらも、
                    季節の食材を現代的に仕上げる技を学び、
                    前菜、メイン、デザートの全工程を経験したことで、
                    オリジナルフレンチへと拍車が掛かる。</p>
                <p class="photo1"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo5.jpg" width="370" height="255" alt="風景" /></p>
                <p class="photo2"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo6.jpg" width="251" height="325" alt="風景2" /></p>
                <p class="photo3"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo7.jpg" width="371" height="255" alt="料理2" /></p>
                <p class="photo4"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo8.jpg" width="300" height="230" alt="食材" /></p>
            </div>

            <!--  #sec2 -->

            <div id="sec3" class="m_menu3 panel content">
                <div class="x_close"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/close.png" width="49" height="67" alt="close" /></div>
                <h3><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_h3_3.png" width="380" height="66" alt="アルザスでの経験" /></h3>
                <p class="txt">ビオのチーズ農家でヤギの放牧からチーズの製造までを経験。<br />
                    ワイナリーではぶどうの収穫、シャルキュトリーではハムやソーセージ、<br />
                    豚肉の加工を経験した。</p>
                <p class="photo1"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo9.jpg" width="370" height="255" alt="ファミリー" /></p>
                <p class="photo2"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo10.jpg" width="406" height="305" alt=" ソーセージ" /></p>
                <p class="photo3"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo11.jpg" width="371" height="255" alt="チーズ" /></p>
                <p class="photo4"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo12.jpg" width="300" height="230" alt="子ヤギ" /></p>
            </div>

            <!--  #sec3 -->

            <div id="sec4" class="m_menu4 panel content">
                <div class="x_close"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/close.png" width="49" height="67" alt="close" /></div>
                <h3><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_h3_4.png" width="380" height="66" alt="ローヌでの経験" /></h3>
                <p class="txt">ヤギのチーズ農家でチーズ作りの全工程を経験。<br />
                    レストラン「ラルエット」ではすべての工程を学び、<br />
                    当時一つ星の「オーベルジュドフォンローズ」では、お菓子作りを担当した。</p>
                <p class="photo1"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo13.jpg" width="370" height="255" alt="鴨" /></p>
                <p class="photo2"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo14.jpg" width="251" height="325" alt="チーズ" /></p>
                <p class="photo3"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo15.jpg" width="370" height="254" alt="テラス" /></p>
                <p class="photo4"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_photo16.jpg" width="300" height="230" alt="フォアグラ" /></p>
            </div>

            <!--  #sec4 -->

        </div>
        <div class="map content">
            <h3 class="pc"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/about_tit.png" width="380" height="40" alt="経験" /></h3>
            <h3 class="sp"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/sp/about_tit.png" width="800" height="auto" alt="経験" /></h3>
            <div class="info1 map-none">
                <p class="photo bnr1"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_photo1.jpg" width="283" height="248" alt="&quot;シェフ&quot;" class="over" /></p>
                <p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_tit1.png" width="283" height="35" alt="Belgique" /></p>
                <p class="txt">有名なホテルのレストランで、<br />
                    魚料理のシェフを主に担当し、経験を積んだ。</p>
            </div>
            <div class="info2 map-none">
                <p class="photo bnr2"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_photo2.jpg" width="283" height="248" alt="ぶどう" class="over" /></p>
                <p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_tit2.png" width="283" height="35" alt="Alsace" /></p>
                <p class="txt">ワイナリーやシャルキュトリーなどの<br />
                    専門店で働き、ぶどうの収穫や<br />
                    チーズ農家で飼育から製造工程まで学んだ。</p>
            </div>
            <div class="info3 map-none">
                <p class="photo bnr3"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_photo3.jpg" width="283" height="248" alt="店内" class="over" /></p>
                <p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_tit3.png" width="283" height="35" alt="Paris" /></p>
                <p class="txt">レストランで前菜やメイン、デザート全ての<br />
                    工程を経験し、シェフとしての腕を磨いた。</p>
            </div>
            <div class="info4 map-none">
                <p class="photo bnr4"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_photo4.jpg" width="283" height="248" alt="ヤギ" class="over" /></p>
                <p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_tit4.png" width="283" height="35" alt="Rhone-Alpes" /></p>
                <p class="txt">チーズ農家で知識を学び、<br />
                    2つのレストランで働いた後に<br />
                    フォアグラ農家でも経験を積んだ。</p>
            </div>
                <div class="map-con">
                <div class="shared_wrap">
                <ul class="about_eff">
                    <li>
                       
                            <p class="photo bnr1"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_photo1.jpg"  alt="&quot;シェフ&quot;" class="over" /></p>
                            <p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_tit1.png" width="100%"  height="auto" alt="Belgique" /></p>
                            <p class="txt">有名なホテルのレストランで、<br />
                                魚料理のシェフを主に担当し、経験を積んだ。</p>
                     
                    </li>
                    <li>
                     
                            <p class="photo bnr2"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_photo2.jpg"  alt="ぶどう" class="over" /></p>
                            <p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_tit2.png"  width="100%" height="auto" alt="Alsace" /></p>
                            <p class="txt">ワイナリーやシャルキュトリーなどの<br />
                                専門店で働き、ぶどうの収穫や<br />
                                チーズ農家で飼育から製造工程まで学んだ。</p>
                     
                    </li>
                    <li>
                        <p class="photo bnr3"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_photo3.jpg" alt="店内" class="over" /></p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_tit3.png" width="100%" height="auto" alt="Paris" /></p>
                        <p class="txt">レストランで前菜やメイン、デザート全ての<br />
                            工程を経験し、シェフとしての腕を磨いた。</p>
                    </li>
                    <li>
                        <p class="photo bnr4"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_photo4.jpg"  alt="ヤギ" class="over" /></p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/map_tit4.png" width="100%" height="auto" alt="Rhone-Alpes" /></p>
                        <p class="txt">チーズ農家で知識を学び、<br />
                            2つのレストランで働いた後に<br />
                            フォアグラ農家でも経験を積んだ。</p>
                    </li>
                </ul>
            </div>
                </div>
        </div>
    </div>
    <!--about -->

    <div id="lunch" class="content sec_box">
             <h2 class=" center pc"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/lunch_h2.png" width="140" height="35" alt="LUNCH" /></h2>
            <h2 class=" center sp"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/sp/lunch_h2.png" width="262px" height="auto" alt="LUNCH" /></h2>
        <div class="shared_wrap">
            <ul class="photo_eff">
                <li><img src="<?php echo get_template_directory_uri(); ?>/shared/img/lunh_photo1.jpg" width="100%" height="auto" alt="ランチ1" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/shared/img/lunh_photo2.jpg" width="100%" height="auto" alt="ランチ2" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/shared/img/lunh_photo3.jpg" width="100%" height="auto" alt="ランチ3" /></li>
                <li><img src="<?php echo get_template_directory_uri(); ?>/shared/img/lunh_photo4.jpg" width="100%" height="auto" alt="ランチ4" /></li>
            </ul>
        </div>
        <div class="info">
            <h3>ランチ　<span class="f_eng">4,950</span>円(税込)</h3>
            <h4>ランチメニュー</h4>
            <div class="menu_list">
                <p class="pl50">
                    前菜2種類<br />
                    季節のスープ<br />
                    メイン：肉or魚を選べます<br />
                    デザート<br />
                    コーヒー or 紅茶 or エスプレッソ
                </p>
            </div>
            <p class="attention mb10">
                2019年8月より、ディナーで好評のメニューを<br />
                「ショートコース」にてご提供させて頂きます。
            </p>
        </div>
        <div class="txt_note">
            <p class="center">※ランチはご予約で定員になり次第、終了させていただきます。</p>
        </div>

        <p class="center pc "><a href="#" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/lunch_bnr.jpg" width="390" height="40" alt="最新のランチメニュー" class="over" /></a></p>
        <p class="center sp"><a href="#" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/sp/lunch_bnr.png" width="600" height="auto" alt="最新のランチメニュー" class="over" /></a></p>
    </div>

    <!--  #lunch -->

    <div id="dinner" class="sec_bg sec_box">
        <div class="content clearfix">
            <h2 class="center pc"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/dinner_h2.png" width="140" height="35" alt="DINNER" /></h2>
            <h2 class="center sp"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/sp/dinner_h2.png" width="262px" height="auto" alt="DINNER" /></h2>
            <div class="shared_wrap">
                <ul class="photo_eff">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/shared/img/dinner_photo1.jpg" width="100%" height="auto" alt="ディナー1" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/shared/img/dinner_photo2.jpg" width="100%" height="auto" alt="ディナー2" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/shared/img/dinner_photo3.jpg" width="100%" height="auto" alt="ディナー3" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/shared/img/dinner_photo4.jpg" width="100%" height="auto" alt="ディナー4" /></li>
                </ul>
            </div>
            <div class="info">
                <h3>ディナー おすすめコース　<span class="f_eng">5,720</span>円(税込)</h3>
                <h4>～ある日の一例～</h4>
                <div class="menu_list">
                    <dl class="padd">
                        <dt>アミューズ</dt>
                        <dd>のりの入ったシュー<br />
                            チェリートマトのコンポート</dd>
                    </dl>
                    <dl class="padd">
                        <dt>前菜</dt>
                        <dd>フォアグラのテリーヌとブルーベリーのコンフィチュール<br />
                            絞甲イカとアボカドのサラダ イベリコチョリソーを添えて<br />
                            静岡産野菜のプレゼ ヘーゼルナッツのラペ
                        </dd>
                    </dl>


                    <dl>
                        <dt>メイン(魚)</dt>
                        <dd>マトウダイのヴァプール　キャベツを添えて二色のソース</dd>
                    </dl>
                    <dl>
                        <dt>メイン(肉)</dt>
                        <dd>アメリカ産牛肉のロースト　季節の野菜とともに</dd>
                    </dl>
                </div>

                <p class="attention2 mb10 note">※メインの肉料理はプラス料金で<br />鴨肉・熊本産あか牛等に変更可能です。<br />
                    ※冬場はご予約でジビエ料理もご用意出来ます。<br />
                    ※食後のお飲み物（コーヒー、紅茶、エスプレッソ)とデザートは<br />
                    ＋<span class="f_eng">800</span>円(税込) です。</p>

            </div>
            <div class="bnr">

                <!--<div class="course">
		<p style="font-size:16px;">12月23,24,25日限定<br />
        <strong>クリスマスコース</strong> <span class="f_eng">8,000</span>円(税別)</p>
		<p>全8品(デザート込み)　</p>
        <p>※要予約となります</p>
		</div>
		</div>
        
        <div class="bnr">-->

                <div class="course">
                    <p style="margin-bottom:0.8em;">シェフの特別コース</p>
                    <p><span class="f_eng">7,500</span>円(税込)<br />
                        <span class="f_eng">8,800</span>円(税込)
                    </p>
                    <p>※詳細はお問い合わせください。</p>
                </div>

                <p class="pc"><a href="#" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/dinner_bnr.jpg" width="390" height="auto" alt="最新のディナー" class="over" /></a></p>
                <p class="sp"><a href="#" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/sp/dinner_bnr.png" width="600" height="auto" alt="最新のディナー" class="over" /></a></p>

            </div>

        </div>
    </div>

    <!--  #dinner -->
    <div id="fixed-image01"></div>

    <!--  #img_fix -->

    <div id="wine" class="content sec_box">
        <h2 class="center pc"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/wine_h2.png" width="140" height="35" alt="WINE" /></h2>
        <h2 class=" center sp"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/sp/wine_h2.png" width="262px" height="auto" alt="WINE" /></h2>
        <div class="wine">
            <p class="tit">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/shared/img/wine_tit.png" width="409" height="57" alt="アルザスワイン" />
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/shared/img/sp/wine_tit.png" width="409" height="57" alt="アルザスワイン" />
            </p>
            <ul id="tab_navi" class="clearfix tab-pc">
                <li class="tab1 "><span class="active">白ワイン Vin blanc</span></li>
                <li class="tab2"><span>赤ワイン Vin rouge</span></li>
            </ul>
            <ul id="tab_navi" class="clearfix tab-sp">
                <li class="tab1 "><span class="active">白ワイン Vin blanc</span></li>
                <li class="tab2"><span>赤ワイン Vin rouge</span></li>
            </ul>
            <!-- <ul id="tab_navi " class="clearfix sp">
                <div class="flex">
                    <div class="left"><span class="active">白ワイン Vin blanc</span></div>
                    <div class="right">赤ワイン Vin rouge</div>
                </div>
            </ul> -->
            <div id="tab_content">
                <div class="tab tab01">
                    <ul>
                        <li>ch.ラ・レイル　ベルジュラック('12)</li>
                        <li>アラン・パレ　コートデュローヌ('12)</li>
                        <li>リーフレ　シルヴァネールトラディション('12)</li>
                        <li>リーフレ　リースリングトラディション('12)</li>
                        <li>マルセン・セルヴァン　プライベートシャブリ</li>
                    </ul>
                    <p class="photo"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/wine_photo1.png" width="326" height="538" alt="白ワイン" /></p>
                </div>
                <div class="tab tab02">
                    <ul>
                        <li>ch.ラ・レイル　ベルジュラック('11)</li>
                        <li>アラン・パレ　コートデュローヌ('11)</li>
                        <li>ドメーヌ・ド・ロウシュ・ガイヤール トゥーレーヌ</li>
                        <li>シャンタル・レスキュール　コートド・ボーヌ</li>
                        <li>アラン・パレ　サンジョセフ420ニュイ('10)</li>
                    </ul>
                    <p class="photo"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/wine_photo2.png" width="326" height="538" alt="赤ワイン" /></p>
                </div>
            </div>

            <!--  #tab_content  -->

            <div class="shared">
                <p>グラスワイン(赤・白)　900円(税込) ～<br />
                    ボトルワイン(赤・白)　4,400円(税込) ～</p>
                <p>料理をより一層引き立てるワインを取り揃えております。<br />
                    このお料理と合うワインは？<br />
                    ワインに合わせて食事を楽しみたい、など<br />
                    ご要望やご相談がございましたら、お気軽にお申し付けください。<br />
                </p>
            </div>
        </div>
        <p class="bnr clear pc"><a href="#" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/wine_bnr.jpg" width="390" height="40" alt="最新入荷のワイン" class="over" /></a></p>
        <p class="bnr clear sp"><a href="#" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/sp/wine_bnr.png" width="600" height="auto" alt="最新入荷のワイン" class="over" /></a></p>
        <p class="deco"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/deco1.png" width="105" height="133" alt="ランチ1" /></p>
    </div>

    <!--  #wine  -->

    <div id="access" class="sec_bg sec_box">
        <div class="content">
            <h2 class="center pc"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/access_h2.png" width="140" height="35" alt="ACCESS" /></h2>
            <h2 class=" center sp"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/sp/access_h2.png" width="262px" height="auto" alt="ACCESS" /></h2>
            <div class="shared_wrap">
                <ul class="photo_eff">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/shared/img/access_photo1.jpg" width="100%" height="auto" alt="外観" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/shared/img/access_photo2.jpg" width="100%" height="auto" alt="内観1" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/shared/img/access_photo3.jpg" width="100%" height="auto" alt="内観2" /></li>
                </ul>
            </div>
            <div class="info">
                <p><strong>フランス料理レストラン　a Bee (アベー)</strong></p>
                <p>東急大井町線尾山台駅より徒歩3分。<br />
                    素材に真っ直ぐと向き合う、正統派フレンチ。</p>
                <p>季節によって異なる「美味しい食材」を常に探求し、<br />
                    素材の持ち味を十分に生かすため、調理へのこだわりもかかしません。<br />
                    是非、厳選した多種多様なワインと共に、お召し上がりください。</p>
                <p>何気ない日の普段使いから、特別な記念日やデート、<br />
                    クリスマスディナーにもおすすめです。<br />
                    皆様のご来店を心よりお待ちしております。</p>
                <p>オーナーシェフ　阿部　篤志 </p>
            </div>
            <div class="contact">
                <p class="txt mb20">〒<span class="f_eng">158-0086</span><br />
                    東京都世田谷区尾山台<span class="f_eng">3-24-11</span>　第<span class="f_eng">10</span>大浦ビル<span class="f_eng">1</span>階<br />
                    ランチ　　<span class="f_eng">12:00～13:00(Last order)</span><br />
                    ディナー <span class="f_eng">18:00～23:00(Last order 22:00)</span><br />
                    定休日　火曜日、水曜日のランチ<br />
                    最寄り駅　東急大井町線尾山台駅より徒歩<span class="f_eng">3</span>分</p>
                <p class="note2">※ランチはご予約で定員になり次第、終了させていただきます。</p>
                <p class="tel pc"><a class="telhref" href="tel:0337016930" onclick="ga('send', 'event', 'tel', 'click', 'info_phone');"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/access_tel.png" width="397" height="128" alt="tel 03-3701-6930" /></a></p>
                <p class="tel sp"><a class="telhref" href="tel:0337016930" onclick="ga('send', 'event', 'tel', 'click', 'info_phone');"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/sp/access_tel.png" width="500px" height="auto" alt="tel 03-3701-6930" /></a></p>
                <p class="tel_txt">
                    ※当日のキャンセルはコースの金額を100％頂戴させて頂きます。<br />
                    ※2日前までのご予約をお願いいたします。
                </p>
            </div>
        </div>
    </div>

    <!--  #access -->

    <div id="gmap"> </div>

    <!--  #gmap -->

    <div id="group" class=" clearfix">
        <div id="news">
            <h3><img src="<?php echo get_template_directory_uri(); ?>/shared/img/news_h3.png" width="51" height="51" alt="ブログ" /></h3>
            <div id="feed" class="box">
                <?php
                // RSS情報を取得する(URL,記事の表示数)
                $rss = get_ameba_rss("http://rssblog.ameba.jp/abee2013/rss20.xml", 3, 56);
                foreach ($rss as $item) : ?>

                    <dl>


                        <dt><span class="date"><?php print $item->date; ?></span><br />
                            <span class="ttl"><a href="<?php print $item->link; ?>" target="_blank" rel="nofollow"><?php print $item->title; ?></a></span>
                        <dt>
                        <dd><?php print $item->post; ?></dd>
                    </dl>
                <?php endforeach; ?>
                <!--<dl>
            <dt><span class="date">2015-5-12</span><br />
              <a href="#">ホームページをリニューアルしました</a></dt>
            <dd>ブログは只今準備中です</a></dd>
            
          </dl>-->
            </div>
        </div>

        <!--  #news -->

        <div id="facebook">
            <h3><img src="<?php echo get_template_directory_uri(); ?>/shared/img/fb_h3.png" width="51" height="51" alt="Facebook" /></h3>
            <div class="box">
                <div id="fb-root"></div>
                <div class="fb-page" data-href="www.facebook.com/pages/%E3%83%95%E3%83%A9%E3%83%B3%E3%82%B9%E6%96%99%E7%90%86-%C3%A0B%C3%AAe/197712040433800?fref=ts" data-width="270" data-height="445" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"></div>
            </div>
        </div>

        <!--  #facebook -->

        <div id="instagram" >
            <h3><img src="<?php echo get_template_directory_uri(); ?>/shared/img/insta_h3.png" width="51" height="51" alt="Instagram" /></h3>
            <div class="box">
          <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CNZF0-Cgi54/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:300px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CNZF0-Cgi54/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CNZF0-Cgi54/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by àBêe (@abee_restaurant)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
            </div>
        </div>

    </div>
</div>


<?php get_footer(); ?>