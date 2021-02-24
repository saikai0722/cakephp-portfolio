<!-- メインビジュアル -->
<div class="mv">
    <h2 class="page_title">制作実績</h2>
</div>
<!--	パンくずリスト-->
<nav class="container breadcrumbs">
    <ul>
        <li><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action' => 'index']); ?>">HOME</a></li>
        <li>制作実績</li>
    </ul>
</nav>
<!-- メイン -->
<section class="bg_color_mono_clear padding_v_large">
    <div class="container">

        <div class="demo-cover">
        <div class="nav-wrap">
            <nav  id="nav">
                <ul class="nav-list">
                    <li>
                        <div>
                            <div class="nav-list-ttl">Category</div>
                        </div>
                        <ul class="nav-child">
                            <li>
                                <input type="radio" id="nav-input-all" name="nav-input" class="nav-input" data-sort-nav="show-all" checked>
                                <label for="nav-input-all" id="show-all" class="nav-child-inner">
                                    <div class="nav-txt">all</div>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="nav-input-fruits" name="nav-input" class="nav-input" data-sort-nav="web">
                                <label for="nav-input-fruits" id="fruits" class="nav-child-inner">
                                    <div class="nav-txt">web</div>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="nav-input-vegetables" name="nav-input" class="nav-input" data-sort-nav="banner">
                                <label for="nav-input-vegetables" id="vegetables" class="nav-child-inner">
                                    <div class="nav-txt">banner</div>
                                </label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="sort-ttl" id="sort-ttl">all</div>
            <ul class="sort-list" id="sort-list">
                <?=$this->element('works/web') ?>
                <?=$this->element('works/banner') ?>
            </ul>


        </div>
    </div>

</section>
