<!-- メインビジュアル -->
<div class="mv">
        <h2 class="page_title">備忘録の一覧</h2>
    </div>
<!--	パンくずリスト-->
<nav class="container breadcrumbs">
    <ul>
        <li><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action' => 'index']); ?>">HOME</a></li>
        <li>備忘録のページ</li>
    </ul>
</nav>

<section class="bg_color_mono_clear padding_v_large">
    <div class="container">
        <h2 class="headline">
            備忘録の一覧
        </h2>
        <div class="card_box card_side">
            <a href="<?php echo $this->Url->build(['controller'=>'Blog', 'action' => 'a01']); ?>" class="card">
                <figure class="thumbnail_img">
                    <img src="img/service-img01@2x.jpg"  alt="">
                </figure>
                <div class="card_text_box">
                    <span class="lable">ラベル</span>
                    <span class="lable">ラベル</span>
                    <h3 class="card_title">タイトル</h3>
                    <time datetime="2020-08-16">2020.08.16</time>
                </div>
            </a>
            <a href="<?php echo $this->Url->build(['controller'=>'Blog', 'action' => 'a02']); ?>" class="card">
                <figure class="thumbnail_img">
                    <img src="img/service-img02@2x.jpg"  alt="">
                </figure>
                <div class="card_text_box">
                    <span class="lable">ラベル</span>
                    <span class="lable">ラベル</span>
                    <h3 class="card_title">タイトルタイトルタイトルタイトル</h3>
                    <time datetime="2020-08-16">2020.08.16</time>
                </div>
            </a>
            <a href="#" class="card">
                <figure class="thumbnail_img">
                    <img src="img/sevice-img03@2x.jpg"  alt="">
                </figure>
                <div class="card_text_box">
                    <span class="lable">ラベル</span>
                    <span class="lable">ラベル</span>
                    <h3 class="card_title">タイトル</h3>
                    <time datetime="2020-08-16">2020.08.16</time>
                </div>
            </a>
            <a href="#" class="card">
                <figure class="thumbnail_img">
                    <img src="img/service-img01@2x.jpg"  alt="">
                </figure>
                <div class="card_text_box">
                    <span class="lable">ラベル</span>
                    <span class="lable">ラベル</span>
                    <h3 class="card_title">タイトル</h3>
                    <time datetime="2020-08-16">2020.08.16</time>
                </div>
            </a>
            <a href="#" class="card">
                <figure class="thumbnail_img">
                    <img src="img/service-img02@2x.jpg"  alt="">
                </figure>
                <div class="card_text_box">
                    <span class="lable">ラベル</span>
                    <span class="lable">ラベル</span>
                    <h3 class="card_title">タイトル</h3>
                    <time datetime="2020-08-16">2020.08.16</time>
                </div>
            </a>
            <a href="#" class="card">
                <figure class="thumbnail_img">
                    <img src="img/sevice-img03@2x.jpg"  alt="">
                </figure>
                <div class="card_text_box">
                    <span class="lable">ラベル</span>
                    <span class="lable">ラベル</span>
                    <h3 class="card_title">タイトル</h3>
                    <time datetime="2020-08-16">2020.08.16</time>
                </div>
            </a>
        </div>
    </div>
</section>