<!-- メインビジュアル -->
<div class="mv">
    <h2 class="page_title">制作実績</h2>
</div>
<!--	パンくずリスト-->
<nav class="container breadcrumbs">
    <ul>
        <li><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action' => 'index']); ?>">HOME</a></li>
        <li><a href="<?php echo $this->Url->build(['controller'=>'Works', 'action' => 'index']); ?>">制作実績</a></li>
        <li>ホワイト歯科よの</li>
    </ul>
</nav>

<section class="bg_color_mono_clear padding_v_large">
    <div class="container">
        <h2 class="headline">
            ホワイト歯科よの
            <span class="headline_large_en">yono dental clinic</span>
        </h2>

        <div class="margin_b_medium bg_mono_light padding_medium">

            <div class="site_info">
                <div class="thmb_img margin_b_medium">
                    <figure>
                        <?php echo $this->Html->image('works/site/works_thmb_yono_pc.jpg', array('alt' => 'ホワイト歯科よのサイトトップページ画像')); ?>
                    </figure>
                </div>
                <div class="site_info_text padding_medium">
                <h4 class="headline">クライアント</h4>
                    <p class="margin_b_medium">ホワイト歯科よの</p>
                    <h4 class="headline">サイト規模</h4>
                    <p class="margin_b_medium">17ページ</p>
                    <h4 class="headline">URL</h4>
                    <p class="margin_b_medium">https://www.whitedental-yono.com/</p>
                    <h4 class="headline">月間PV数（2021/01）</h4>
                    <p class="margin_b_medium">192</p>
                    <h4 class="headline">主な担当業務</h4>
                    <ul class="list_link margin_b_medium">
                        <li>新規ページ作成・ページ改修</li>
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
                    <?php echo $this->Html->image('works/site/works_yono_01.jpg', array('alt' => 'ホワイト歯科よのサイトトップページ画像')); ?>
                </figure>
            </div>
        </div>

        <div class="site_images">
            <div class="col2">
                <figure class="">
                    <?php echo $this->Html->image('works/site/works_yono_02.jpg', array('alt' => 'ホワイト歯科よのサイトトップページ全画面画像')); ?>
                </figure>
                <figure class="">
                    <?php echo $this->Html->image('works/site/works_yono_03.jpg', array('alt' => 'ホワイト歯科よのサイト下層ページ画像')); ?>
                </figure>
            </div>
            <div class="col1">
                <figure>
                    <?php echo $this->Html->image('works/site/works_yono_04.jpg', array('alt' => 'ホワイト歯科よのサイトスマホデバイスモックアップ画像')); ?>
                </figure>
            </div>
        </div>
        <div class="link_box">
            <a href="<?php echo $this->Url->build(['controller'=>'Works', 'action' => 'index']); ?>" class="btn_link">実績一覧に戻る</a>
        </div>
    </div>
    

</section>