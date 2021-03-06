<?php get_header(); ?>
<?php $slug = get_post($wp_query->post->ID)->post_name; ?>
	<div id="wrapper">
    	<div id="t02">
	    
    		<div id="t02L">
                <div class="ptitle">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/<?php echo $slug; ?>_title.gif" />
                </div>
                <div class="pr01">
                    <dl>
                        <dd>
                            株式会社三幸住研（以下「当社」）では、お客様の個人情報を保護することは、重要な社会的責務であると考えております。<br />
                            当社では、物件検索やお問い合わせなどを通じて、 お客様から提供された個人情報を管理しています。<br />
                            皆様に安心してご利用頂けるよう、これらの個人情報を細心の注意を払って、外部に漏れることの無いよう厳重に取り扱っております。<br />
                            当社では個人情報の保護についての法令を遵守し、適正な収集、利用、管理を社内において徹底することが重要であると考え、以下の通りプライバシー・ポリシー（=個人情報保護方針）を定め、 お客様の個人情報に関する権利を尊重し、これを保護して参ります。<br />
                        </dd>
                        <dt>
                            ■個人情報とは
                        </dt>
                        <dd>
                            人に関する情報で、特定の個人が識別され、又は識別され得るもの（住所、氏名、電話番号、E-mailアドレス等）を指します。
                        </dd>
                        <dt>
                            ■個人情報の収集と利用目的
                        </dt>
                        <dd>
                            当社はウェブサイトを通じ資料請求等をご利用いただく場合や、 当社店舗・展示会場・見学会等において個人情報をお教えいただくことがある場合、個人情報の適切な収集・利用及び提供を行うことをお約束いたします。また、当社はお客様からの個人情報を主に以下の目的で利用させていただきます。
                            （1）お客様の同意の下、物件等の情報をお知らせするため<br />
                            （2）お客様からの要望を的確にサービスに反映させるため<br />
                            （3）お客様ご本人であることまたはご本人の代理人であることを確認するため<br />
                            （4）お客様との取引に関する事務を行うため<br />
                            （5）お客様に許可を得ている場合のみ、メールアドレスにメールマガジン、ダイレクトメールを送信するため<br />
                            （6）当社がお客様に何らかの連絡が必要であると判断した場合<br />
                            （7）その他、お客様とのお取引を適切かつ円滑に履行するため<br />
                            上記以外の目的でお客様の個人情報を使用する場合には、改めて目的をお知らせし、お客様の了解を頂くように致します。
                        </dd>
                        <dt>
                           ■個人情報提供の任意性
                        </dt>
                        <dd>
                            当社では、個人を識別し連絡を差し上げるために、個人情報をお伺いさせて頂くことがあります。<br />
                            必ずしも全ての質問にお答え頂く必要はありませんが、サービスの提供上、お答え頂くことが必要なサービスもあります。
                        </dd>
                        <dt>
                           ■個人情報の正確性
                        </dt>
                        <dd>
                            当社では、ご提供いただいた個人情報を正確に保管・取扱いをするように努めます。<br />
                            但し、ご提供いただいた個人情報の内容が正確かつ最新であることについては、ご本人が責任を負うものとします。
                        </dd>
                        <dt>
                          ■個人情報変更時の本人確認について
                        </dt>
                        <dd>
                            当社では、個人情報の開示・訂正・削除の求めに応じる場合など、個人情報により、本人であることを確認させて頂きます。<br />
                            本人以外が個人情報を識別できる情報を入手の上、提示した場合、当社では責任を負いません。
                        </dd>
                        <dt>
                          ■個人情報の開示等
                        </dt>
                        <dd>
                            当社では、保有個人データの本人またはその代理人からの開示の求め、また個人情報の訂正・削除・利用停止等の求めに対応させていただきます。<br />
                            ご提供を頂きました個人情報は、お客様本人の同意がある場合を除いては、第三者に提供することはいたしません。但し以下のような場合には、個人情報を必要最低限の範囲で開示することがあります。<br />
                            ・法的な命令等により個人情報の開示が求められた場合<br />
                            ・お問合わせ内容が当社の関係会社や代理人から回答させていただくことが適切と判断される場合<br />
                            ・キャンペーンや懸賞の応募等で事前に守秘義務契約を締結した外部業者に業務を委託する場合<br />
                            ・その他弊社の判断に基づき、第三者の利益を保護するために必要だと判断される場合<br />
                        </dd>
                        
                    </dl>
                </div>
                
                
                
                
                
                <div class="in03">
                    <div id="contact"><a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact_btn.jpg"></a></div>
                </div>
            </div>
   	    	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>