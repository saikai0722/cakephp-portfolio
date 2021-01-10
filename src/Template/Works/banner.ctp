<!-- メインビジュアル -->
<div class="mv">
    <h2 class="page_title">制作実績</h2>
</div>
<!--	パンくずリスト-->
<nav class="container breadcrumbs">
    <ul>
        <li><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action' => 'index']); ?>">HOME</a></li>
        <li><a href="<?php echo $this->Url->build(['controller'=>'Works', 'action' => 'index']); ?>">制作実績</a></li>
        <li>バナーの制作実績</li>
    </ul>
</nav>

<section class="bg_color_mono_clear padding_v_large">
    <div class="container">
        <h2 class="headline">
            バナーの制作実績
        </h2>

        <div class="works_wrapper col3">
            <a href="#" class="works_item" rel="lightbox[sample-group]" data-title="グラシアクリニック様">
                <figure class="works_img">
                    <?php echo $this->Html->image('works/banner/banner_008.png',['class'=>'','alt'=>'グラシアクリニック様のバナー']) ?>
                </figure>
            </a>
            <a href="#" class="works_item" rel="lightbox[sample-group]" data-title="表参道スキンクリニック那覇院様">
                <figure class="works_img">
                    <?php echo $this->Html->image('works/banner/banner_007.png',['class'=>'','alt'=>'表参道スキンクリニック那覇院様のバナー']) ?>
                </figure>
            </a>
            <a href="#" class="works_item" rel="lightbox[sample-group]" data-title="かわさきかおりクリニック様">
                <figure class="works_img">
                    <?php echo $this->Html->image('works/banner/banner_006.png',['class'=>'','alt'=>'かわさきかおりクリニック様のバナー']) ?>
                </figure>
            </a>
            <a href="#" class="works_item" rel="lightbox[sample-group]" data-title="かわさきかおりクリニック様">
                <figure class="works_img">
                    <?php echo $this->Html->image('works/banner/banner_005.png',['class'=>'','alt'=>'かわさきかおりクリニック様のバナー']) ?>
                </figure>
            </a>
            <a href="#" class="works_item" rel="lightbox[sample-group]" data-title="西宮SHUHEI美容クリニック様">
                <figure class="works_img">
                    <?php echo $this->Html->image('works/banner/banner_004.png',['class'=>'','alt'=>'西宮SHUHEI美容クリニック様のバナー']) ?>
                </figure>
            </a>
            <a href="#" class="works_item" rel="lightbox[sample-group]" data-title="西宮SHUHEI美容クリニック様">
                <figure class="works_img">
                    <?php echo $this->Html->image('works/banner/banner_003.png',['class'=>'','alt'=>'西宮SHUHEI美容クリニック様のバナー']) ?>
                </figure>
            </a>
            <a href="#" class="works_item" rel="lightbox[sample-group]" data-title="セレクトクリニック様">
                <figure class="works_img">
                    <?php echo $this->Html->image('works/banner/banner_002.png',['class'=>'','alt'=>'セレクトクリニック様のバナー']) ?>
                </figure>
            </a>
            <a href="#" class="works_item" rel="lightbox[sample-group]" data-title="セレクトクリニック様">
                <figure class="works_img">
                    <?php echo $this->Html->image('works/banner/banner_001.png',['class'=>'','alt'=>'セレクトクリニック様のバナー']) ?>
                </figure>
            </a>
        </div>
    </div>
</section>

<!-- ページトップ -->
<div id="page_top" class="page_top"><a href="#">top</a>