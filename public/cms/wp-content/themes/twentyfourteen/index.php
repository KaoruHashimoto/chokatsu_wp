<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

	<!--<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main"> -->

    <div classs="keyvisual">
        <img src="<?php echo get_template_directory_uri(); ?>/images/keyvisual.jpg" class="img-responsive">
    </div>

    <!--=========section===========-->
    <section>
        <div class="container main-container">
            <main>      
                <div class="main-twitter">
                    <h2 class="main-h2">#公式腸活部って？</h2>
                    <div class="twitter"> 
                     <div class="twitter-img">
                         <figure>
                         <img src="<?php echo get_template_directory_uri(); ?>/images/nagase2.jpg" alt="うん広報ナガセさん">
                             <figcaption>うん広報ナガセさん</figcaption>
                         </figure>
                     </div><!--/twitter-img-->
                     <div class="twitter-discription">
                        <p>「うん広報ナガセ＠ウンログ株式会社」さんがTwitter上で始めた部活動です。</p>
                        <p><span class="twitter-color">#公式腸活部</span> というタグで腸に関する質疑応答や、腸活レシピを公開したりといった活動を行っています。</p>
                        <p>3月22日に行われたイベントでは、ナガセさんによる腸活セミナーが行われ、Twitterで配信されました。</p>
                        <p>このサイトでは、そのセミナーの内容をまとめています。</p>
                        <p class="nagase">★ナガセさんのTwitterは<a href="https://twitter.com/unlog_PR" target="_blank">こちら</a></p>
                     </div><!--/twitter-discription-->
                    </div><!--/twitter-->
                </div><!--/main-twitter-->
                
                <div class="main-unlog">
                    <h2 class="main-h2">ウンログって？</h2>
                    <div class="unlog">
                        <div class="unlog-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/intro-chara.png">
                        </div><!--/unlog-img-->
                        <div class="unlog-discription">
                            <p class="unlog-copy">全ての人が、毎日すっきり“いいうんち”と出会える世界を</p>
                            <p>50万ダウンロード越え!</p>
                            <p>あなたの腸活を応援する排便記録アプリ！</p>
                            <p>健康の大切なバロメータである<span class="text03">うんち</span>について、</p>
                            <p>出た時間や色、形状等、簡単に楽しく記録できます。</p>
                            <div class="download">
                            <p><strong>▼ダウンロードはこちらから▼</strong></p>
                            <a href="https://itunes.apple.com/jp/app/sukkiri-mei-chang!daietto/id539493829?mt=8" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/btn_app.png" alt="App Storeからダウンロード">
                            </a>
                            <a href="http://unlog.co.jp/wp-content/themes/unlog/lp/img/btn_play.png" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/btn_play.png" alt="Google Playからダウンロード">
                            </a>
                            </div><!--/download-->
                        </div><!--/unlog-discription-->
                    </div><!--/unlog-->
                </div><!--/main-unlog--> 
            </main>
        </div><!--/main-container-->
    </section>
    <!--=========/section==========-->

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php // get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
// get_sidebar();
get_footer();
