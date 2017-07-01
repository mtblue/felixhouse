<?php
/* アイキャッチ画像 */
add_theme_support('post-thumbnails');

/* 新着情報の追加 */
add_action( 'init', 'create_post_type1' );
function create_post_type1() {
    register_post_type( 'news', /* post-type */
        array(
            'labels' => array(
                'name' => __( '新着情報' ),
                'singular_name' => __( 'news' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' =>5,
            'supports' => array(
                'title',
                'thumbnail',
                'revisions',
                'page-attributes'
            ),
            'rewrite' => true
        )
    );
}

/* Webチラシの追加 */
add_action( 'init', 'create_post_type3' );
function create_post_type3() {
    register_post_type( 'web', /* post-type */
        array(
            'labels' => array(
                'name' => __( 'Webチラシ' ),
                'singular_name' => __( 'web' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' =>5,
            'supports' => array(
                'title',
                'thumbnail',
                'revisions',
                'page-attributes'
            ),
            'rewrite' => true
        )
    );
}

/* 仲介物件の追加 */
add_action( 'init', 'create_post_type2' );
function create_post_type2() {
    register_post_type( 'agency', /* post-type */
        array(
            'labels' => array(
                'name' => __( '仲介物件' ),
                'singular_name' => __( 'agency' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' =>6,
            'supports' => array(
                'title',
                'thumbnail',
                'revisions',
                'page-attributes'
            ),
            'taxonomies' => array('agencyinfo'),
            'rewrite' => true,
        )
    );
    register_taxonomy(
        'agencyinfo', /* タクソノミーの名前 */
        'agency',
        array(
            'hierarchical' => true,
            'update_count_callback' => '_update_post_term_count',
            'label' => '物件カテゴリー',
            'singular_label' => '物件カテゴリー',
            'public' => true,
            'show_ui' => true,
            //'rewrite' => array('slug' => 'agency'),
            'rewrite' => true,
        )
    );
}

/* 記事投稿時、カテゴリーの選択を強制する */
add_action('admin_print_footer_scripts', 'my_print_footer_scripts', 21);
function my_print_footer_scripts() {
echo '<script type="text/javascript">
        //<![CDATA[
        jQuery(document).ready(function($){
                $(".categorychecklist input[type=checkbox]").each(function(){
                        $check = $(this);
                        var checked = $check.attr("checked") ? \' checked="checked"\' : \'\';
                        $(\'<input type="radio" id="\' + $check.attr("id")
                                + \'" name="\' + $check.attr("name") + \'"\'
                + checked
                + \' value="\' + $check.val()
                + \'"/>\'
                        ).insertBefore($check);
                        $check.remove();
                });
        });
        //]]>
        </script>';
}

/* 管理画面記事一覧にカスタムタクソノミーの表示追加 */
add_filter('manage_edit-agency_columns', 'manage_posts_columns');
function manage_posts_columns($columns) {
                $columns['fcategory1'] = "物件カテゴリー";
                return $columns;
}
add_action('manage_posts_custom_column',  'add_column', 10, 2);
function add_column($column_name, $post_id){
        //カテゴリー名取得
        if( 'fcategory1' == $column_name ) {
                $fcategory = get_the_term_list($post_id, 'agencyinfo');
        }
        //該当カテゴリーがない場合「なし」を表示
        if ( isset($fcategory) && $fcategory ) {
                echo $fcategory;
        } else {
                echo __('None');
        }
}

// 問い合わせ物件IDを取得
function my_form_tag_filter($tag){
  if ( ! is_array( $tag ) )
  return $tag;

  if(isset($_GET['id'])){
    $name = $tag['name'];
    if($name == 'contact-id')
      $tag['values'] = (array) $_GET['id'];
  }
  return $tag;
}
add_filter('wpcf7_form_tag', 'my_form_tag_filter', 11);

// パンくずリスト
function breadcrumb(){
	global $post;
	$str ='';
	if(!is_admin()&&!is_front_page()){ /* !is_admin は管理ページ以外という条件分岐 */
		$str.= '<div id="breadcrumb">';
		$str.= '<ul>';
		$str.= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="' . home_url('/') .'" class="home" itemprop="url" ><span itemprop="title">ホーム</span></a></li>';
		
		/* 投稿のページ */
		if(is_single()){
			$categories = get_the_category($post->ID);
			$cat = $categories[0];
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($ancestor).'"  itemprop="url" ><span itemprop="title">'. get_cat_name($ancestor). '</span></a></li>';
									}
			}
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($cat -> term_id). '" itemprop="url" ><span itemprop="title">'. $cat-> cat_name . '</span></a></li>';
			$str.= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. $post -> post_title .'</span></li>';
		} 
		
		/* 固定ページ */
		elseif(is_page()){
			if($post -> post_parent != 0 ){
				$ancestors = array_reverse(get_post_ancestors( $post->ID ));
				foreach($ancestors as $ancestor){
					$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_permalink($ancestor).'" itemprop="url" ><span itemprop="title">'. get_the_title($ancestor) .'</span></a></li>';
									}
			}
			$str.= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. $post -> post_title .'</span></li>';
		}
		
		/* カテゴリページ */	
		elseif(is_category()) {
			$cat = get_queried_object();
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($ancestor) .'" itemprop="url" ><span itemprop="title">'. get_cat_name($ancestor) .'</span></a></li>';
				}
			}
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. $cat -> name . '</span></li>';
		}
		
		/* タグページ */
		elseif(is_tag()){
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. single_tag_title( '' , false ). '</span></li>';
		} 
		
		/* 時系列アーカイブページ */
		elseif(is_date()){
			if(get_query_var('day') != 0){
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_year_link(get_query_var('year')). '" itemprop="url" ><span itemprop="title">' . get_query_var('year'). '年</span></a></li>';
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_month_link(get_query_var('year'), get_query_var('monthnum')). '" itemprop="url" ><span itemprop="title">'. get_query_var('monthnum') .'月</span></a></li>';
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. get_query_var('day'). '</span>日</li>';
			} elseif(get_query_var('monthnum') != 0){
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_year_link(get_query_var('year')) .'" itemprop="url" ><span itemprop="title">'. get_query_var('year') .'年</span.</a></li>';
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. get_query_var('monthnum'). '</span>月</li>';
			} else {
				$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. get_query_var('year') .'年</span></li>';
			}
		}	

		/* 投稿者ページ */
		elseif(is_author()){
			$str .='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">投稿者 : '. get_the_author_meta('display_name', get_query_var('author')).'</span></li>';
		}	
		
		/* 添付ファイルページ */
		elseif(is_attachment()){
			if($post -> post_parent != 0 ){
				$str.= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_permalink($post -> post_parent).'" itemprop="url" ><span itemprop="title">'. get_the_title($post -> post_parent) .'</span></a></li>';
			}
			$str.= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">' . $post -> post_title . '</span></li>';
		}

		/* 検索結果ページ */
		elseif(is_search()){
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">「'. get_search_query() .'」で検索した結果</span></li>';
		} 
		
		/* 404 Not Found ページ */
		elseif(is_404()){
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">お探しの記事は見つかりませんでした。</span></li>';
		} 
				
		/* その他のページ */
		else{
			$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">'. wp_title('', false) .'</span></li>';
		}
		$str.='</ul>';
		$str.='</div>';
	}
	echo $str;
}

?>