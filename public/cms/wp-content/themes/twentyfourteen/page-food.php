<?php
/**
 *Template Name: page-food
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">
    <!--=========section===========-->
    <section>
        <div class="container main-container">
            <main class="food">
                <h1>食事で腸活</h1>
                <div class="food-discription">
                    <p>食事で腸活をするにあたって知っておきたいポイントをまとめました。</p>
                    <p>さっそく今日の食事から取り入れられそうなこともありますよ！</p>
                    <p>チェックして、できることからはじめていきましょう。</p>
                </div><!--/food-discriotion-->
                <ul class="food-list">
                    <li>
                        <a href="<?php echo home_url(); ?>/dietary-fiber/">
                           <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/dietary-fiber.png" alt="食物繊維を取ろう">
                            <figcaption>食物繊維を取ろう</figcaption>
                           </figure>  
                        </a>                    
                    <li>
                        <a href="<?php echo home_url(); ?>/synbiotics/">
                           <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/synbiotics.png" alt="はじめよう、シンバイオティクス">
                            <figcaption>はじめよう、シンバイオティクス</figcaption>
                           </figure>  
                        </a>
                    </li>                    
                    <li>
                        <a href="<?php echo home_url(); ?>/circulation/">
                           <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/circulation.png" alt="栄養を循環させよう">
                            <figcaption>栄養を循環させよう</figcaption>
                           </figure>  
                        </a>
                    </li>
                </ul>
            </main>
        </div><!--/main-container-->
    </section>
    <!--=========/section==========-->

</div><!-- #main-content -->

<?php
get_footer();
