
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
					<p class="hero_text">ポートフォリオサイト</p>
				</div>
				<div href="#" class="scroll_line">scroll</div>
			</div>
		</section>

		<section id="history">
			<div class="container">
				<h2 class="headline">
					私について
				</h2>
				<div class="content_box">
					<div class="content_img">
						<img src="https://placehold.jp/640x400.png" alt="">
					</div>
					<div class="content_text_box">
						<p class="content_text">
							都内でWEBデザイナー兼コーダーをしています。
						</p>
						
					</div>
				</div>
				<div class="link_box">
					<a href="about.html" class="btn_link">私について詳しく</a>
				</div>
			</div>
		</section>

		<section id="works">
			<div class="container">
				<h2 class="headline">
					制作実績
				</h2>
				<div class="works_wrapper">
					<?php /*<a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'banner']); ?>" class="works_item">
						<figure class="works_img">
							<img src="https://placehold.jp/640x400.png"  alt="">
						</figure>
						<p class="works_title">banner</p>
					</a>*/?>
					<a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'shinwa']); ?>" class="works_item">
						<figure class="works_img">
							<?php echo $this->Html->image('works/site/works_thmb_shinwa.jpg', array('alt' => '親和クリニックサイトサムネイル画像')); ?>
						</figure>
						<p class="works_title">
							親和クリニック
						</p>
					</a>
					<a href="#" class="works_item">
						<figure class="works_img">
							<img src="https://placehold.jp/640x350.png"  alt="">
						</figure>
						<p class="works_title">架空のサイト</p>
					</a>
					<a href="#" class="works_item">
						<figure class="works_img">
							<img src="https://placehold.jp/640x350.png"  alt="">
						</figure>
						<p class="works_title">架空のサイト</p>
					</a>
					<a href="#" class="works_item">
						<figure class="works_img">
							<img src="https://placehold.jp/640x350.png"  alt="">
						</figure>
						<p class="works_title">架空のサイト</p>
					</a>
					<a href="#" class="works_item">
						<figure class="works_img">
							<img src="https://placehold.jp/640x350.png"  alt="">
						</figure>
						<p class="works_title">架空のサイト</p>
					</a>
					<a href="#" class="works_item">
						<figure class="works_img">
							<img src="https://placehold.jp/640x350.png"  alt="">
						</figure>
						<p class="works_title">架空のサイト</p>
					</a>
					<a href="#" class="works_item">
						<figure class="works_img">
							<img src="https://placehold.jp/640x350.png"  alt="">
						</figure>
						<p class="works_title">架空のサイト</p>
					</a>
					<a href="#" class="works_item">
						<figure class="works_img">
							<img src="https://placehold.jp/640x350.png"  alt="">
						</figure>
						<p class="works_title">架空のサイト</p>
					</a>
					<a href="#" class="works_item">
						<figure class="works_img">
							<img src="https://placehold.jp/640x350.png"  alt="">
						</figure>
						<p class="works_title">架空のサイト</p>
					</a>
				</div>
				<div class="link_box">
					<a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'index']); ?>" class="btn_link">制作実績の一覧</a>
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