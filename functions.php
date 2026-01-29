<?php
/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );



/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
	wp_enqueue_style( 'my', get_template_directory_uri() . '/css/styles.css', array(), '1.0.1', 'all' );
	wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.1', true );
}
add_action('wp_enqueue_scripts', 'my_script_init');




/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
// function my_menu_init() {
// 	register_nav_menus(
// 		array(
// 			'global'  => 'ヘッダーメニュー',
// 			'utility' => 'ユーティリティメニュー',
// 			'drawer'  => 'ドロワーメニュー',
// 		)
// 	);
// }
// add_action( 'init', 'my_menu_init' );
/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
// function my_widget_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => 'サイドバー',
// 			'id'            => 'sidebar',
// 			'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<div class="p-widget__title">',
// 			'after_title'   => '</div>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'my_widget_init' );


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title( $title ) {

	if ( is_home() ) { /* ホームの場合 */
		$title = 'ブログ';
	} elseif ( is_category() ) { /* カテゴリーアーカイブの場合 */
		$title = '' . single_cat_title( '', false ) . '';
	} elseif ( is_tag() ) { /* タグアーカイブの場合 */
		$title = '' . single_tag_title( '', false ) . '';
	} elseif ( is_post_type_archive() ) { /* 投稿タイプのアーカイブの場合 */
		$title = '' . post_type_archive_title( '', false ) . '';
	} elseif ( is_tax() ) { /* タームアーカイブの場合 */
		$title = '' . single_term_title( '', false );
	} elseif ( is_search() ) { /* 検索結果アーカイブの場合 */
		$title = '「' . esc_html( get_query_var( 's' ) ) . '」の検索結果';
	} elseif ( is_author() ) { /* 作者アーカイブの場合 */
		$title = '' . get_the_author() . '';
	} elseif ( is_date() ) { /* 日付アーカイブの場合 */
		$title = '';
		if ( get_query_var( 'year' ) ) {
			$title .= get_query_var( 'year' ) . '年';
		}
		if ( get_query_var( 'monthnum' ) ) {
			$title .= get_query_var( 'monthnum' ) . '月';
		}
		if ( get_query_var( 'day' ) ) {
			$title .= get_query_var( 'day' ) . '日';
		}
	}
	return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title' );


/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'my_excerpt_length', 999 );


/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more( $more ) {
	return '...';

}
add_filter( 'excerpt_more', 'my_excerpt_more' );


// 投稿アーカイブページの作成
function post_has_archive( $args, $post_type ) {
    if ( 'news' === $post_type ) { // 'news' はカスタム投稿タイプのスラッグ
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; // アーカイブページのスラッグ
    }
    return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// Custom Post Type: Works
function create_post_type_works() {
  register_post_type('works',
    array(
      'labels' => array(
        'name' => __('Works'),
        'singular_name' => __('Work'),
        'add_new' => __('Add New Work'),
        'add_new_item' => __('Add New Work'),
        'edit_item' => __('Edit Work'),
        'new_item' => __('New Work'),
        'view_item' => __('View Work'),
        'search_items' => __('Search Works'),
        'not_found' => __('No works found'),
        'not_found_in_trash' => __('No works found in Trash')
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
      'menu_icon' => 'dashicons-portfolio',
      'show_in_rest' => true
    )
  );
}
add_action('init', 'create_post_type_works');


function add_taxonomy_to_custom_post_type() {
    register_taxonomy_for_object_type( 'category', 'news' ); // 'event' タクソノミーを 'news' カスタム投稿タイプに関連付ける
}
add_action( 'init', 'add_taxonomy_to_custom_post_type' ); // タクソノミーをカスタム投稿タイプに関連付ける

function show_taxonomy_custom_post_type_metabox() {
    add_meta_box(
        'event_categoriesdiv',
        'イベント', // カテゴリーメタボックスのタイトル
        'post_categories_meta_box',
        'news',
        'side',
        'default'
    );
}
add_action( 'admin_menu', 'show_taxonomy_custom_post_type_metabox' );

// アイキャッチ画像を設定できるようにする
add_theme_support( 'post-thumbnails' );
register_post_type(
	'news',
	array(
	// 'supports'に'thumbnail'を追記
	'supports' => array('title','editor','thumbnail')
	)
);


// // パンくずリストを出力
// function custom_breadcrumbs() {
//     $delimiter = '&nbsp;&raquo;&nbsp;'; // 区切り文字
//     $home = 'ホーム'; // ホームリンクのテキスト
//     $before = '<li class="p-breadcrumb__item">'; // パンくずリストの前の部分
//     $after = '</li>'; // パンくずリストの後の部分

//     if (!is_home() && !is_front_page() || is_paged()) {
//         echo '<nav class="p-breadcrumb">';
//         echo '<ul class="p-breadcrumb__list">';
//         global $post;
//         $homeLink = get_home_url();
//         echo '<li class="p-breadcrumb__item p-breadcrumb__item--home"><a href="' . $homeLink . '" class="p-breadcrumb__link">' . $home . '</a>' . $delimiter . '</li>';

// 		if (is_archive()) {
// 			$homeLink = get_home_url();
// 			echo $before . 'お知らせ' . $after;
//         } elseif (is_single()) {
// 		    echo $before . '<a href="' . get_post_type_archive_link('news') . '" class="p-breadcrumb__link">お知らせ</a>' . $delimiter . get_the_title() . $after;		
//         } elseif (is_page()) {
//             if ($post->post_parent) {
//                 $anc = get_post_ancestors($post->ID);
//                 $anc = array_reverse($anc);
//                 foreach ($anc as $ancestor) {
//                     $output = $before . '<a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a>' . $delimiter . $output;
//                 }
//                 echo $output;
//                 echo $before . get_the_title() . $after;
//             } else {
//                 echo $before . get_the_title() . $after;
//             }
//         } elseif (is_tag()) {
//             echo $before . single_tag_title('', false) . $after;
//         } elseif (is_day()) {
//             echo '<li class="p-breadcrumb__item">' . '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $delimiter . '</li>';
//             echo '<li class="p-breadcrumb__item">' . '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $delimiter . '</li>';
//             echo $before . get_the_time('d') . $after;
//         } elseif (is_month()) {
//             echo '<li class="p-breadcrumb__item">' . '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $delimiter . '</li>';
//             echo $before . get_the_time('F') . $after;
//         } elseif (is_year()) {
//             echo $before . get_the_time('Y') . $after;
//         } elseif (is_search()) {
//             echo $before . 'Search results for "' . get_search_query() . '"' . $after;
//         } elseif (is_author()) {
//             global $author;
//             $userdata = get_userdata($author);
//             echo $before . 'Articles posted by ' . $userdata->display_name . $after;
//         } elseif (is_404()) {
//             echo $before . 'Error 404' . $after;
//         }

//         if (get_query_var('paged')) {
//             if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
//                 echo ' (' . __('Page', 'text-domain') . ' ' . get_query_var('paged') . ')';
//             }
//         }

//         echo '</ul>';
//         echo '</nav>';
//     }
// }


//アーカイブページで出力する最大文字数を調整
function custom_trim_content($content) {
    $max_length = 200; // 最大文字数
    $content = wp_strip_all_tags($content); // HTMLタグを削除して文字数をカウント
    $content = trim($content);
    $content = mb_strimwidth($content, 0, $max_length, '...'); // 最大文字数でカット
    return $content;
}

add_filter('the_content', 'custom_trim_content');


//戻るボタンを実装する
function get_parent_page_url() {
    global $post;

    // 親ページがある場合は親ページのURLを取得
    if ($post->post_parent) {
        $parent_page = get_post($post->post_parent);
        return get_permalink($parent_page);
    }

    // 親ページがない場合はホームページのURLを取得
    return esc_url( home_url( '/' ) );
}

// イベントがトリガーされたときに実行される関数
function update_next_month_calendar_image() {
    // カレンダー画像のフィールド名
    $image_field_name = 'calendar_image_1';

    // 次の月のカレンダー画像を取得して更新
    $next_month = date('Ym', strtotime('+1 month'));
    $next_month_image = get_field('calendar_image_' . $next_month);
    update_field($image_field_name, $next_month_image);
}

// イベントの登録
add_action('update_next_month_calendar_image', 'update_next_month_calendar_image');


// Add meta box for custom fields in Works post type
function add_works_meta_boxes() {
    add_meta_box(
        'works_custom_fields',
        'Works Details',
        'display_works_custom_fields',
        'works',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_works_meta_boxes');

function display_works_custom_fields($post) {
    $company = get_post_meta($post->ID, 'company', true);
    $url = get_post_meta($post->ID, 'url', true);
    $tagline = get_post_meta($post->ID, 'tagline', true);
    ?>
    <p>
        <label for="company">Company Name:</label><br>
        <input type="text" name="company" id="company" value="<?php echo esc_attr($company); ?>" placeholder="e.g. Medical Aid" style="width:100%;" />
    </p>
    <p>
        <label for="url">Project URL:</label><br>
        <input type="text" name="url" id="url" value="<?php echo esc_attr($url); ?>" placeholder="https://example.com" style="width:100%;" />
    </p>
    <p>
        <label for="tagline">Project Tagline:</label><br>
        <input type="text" name="tagline" id="tagline" value="<?php echo esc_attr($tagline); ?>" placeholder="e.g. Corporate Site" style="width:100%;" />
    </p>
    <?php
}

function save_works_custom_fields($post_id) {
    if (array_key_exists('company', $_POST)) {
        update_post_meta($post_id, 'company', sanitize_text_field($_POST['company']));
    }
    if (array_key_exists('url', $_POST)) {
        update_post_meta($post_id, 'url', esc_url_raw($_POST['url']));
    }
    if (array_key_exists('tagline', $_POST)) {
        update_post_meta($post_id, 'tagline', sanitize_text_field($_POST['tagline']));
    }
}
add_action('save_post', 'save_works_custom_fields');


// 現在言語に合うスラッグのページURLを返す
function ryo_lang_link_by_slug( $slug ) {
    // Polylang が有効な場合
    if ( function_exists('pll_current_language') ) {
      $lang = pll_current_language('slug'); // 例: 'en' / 'ja'
  
      // まずデフォルト言語側でスラッグ一致のページを取得
      $base_page = get_page_by_path( $slug, OBJECT, 'page' );
      if ( $base_page && function_exists('pll_get_post') ) {
        // 現在言語の翻訳ページIDを取得
        $tr_id = pll_get_post( $base_page->ID, $lang );
        if ( $tr_id ) {
          return get_permalink( $tr_id );
        }
      }
  
      // 翻訳IDが見つからない場合のフォールバック（言語ホーム + スラッグ）
      if ( function_exists('pll_home_url') ) {
        return trailingslashit( pll_home_url( $lang ) ) . trailingslashit( $slug );
      }
    }
  
    // Polylang なしのフォールバック（英語既定）
    return home_url( '/' . trailingslashit( $slug ) );
}