<?php
/**
 * Template Name: page-circulation
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
                <div class="breadcrumb">
                    <ol>
                        <li><a href="/">ホーム</a></li>
                        <li><a href="/food/">食事で腸活</a></li>
                        <li>栄養を循環させよう</li>
                    </ol>
                </div>
                <h1>栄養を循環させよう</h1>
                <div class="circulation">
                    <div class="circulation-text1">
                    <p>痩せようと思って食事を極端に減らしたりしていませんか？</p>
                    <p>しかし、<span class="circulation01">食事量が減ると便秘の原因になってしまいます。</span></p>
                    <br>    
                    <p>一番いいのは、「<span class="circulation01">適正な量をしっかり食べること</span>」。</p>
                    <p>そして、「<span class="circulation02">体の中で栄養を循環させる</span>」という意識を持つことです。</p>
                    <br>
                    <p>食品の栄養には大きく分けて</p>
                    <ul class="circulation-list">
                        <li class="list1">糖・たんぱく・脂</li>
                        <li class="list2">ビタミン・ミネラル</li>
                        <li class="list3">食物繊維</li>
                    </ul>
                    <p>といったものがあります。</p>
                    <p>このうち、<span class="list2">ビタミン</span>と<span class="list2">ミネラル</span>は体内で合成ができないので、食べて摂取するしかありません。</p>
                    <p>そして、エネルギーや骨・筋肉の元となる<span class="list1">糖・たんぱく・脂</span>を代謝するためには<span class="list2">ビタミンB群</span>が必要なのです。</p>
                    <p>このように、栄養素は体内で循環するのです。この循環を意識することが大切なのですね。</p>
                    </div><!--/circulation-text1-->
                    <div class="circulation-text2">
                    <p class="circulation03">ここでおすすめなのが、甘酒！</p>
                    <p>米麹から作られた甘酒を飲むと、<span class="list2">ビタミンB1・B2・B6</span>が一気に摂れます。</p>
                    <p>代謝に必要な<span class="list2">ビタミンB群</span>を摂取することで代謝が上がり、体温が上がり、冷え性も改善され、といいことづくめ！</p>
                    <p>まさに<span class="circulation04">栄養の循環</span>ですね♪</p>
                    </div><!--/circulation-text2-->
                    <div class="circulation-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/drink_amazake.png">
                    </div>
                </div>
            </main>
        </div><!--/main-container-->
    </section>
    <!--=========/section==========-->
</div><!-- #main-content -->

<?php
get_footer();
