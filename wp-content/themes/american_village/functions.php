<?php 
//投稿ページにサムネイルを追加
add_theme_support('post-thumbnails');

//カスタム投稿タイプの追加
function add_custom_post_type(){
    //記事の投稿
    register_post_type(
        'news', // 1.投稿タイプ名
        array(   // 2.オプション
            'label'  => '記事の投稿', //投稿タイプの名前
            'public'  => true, //利用する場合はtrue
            'publicly_queryable'  => true, //検索結果に含める場合はtrue
            'has_archive'  => true, //この投稿タイプのアーカイブを有効にする
            'menu_position'  => 5, //この投稿タイプが表示されるメニューの位置
            'menu_icon'  => 'dashicons-edit', //メニューで使用するアイコン
            'supports'  => array( //サポートする機能
                'title',
                'editor',
                'thumbnail',
                'comment',
            )

        )
    );

}
add_action('init', 'add_custom_post_type');

/* カスタム投稿一覧の初期表示件数を設定 */
function my_custom_query_vars( $query ) {
	if ( !is_admin() && $query->is_main_query()) {
		if ( is_post_type_archive('news') ) {
			$query->set( 'posts_per_page' , 6 );
		}
	}
	return $query;
}
add_action( 'pre_get_posts', 'my_custom_query_vars' );

/* ajax処理 */
function my_ajax(){
	global $post;
	$args = array(
		'posts_per_page' => $_POST["get_post_num"], // 追加で表示する件数
		'offset' => $_POST["now_post_num"],         //既に表示済みの件数は除外 
		'post_type' => $_POST["post_type"],
		'orderby' => 'date', //日付で並び替え
		'order' => 'DESC',
	);
	$my_posts = get_posts($args);
	foreach ($my_posts as $post) : setup_postdata($post);
    echo '<a href="'.get_the_permalink().'" class="blog-boxes" >';
    echo the_post_thumbnail();
	echo '<div class="blog-boxes-p">';
	echo '<p class="day">'.get_the_date().'</p>';
	echo '<p class="description">'.the_content().'</p>';
    echo '<p class="more">'.'READ MORE'.'</p>';
    echo '</div>';
    echo '</a>';
	endforeach; wp_reset_postdata();
	wp_die();
}
add_action( 'wp_ajax_my_ajax_action', 'my_ajax' );
add_action( 'wp_ajax_nopriv_my_ajax_action', 'my_ajax' );

?>
