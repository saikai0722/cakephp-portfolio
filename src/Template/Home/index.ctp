
		<section>
			<div class="fv">
				<ul class="slider">
					<li><img src="img/fv-bgi_01@2x.jpg" alt=""></li>
					<li><img src="img/fv-bgi_02@2x.jpg" alt=""></li>
					<li><img src="img/fv-bgi_03@2x.jpg" alt=""></li>
					<li><img src="img/fv-bgi_01@2x.jpg" alt=""></li>
					<li><img src="img/fv-bgi_02@2x.jpg" alt=""></li>
					<li><img src="img/fv-bgi_03@2x.jpg" alt=""></li>
				</ul>
				<!-- <div href="#" class="scroll_arrow"><span></span>Scroll</div> -->
				<div class="hero_text_box">
					<h2 class="hero_title">Portfolio Site</h2>
					<p class="hero_text">コーディング練習</p>
				</div>
				<div href="#" class="scroll_line">scroll</div>
			</div>
		</section>


		<section id="works">
			<div class="container">
				<h2 class="headline">
					制作実績
				</h2>
				<div class="works_wrapper">
					<a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'banner']); ?>" class="works_item">
						<figure class="works_img">
							<img src="https://placehold.jp/640x400.png"  alt="">
						</figure>
						<p class="works_title">banner</p>
					</a>
					<a href="#" class="works_item">
						<figure class="works_img">
							<img src="https://placehold.jp/640x400.png"  alt="">
						</figure>
						<p class="works_title">架空のサイト</p>
					</a>
					<a href="#" class="works_item">
						<figure class="works_img">
							<img src="https://placehold.jp/640x400.png"  alt="">
						</figure>
						<p class="works_title">架空のサイト</p>
					</a>
				</div>
				<div class="link_box">
					<a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'index']); ?>" class="btn_link">制作実績の一覧</a>
				</div>
			</div>
		</section>

		<section id="history" class="bg_mono">
			<div class="container">
				<h2 class="headline">
					私について
				</h2>
				<div class="content_box">
					<div class="content_img">
						<img src="https://placehold.jp/640x400.png" alt="">
					</div>
					<div class="content_text_box">
						<p class="content_text">栃木県の田舎に生まれ、都内のWeb制作会社に就職するまでのターニングポイントをまとめました。</p>
						<div class="link_box">
							<a href="about.html" class="btn_link">私について詳しく</a>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="blog">
			<div class="container">
				<h2 class="headline">
					備忘録
				</h2>
				<div class="card_box">
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
				<div class="link_box">
					<a href="<?php echo $this->Url->build(['controller'=>'Blog', 'action'=>'index']); ?>" class="btn_link">記事の一覧</a>
				</div>
			</div>
		</section>

		<section id="contact">
			<div class="container">
				<h2 class="headline">
					お問い合わせ
				</h2>
				<div class="text_cnter">
					<p class="email">saikai.yutaro@gmail.com</p>
				</div>
			</div>
		</section>