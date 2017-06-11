<?php

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

?>

?>