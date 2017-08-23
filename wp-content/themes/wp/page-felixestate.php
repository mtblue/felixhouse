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
                <div class="fe01">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixestate_img02.jpg" />
                    <div class="fe01r">
                        <p>あなただけの条件にあった物件探しをプロの専門家がしっかりサポートいたします。こだわりの物件を探している方、またどのような住環境が良いか、物件のメリット・デメリットなどプロの目線でわかりやすくご説明いたします。</p>
                    </div>
                </div>
                <div class="fe02">
                    <p>こんなお悩みをお持ちの方は、ぜひご相談ください！</p>
                </div>
                <ul class="fe03">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixestate_img03.jpg" />
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixestate_img04.jpg" />
                    </li>
                </ul>
                <ul class="fe03">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixestate_img05.jpg" />
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/felixestate_img06.jpg" />
                    </li>
                </ul>
                <div class="fe01">
                    <p>ずっと探しているけど、なかなか見つからずに困っていませんか？プロの専門家があなた自身のこだわりの物件探しをしっかりサポートいたします。「通勤・通学に便利な駅近の物件」や「毎日の買い物に便利なスーパーが近い物件」、「築浅できれいなマンション」、「二世帯住宅で住み心地のいい物件」などなど様々な条件にあった物件やあなたのお悩みなど何でもご相談ください。条件がはっきりしていない方でも、不利な条件や不安材料を考慮して物件探しのお手伝いをさせていただきます。</p>
                </div>
                <div class="fe02">
                    <p>何でも対応させて頂きます。一度御相談下さい。</p>
                </div>
                <div class="cm01">
                    <div id="contact"><a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact_btn.jpg"></a></div>
                </div>
            </div>
   	    	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
