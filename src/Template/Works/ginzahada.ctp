<!-- メインビジュアル -->
<div class="mv">
    <h2 class="page_title">制作実績</h2>
</div>
<!--	パンくずリスト-->
<nav class="container breadcrumbs">
    <ul>
        <li><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action' => 'index']); ?>">HOME</a></li>
        <li><a href="<?php echo $this->Url->build(['controller'=>'Works', 'action' => 'index']); ?>">制作実績</a></li>
        <li>銀座肌クリニック</li>
    </ul>
</nav>

<section class="bg_color_mono_clear padding_v_large">
    <div class="container">
        <h2 class="headline">
            銀座肌クリニック
            <span class="headline_large_en">ginza hada clinic</span>
        </h2>

        <div class="margin_b_medium bg_mono_light padding_medium">

            <div class="site_info">
                <div class="thmb_img margin_b_medium">
                    <figure>
                        <?php echo $this->Html->image('works/site/works_thmb_hada_pc.jpg', array('alt' => '銀座肌クリニックサイトトップページ画像')); ?>
                    </figure>
                </div>
                <div class="site_info_text padding_medium">
                <h4 class="headline">クライアント</h4>
                    <p class="margin_b_medium">銀座肌クリニック</p>
                    <h4 class="headline">サイト規模</h4>
                    <p class="margin_b_medium">106ページ</p>
                    <h4 class="headline">URL</h4>
                    <p class="margin_b_medium">https://www.hada-clinic.jp/</p>
                    <h4 class="headline">月間PV数（2021/01）</h4>
                    <p class="margin_b_medium">9,457</p>
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
            </div>
        </div>

        <div class="site_images">
            <div class="col1">
                <figure>
                    <?php echo $this->Html->image('works/site/works_hada_01.jpg', array('alt' => '銀座肌クリニックサイトトップページ画像')); ?>
                </figure>
            </div>
        </div>

        <div class="site_images">
            <div class="col2">
                <figure class="">
                    <?php echo $this->Html->image('works/site/works_hada_02.jpg', array('alt' => '銀座肌クリニックサイトトップページ全画面画像')); ?>
                </figure>
                <figure class="">
                    <?php echo $this->Html->image('works/site/works_hada_03.jpg', array('alt' => '銀座肌クリニックサイト下層ページ画像')); ?>
                </figure>
            </div>
            <div class="col1">
                <figure>
                    <?php echo $this->Html->image('works/site/works_hada_04.jpg', array('alt' => '銀座肌クリニックサイトスマホデバイスモックアップ画像')); ?>
                </figure>
            </div>
        </div>
        <div class="link_box">
            <a href="<?php echo $this->Url->build(['controller'=>'Works', 'action' => 'index']); ?>" class="btn_link">実績一覧に戻る</a>
        </div>
    </div>
    

</section>