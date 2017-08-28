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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_img.jpg" />
                    </div>
                    <div class="pcHidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sp/<?php echo $slug; ?>/<?php echo $slug; ?>_img_sp.jpg" />
                    </div>
                </div>
                <div class="cm01">
                    <div class="mobileHidden">
                    	<table id="outlineArea">
                        	<tr>
                            	<th>業務内容</th><td>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</td>
                            </tr>
                        	<tr>
                            	<th>年齢</th><td>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</td>
                            </tr>
                        	<tr>
                            	<th>学歴</th><td>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</td>
                            </tr>
                        	<tr>
                            	<th>資格</th><td>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</td>
                            </tr>
                        	<tr>
                            	<th>就業時間</th><td>00：00～00：00</td>
                            </tr>
                        	<tr>
                            	<th>休日</th><td>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</td>
                            </tr>
                        	<tr>
                            	<th>給与</th><td>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</td>
                            </tr>
                            <tr>
                            	<th>待遇</th><td>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</td>
                            </tr>
                        	<tr>
                            	<th>その他</th><td>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</td>
                            </tr>
                        </table>
                    </div>
                    <div class="pcHidden">
                        <dl id="outlineArea">
                            <dt>業務内容</dt><dd>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</dd>
                            <dt>年齢</dt><dd>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</dd>
                            <dt>学歴</dt><dd>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</dd>
                            <dt>資格</dt><dd>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</dd>
                            <dt>就業時間</dt><dd>00：00～00：00</dd>
                            <dt>休日</dt><dd>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</dd>
                            <dt>給与</dt><dd>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</dd>
                            <dt>待遇</dt><dd>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</dd>
                            <dt>その他</dt><dd>◯◯◯◯◯◯◯◯◯◯◯◯◯◯◯</dd>
                        </dl>
                    </div>
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
