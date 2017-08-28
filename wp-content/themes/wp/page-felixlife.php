<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
    		<div id="t02L">
        		<div class="ptitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.gif" />
                </div>
                <div class="t03">
                    <div class="mobileHidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_img01.jpg" />
                    </div>
                    <div class="pcHidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sp/<?php echo $slug; ?>/<?php echo $slug; ?>_img01_sp.jpg" />
                    </div>
                </div>
                <div class="fl01">
                    <dl>
                        <dt>住まいと暮らし安心サポート</dt>
                        <dd>
                            会員様のお住いのトラブル、会員様とご家族様のおからだのもしもの時に24時間体制でサポートいたします。<br />
                            「お住い」や「おからだ」にもしものことがあった場合は、すぐに「フェリックスサポート24」へご相談ください。
                        </dd>
                    </dl>
                    <div class="pcHidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixlife_img02.jpg" />
                    </div>
                </div>
                <div class="fl01">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixlife_support01.jpg" />
                    <p>日常生活における小さなトラブルから大きなトラブルまで緊急時に専門知識の持ったスタッフが対応。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixlife_support02.jpg" />
                    <p>スタッフ1名にて30分程度、年2回無料で書き対応内容をお手伝い。</p>
                </div>
                <div class="fl02">
                    <ul>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixlife_support02_01.jpg" />
                        </li>
                        <li>        
                            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixlife_support02_02.jpg" />
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixlife_support02_03.jpg" />
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixlife_support02_04.jpg" />
                        </li>
                    </ul>
                    <ul class="last">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixlife_support02_05.jpg" />
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixlife_support02_06.jpg" />
                        </li>
                    </ul>
                </div>
                <div class="fl01">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixlife_support03.jpg" />
                    <p>おからだの「もしも」の時は、お気軽にご連絡ください。24時間365日常駐の医師・看護師が無料でアドバイスを行います。緊急時の対処法から、休日、深夜の病院、診療所のご案内、健康相談まで、じつに多彩、ご家族のお身体の悩みをすっきり解消致します。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixlife_support04.jpg" />
                    <p>保険会社って損害があっても保険金がおりませんよね？火災保険に加入していても火災以外で保険金が降りるのをご存知ですか？気付かずに余計な費用を払ってませんか？<br />
                        住まいのトラブルがあればすぐ相談、損害審査のエキスパートがトラブル対応、損害審査、保険金請求まで、あらゆる角度からサポートし、大きな安心を約束します。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixlife_support05.jpg" />
                    <p>人気のホテルや有名旅館、話題の映画のチケット、レジャー施設、カラオケ、日帰り温泉、ショッピング、スポーツクラブなどで普段から使えるサービスからお出かけに使えるサービスまで、会員様限定の優待価格でご利用いただけます。</p>
                </div>
                <div class="fl01">
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixlife_img02.jpg" /> -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixlife_img03.jpg" />
                </div>
                <div class="cm01">
                    <div id="contact">
                        <div class="mobileHidden">
                            <a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact_btn.jpg"></a>
                        </div>
                        <div class="pcHidden">
                            <a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/sp/contact_btn_sp.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
   	    	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
