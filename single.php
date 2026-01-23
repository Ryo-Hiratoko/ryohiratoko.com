<?php get_header(); ?>
<!-- 
<div class="p-single-post">
    <div class="p-single-post__header">
        <?php echo the_post_thumbnail(); ?>
    </div>

    <?php custom_breadcrumbs(); ?>

    <div class="p-single-post__inner">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();

                // 日付とカテゴリの表示
                ?>
                <div class="p-single-post__info">
                    <div class="p-single-post__date">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </div>
                    <?php
                    $categories = get_the_category();
                    if ($categories && !empty($categories)) {
                        ?>
                        <div class="p-single-post__label c-label">
                            <div class="c-label__inner">
                                <div class="c-label__text">
                                    <?php echo esc_html($categories[0]->name); ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <?php
                // 投稿のタイトルと内容の表示
                ?>
                <div class="p-single-post__content">
                    <h1 class="p-single-post__title"><?php the_title(); ?></h1>
                    <div class="p-single-post__body"><?php the_content(); ?></div>
                    <div class="p-single-post__btn c-back-btn">
                        <a href="/news/">
                            <div class="c-back-btn__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14" viewBox="0 0 7 14" fill="none">
                                    <path d="M6 0.99993L1.40683 5.57446C0.864388 6.1147 0.864388 6.99874 1.40683 7.53898L6 12.1135" stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="c-back-btn__inner">
                                <div class="c-back-btn__text">
                                    戻る
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div> -->

<?php get_footer(); ?>
