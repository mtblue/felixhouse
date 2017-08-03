<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
    		<div id="t02L">
        		<div class="ptitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.gif" />
                </div>
                <div class="ts03">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/recruit_img.jpg" />
                </div>
                <div class="cm01">
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
                <div class="cm02">
                    <div id="contact"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact_btn.jpg"></div>
                </div>
            </div>
   	    	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
