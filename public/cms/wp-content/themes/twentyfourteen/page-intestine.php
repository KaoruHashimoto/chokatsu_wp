<?php
/**
 * Template Name: page-intestine
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
            <main class="main-intestine">
                <h1>そもそも腸って？</h1>
                <div class="wikipedia">
                    <div class="wiki-discription">
                    <p>食物が胃で溶かされた後、その中の栄養や水分を吸収する器官。</p>
                    <p>末端は肛門であり、消化された食物は便となり、排便により体外へと排出される。（Wikipediaより）</p>
                    </div><!--/wiki-discription-->
                    <p>「脳死でも生きてはいけるけれど、腸が死んだら生きていけない」ともいわれる大切な臓器です。</p>
                    <p>便秘や下痢といったうんちのトラブルが起こるときは、腸の動きがよくないそうです。</p>
                </div><!--/wikipedia-->
                
                <h2 class="intestine-h2">小腸をちゃんとすると人生がよくなる!?</h2>
                <div class="small-intestine">
                    <div class="small-intestine-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/intestine-01.jpg">
                    </div><!--/small-intestine-img-->
                    <div class="small-intestine-text">
                    <p><span class="text01">胃で消化液と混ぜられた食べ物の栄養は小腸で吸収されます。</span></p>
                    <p>柔毛を広げるとテニスコート１面分にもなるそうです</p>
                    <p>ちなみに、添加物はこの柔毛の隙間にたまるそうです。</p>
                    <p> 添加物を完全に避けることは難しいので、</p>
                    <p><span class="text02">「採らない」よりも「しっかり出す」</span>ことが肝要とのことです。</p>
                    <br>
                    <p>癒しでおなじみのセロトニンは小腸で作られます。</p>
                    <p>また、免疫細胞の60～70％が小腸で作られるそうです。</p>
                    <p>（だから、花粉症対策にヤクルトがいいと言われているんですね）</p>
                    </div><!--/small-intestine-text-->
                </div><!--/small-intestine-->
                
                <h2 class="intestine-h2">大腸は何をするところ？</h2>
                <div class="colon">
                    <div class="colon-img-wrap">
                    <div class="colon-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/colon.png">
                    </div><!--/colon-img-->
                    </div>
                    <div class="colon-text">
                    <p><span class="text01">大腸では小腸から送られてきた食べ物から水分・ミネラルを吸収しています。</span></p>
                    <p>水分・ミネラルを吸収された残りかすがそう！<span class="text03">うんち</span>です。</p>
                    <p>ちなみに、<span class="text03">うんち</span>の80％は水分。</p>
                    <p>残りの20%は腸粘膜や腸内細菌、食べかすがそれぞれ6～7％くらいだそうです。</p>
                    <p>意外と出ていかないものなんですね。</p>
                    <p>(食べかすは、腸内細菌のえさになるそうです）</p>  
                    </div><!--/colon-text-->

                </div><!--/colon-->
                
                
                <div class="corn">
                    <h3 class="intestine-h3">●こぼれ話　#コーンなう</h3>
                    <div class="corn-text">
                    <p><span class="text03">うんち</span>は、9ｍにもおよぶ消化管（口から肛門）の旅路を終えた搾りかす。</p>
                    <p>その旅路は大体24時間から48時間くらいかかるそうです。</p>
                    <p>しかし人によっては12時間くらいの方もいらっしゃるそうで、人それぞれ。</p>
                    <br>
                    <p>自分の「旅路」はどのくらいかかるかを調べるのはとっても簡単！</p>
                    <p>用意するのはコ―ン缶、それだけ！</p>
                    <p>コーンを食べて（食べた時間は記録しておきましょう）、</p>
                    <p>その後トイレでコ―ンと再会した時間を記録するだけです。</p>
                    <br>
                    <p>#公式腸活部　セミナーでは、19時45分にみんなで一斉にコーン缶を食べました。</p>
                    <p>そして、その後コーンと再会したらTwitterにただ一言、</p>
                        <p>「<span class="text04">#コーンなう</span>」とハッシュタグをつけて呟き、</p>
                    <p>部員の「旅路」にかかる時間の平均をナガセさんが算出する、という試みが行われました。</p>
                    <p>（ナガセさんも多忙な方なので、結果はまだ出せてないみたいですが、本当に人それぞれで面白かったですよ）</p>
                    <br>
                    <p>ちなみにコーンは皮が消化されにくいため、トイレで再会しやすい食材です。</p>
                    <p>こういった食材を「<span class="text04">スループット食材</span>」といい、</p>
                    <p>他にスイカの種やキノコ、豆でも代用できるみたいですよ　レッツトライ！</p>
                    </div><!--/corn-text-->
                    <div class="corn-img-wrap">
                    <div class="corn-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/corn-01.png">
                    </div><!--/corn-img-->
                    </div>
                </div><!--/corn-->
                
            </main>
        </div><!--/main-container-->
    </section>
    <!--=========/section==========-->



</div><!-- #main-content -->

<?php
get_footer();

