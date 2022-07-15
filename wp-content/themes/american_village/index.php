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


    

    <section id="blog">
        <h1>Latest Articles</h1>
        <div class="blog-container">
            <div class="blog-box">
                <div class="blog-boxes">
                    <img src="<?php echo get_template_directory_uri();?>/img/post_img_1.png" alt="">
                    <div class="blog-boxes-p">
                        <p class="day">2018 / 5 / 20</p>
                        <p class="text">おしゃれなカフェありますよ</p>
                        <h2>READ MORE</h2>
                        <span></span>
                    </div>
                </div>
                <div class="blog-boxes">
                    <img src="<?php echo get_template_directory_uri();?>/img/post_img_2.png" alt="">
                    <div class="blog-boxes-p">
                        <p class="day">2018 / 5 / 19</p>
                        <p class="text">あのネオンはいつ交換するのか！？観覧車の謎に迫る！</p>
                        <h2>READ MORE</h2>
                    </div>
                </div>
                <div class="blog-boxes">
                    <img src="<?php echo get_template_directory_uri();?>/img/post_img_3.png" alt="">
                    <div class="blog-boxes-p">
                        <p class="day">2018 / 5 / 18</p>
                        <p class="text">ラソナの社内はこんなのよ</p>
                        <h2>READ MORE</h2>
                    </div>
                </div>
            </div>
            <div class="blog-box">
                <div class="blog-boxes">
                    <img src="<?php echo get_template_directory_uri();?>/img/post_img_4.png" alt="">
                    <div class="blog-boxes-p">
                        <p class="day">2018 / 5 / 27</p>
                        <p class="text">お隣のアラハはハワイ？</p>
                        <h2>READ MORE</h2>
                    </div>
                </div>
                <div class="blog-boxes">
                    <img src="<?php echo get_template_directory_uri();?>/img/post_img_5.png" alt="">
                    <div class="blog-boxes-p">
                        <p class="day">2018 / 5 / 16</p>
                        <p class="text">なぜテント？ラソナの人に聞いてみた</p>
                        <h2>READ MORE</h2>
                    </div>
                </div>
                <div class="blog-boxes">
                    <img src="<?php echo get_template_directory_uri();?>/img/post_img_6.png" alt="">
                    <div class="blog-boxes-p">
                        <p class="day">2018 / 5 / 15</p>
                        <p class="text">ベイエリアおしゃれすぎる問題</p>
                        <h2>READ MORE</h2>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>
<?php get_footer(); ?>

