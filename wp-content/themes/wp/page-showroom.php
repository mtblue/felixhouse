<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
    		<div id="t02L">
        		<div class="ptitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.gif" />
                </div>
                <div class="ts03">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/showroom_img01.jpg" />
                </div>
                <div class="sr01">
                    <div class="sr01l">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/showroom_img02.jpg" />
                    </div>
                    <p class="sr01r">
                        豊中桜井谷にお客様が、実際に見て体感できるショールームがオープンしました。このショールームでは、自由設計の際に参考になる展示物がいっぱいあります。ぜひ、ご家族でお越しくださいませ！
                    </p>
                </div>
                <div class="sr02">
                    <p>ショールーム活用術</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/showroom_img03.jpg" />
                    <dl>
                        <dt>１.商品の特長を知ろう</dt>
                        <dd>ショールームの中には、住まいを建てる時に使う商品のサンプルがたくさんあります。床材・外壁材や、壁タイル、建具サンプル、壁の中に使われるパネルなど住まい設計の参考になるものをスタッフが丁寧にご紹介いたします。</dd>
                    </dl>
                </div>
                <div class="sr01">
                    <div class="sr01l">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/showroom_img04.jpg" />
                        <dl>
                            <dt>2.家族でプランを考えよう</dt>
                            <dd>自分のプランを考えてみましょう。家づくりを考えると今まで気づかなかった様々なことが見えてきます。</dd>
                        </dl>
                    </div>
                    <div class="sr01r">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/showroom_img05.jpg" />
                        <dl>
                            <dt>3.お子様はキッズルームで遊べます</dt>
                            <dd>ロフト部分には、お子様が遊べるようにおもちゃを御用いたしました。アニメなどのビデオもあるので、退屈しません。</dd>
                        </dl>
                    </div>
                </div>
                <div class="sr03">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/showroom_img06.jpg" />
                    <dl>
                        <dt>4.その他にも色々な見所がいっぱい</dt>
                        <dd>休憩スペースもご用意しました。ゆっくりとソファーやウッドデッキなどで休憩できます。また家事をするママのためにキッチンの参考も。</dd>
                    </dl>
                </div>
                <div class="sr02">
                    <p>見所いっぱいのショールームにぜひ、お越しください！</p>
                </div>
                <div class="sr04">
                    <dl>
                        <dt>ＦＥＬＩＸ ＨＯＵＳＥ ｂｙ株式会社三幸住研</dt>
                        <dd>
                            住所　豊中市桜の町3丁目6-7<br />
                            TEL.06-4867-3000　FAX.06-4867-3100<br />
                            注文住宅・建替え・リフォーム・売買仲介・賃貸・管理・不動産全般
                        </dd>
                    </dl>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.155592274358!2d135.46136391523493!3d34.80202718040852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000fa8e7b96bb1f%3A0xd55625b827e5222e!2z44CSNTYwLTAwNTQg5aSn6Ziq5bqc6LGK5Lit5biC5qGc44Gu55S677yT5LiB55uu77yW4oiS77yX!5e0!3m2!1sja!2sjp!4v1500133663653" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <p class="sr05">専用駐車場あり　キッズコーナーあり</p>
                <div class="cm02">
                    <div id="contact"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact_btn.jpg"></div>
                </div>
            </div>
   	    	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
