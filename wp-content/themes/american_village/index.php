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
    <?php 
    if(have_posts()):
      while (have_posts()):
        the_post();
    ?>
    <section id="blog">
        <h1>Latest Articles</h1>
        <div class="blog-container">
            <div class="blog-box">
                <a href="<?php the_permalink(); ?>" class="blog-boxes">
                    <?php the_post_thumbnail(); ?>
                    <!-- <img src="<?php //echo get_template_directory_uri();?>/img/post_img_1.png" alt=""> -->
                    <div class="blog-boxes-p">
                        <p class="day"><?php echo get_the_date(); ?></p>
                        <h2 class="title"><?php the_title(); ?></h2>
                        <p class="description"><?php the_content(); ?></p>
                        <p class="more" ><?php the_content( 'READ MORE' ); ?></p>
                    </div>
                </a>
                <!-- <div class="blog-boxes">
                    <img src="<?php //echo get_template_directory_uri();?>/img/post_img_2.png" alt="">
                    <div class="blog-boxes-p">
                        <p class="day">2018 / 5 / 19</p>
                        <h2 class="title">あのネオンはいつ交換するのか！？観覧車の謎に迫る！</h2>
                        <p class="more" >READ MORE</p>
                    </div>
                </div>
                <div class="blog-boxes">
                    <img src="<?php //echo get_template_directory_uri();?>/img/post_img_3.png" alt="">
                    <div class="blog-boxes-p">
                        <p class="day">2018 / 5 / 18</p>
                        <h2 class="title">ラソナの社内はこんなのよ</h2>
                        <p class="more" >READ MORE</p>
                    </div>
                </div>
            </div>
            <div class="blog-box">
                <div class="blog-boxes">
                    <img src="<?php //echo get_template_directory_uri();?>/img/post_img_4.png" alt="">
                    <div class="blog-boxes-p">
                        <p class="day">2018 / 5 / 27</p>
                        <h2 class="title">お隣のアラハはハワイ？</h2>
                        <p class="more" >READ MORE</p>
                    </div>
                </div>
                <div class="blog-boxes">
                    <img src="<?php //echo get_template_directory_uri();?>/img/post_img_5.png" alt="">
                    <div class="blog-boxes-p">
                        <p class="day">2018 / 5 / 16</p>
                        <h2 class="title">なぜテント？ラソナの人に聞いてみた</h2>
                        <p class="more" >READ MORE</p>
                    </div>
                </div>
                <div class="blog-boxes">
                    <img src="<?php //echo get_template_directory_uri();?>/img/post_img_6.png" alt="">
                    <div class="blog-boxes-p">
                        <p class="day">2018 / 5 / 15</p>
                        <h2 class="title">ベイエリアおしゃれすぎる問題</h2>
                        <p class="more" >READ MORE</p>
                    </div>
                </div> -->
            </div>
        </div>

    </section>
    <?php endwhile;
    else : ?>
    <section class="blog-boxes">
      <h2 class="subtitle">表示する記事がありません</h2>
    </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>

