<!-- メインビジュアル -->
<div class="mv">
    <h2 class="page_title">備忘録のページ</h2>
</div>
<!--	パンくずリスト-->
<nav class="container breadcrumbs">
    <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="blog.html">備忘録のページ</a></li>
        <li>このページ</li>
    </ul>
</nav>

<section class="bg_color_mono_clear padding_v_large">
    <div class="container">
        <h2 class="headline">
            IEにおけるflex-drectionのバグと遭遇
        </h2>
        <div class="category">
            <p>
                <span class="lable">CSS</span>
                <span class="lable">FlexBox</span>
                <span class="lable">IE対応</span>
                <span class="lable">IE対応</span>
            </p>
        </div>
        <time class="writing_time" datetime="2020-08-16">2020.10.07</time>
        <!-- ここから内容 -->
        <h3 class="headline">
            ①画像の下に変な余白が...
        </h3>
        <div class="paragraph_box">
            <div class="text_box">
                <p>IEで【flex-drection】を指定した要素は大抵崩れている。実務を通して経験したため、その対応策をメモ。</p>
                <p>やろうとしたこと。３カラムの要素の子要素の高さを揃えたい</p>
            </div>
            <div class="flex_col_3">
                <div class="flex_item">
                    <figure class="flex_item_img_wrapper">
                        <img src="https://placehold.jp/400x400.png" alt="ダミー画像" class="flex_item_img">
                        <figcaption class="flex_item_img_cap">キャプション</figcaption>
                    </figure>
                    <p class="flex_item_text">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
                <div class=""></div>
                <div class=""></div>
            </div>
            <h4 class="headline">
                小見出し
            </h4>
            <div class="media_box_float clearfix">
                <div class="paragraph_img">
                    <img src="https://placehold.jp/640x400.png" alt="">
                </div>
                <div class="text_box">
                    <p>以下の例では、対象要素が360度回転するアニメーションを記述しています。backfacevisibilityプロパティの値をhiddenに指定していると、回転する要素の背面が見えるタイミングで、要素は非表示になります。</p>
                    <p>以下の例では、対象要素が360度回転するアニメーションを記述しています。backfacevisibilityプロパティの値をhiddenに指定していると、回転する要素の背面が見えるタイミングで、要素は非表示になります。以下の例では、対象要素が360度回転するアニメーションを記述しています。backfacevisibilityプロパティの値をhiddenに指定していると、回転する要素の背面が見えるタイミングで、要素は非表示になります。以下の例では、対象要素が360度回転するアニメーションを記述しています。backfacevisibilityプロパティの値をhiddenに指定していると、回転する要素の背面が見えるタイミングで、要素は非表示になります。以下の例では、対象要素が360度回転するアニメーションを記述しています。backfacevisibilityプロパティの値をhiddenに指定していると、回転する要素の背面が見えるタイミングで、要素は非表示になります。</p>
                </div>
            </div>
            <div class="text_box">
                <p>以下の例では、対象要素が360度回転するアニメーションを記述しています。backfacevisibilityプロパティの値をhiddenに指定していると、回転する要素の背面が見えるタイミングで、要素は非表示になります。</p>
                <p>以下の例では、対象要素が360度回転するアニメーションを記述しています。backfacevisibilityプロパティの値をhiddenに指定していると、回転する要素の背面が見えるタイミングで、要素は非表示になります。以下の例では、対象要素が360度回転するアニメーションを記述しています。backfacevisibilityプロパティの値をhiddenに指定していると、回転する要素の背面が見えるタイミングで、要素は非表示になります。</p>
            </div>
        </div>
        <div class="link_box">
            <a href="../blog.html" class="btn_link">記事の一覧へ戻る</a>
        </div>
    </div>
</section>