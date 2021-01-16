<!-- メインビジュアル -->
<div class="mv">
    <h2 class="page_title">制作実績</h2>
</div>
<!--	パンくずリスト-->
<nav class="container breadcrumbs">
    <ul>
        <li><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action' => 'index']); ?>">HOME</a></li>
        <li><a href="<?php echo $this->Url->build(['controller'=>'Works', 'action' => 'index']); ?>">制作実績</a></li>
        <li>親和クリニック</li>
    </ul>
</nav>

<section class="bg_color_mono_clear padding_v_large">
    <div class="container">
        <h2 class="headline">
            親和クリニック
        </h2>

        <div class="site_images">
            <div class="col1">
                <figure>
                    <img src="https://placehold.jp/1120x680.png"  alt="">
                </figure>
            </div>
        </div>

        <div class="padding_b_large">
            <h4 class="headline">クライアント</h4>
            <p class="margin_b_medium">親和クリニック</p>
            <h4 class="headline">サイト規模</h4>
            <p class="margin_b_medium">約490ページ</p>
            <h4 class="headline">URL</h4>
            <p class="margin_b_medium">https://shinwa-clinic.jp/</p>
            <h4 class="headline">主な担当業務</h4>
            <ul class="list_link margin_b_medium">
                <li>新規ページ作成・ページ改修</li>
                <li>MV作成</li>
                <li>グローバルメニュー改修</li>
                <li>キャンペーンページ作成</li>
            </ul>
            <p>
                <span class="lable">HTML</span>
                <span class="lable">css</span>
                <span class="lable">sass</span>
                <span class="lable">cakePHP</span>
            </p>
        </div>

        <div class="site_images">
            <div class="col2">
                <figure class="">
                    <img src="https://placehold.jp/500x3900.png"  alt="">
                </figure>
                <figure class="">
                    <img src="https://placehold.jp/500x3900.png"  alt="">
                </figure>
            </div>
            <div class="col1">
                <figure>
                    <img src="https://placehold.jp/1120x680.png"  alt="">
                </figure>
            </div>
        </div>
        <div class="link_box">
            <a href="<?php echo $this->Url->build(['controller'=>'Works', 'action' => 'index']); ?>" class="btn_link">実績一覧に戻る</a>
        </div>
    </div>
    

</section>