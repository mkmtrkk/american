<?php get_header(); ?>

<main>
    <section id="kv">
        <img class="kv-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
        <div class="kv-container">

            <picture class="kv-slide">
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" media="(min-width: 768px)" /><!-- ○○px以上で表示する画像 -->
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" media="(min-width: 10px)" /><!-- △△px以上で表示する画像 -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" alt="view"/>
            </picture>

            <picture class="kv-text">
                <source class="kv-text-pc" srcset="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" media="(min-width: 768px)" /><!-- ○○px以上で表示する画像 -->
                <source class="kv-text-sp" srcset="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" media="(min-width: 10px)" /><!-- △△px以上で表示する画像 -->
                <img class="kv-text-sp" src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt="view"/>
            </picture>
        </div>    
        <h3>
            <span>進化し続ける「街」</span><span>アメリカンビレッジマガジン</span>
        </h3> 

    </section>

    
    <!-- メインループの記載 -->
     <section id="blog">
        <h1>Latest Articles</h1>
        <div class="blog-container" id="content">
            <div class="blog-box">
                <?php 
                $wp_query = new WP_Query(
                    array(
                        'post_type' => 'news'
                    )
                );
                ?>
            <?php    
            if($wp_query->have_posts()):
                while ($wp_query->have_posts()):
                    $wp_query->the_post();
              ?>
                <a href="<?php the_permalink(); ?>" class="blog-boxes" >
                    <?php the_post_thumbnail(); ?>
                    <!-- <img src="<?php //echo get_template_directory_uri();?>/img/post_img_1.png" alt=""> -->
                    <div class="blog-boxes-p">
                        <p class="day"><?php echo get_the_date(); ?></p>
                        <!-- <h2 class="title"><?php //the_title(); ?></h2> -->
                        <p class="description"><?php the_content(); ?></p>
                        <p class="more">READ MORE</p>
                    </div>
                </a>

                
                <?php endwhile;?>
                    <!-- カスタム投稿全件数取得 -->
                    <?php global $wp_query; $count = $wp_query->found_posts;?>

                    <!-- この部分がajaxで追加読み込みする箇所 -->
                    <!-- javascript側に渡したい値は、data属性を使って指定 -->
                    <ul class="load" data-count="<?php echo $count; ?>"
                    data-post-type="news" ></ul>

                    <!-- 初期表示件数が全件数より少ない場合、もっと読み込むボタンを表示 -->
                    <?php if($count > 6): ?>
                    <button class="more_btn">もっと読み込む</button>
                    <?php endif; ?>
                <?php endif;?>    
                
            </div>
        </div>

    </section>
    
</main>
<?php get_footer(); ?>

