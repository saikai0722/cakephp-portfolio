		<section>
			<div class="fv">
				<ul class="slider">
					<li>
					　<?php echo $this->Html->image('top_mv.jpg', array('alt' => 'メインビジュアル')); ?>
					</li>
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
					<span class="headline_large_en">About</span>
				</h2>
				<div class="content_box">
					<div class="content_img">
						<img src="https://placehold.jp/640x400.png" alt="">
					</div>
					<div class="content_text_box">
						<h3 class="headline">自己紹介</h3>
						<p class="content_text">
						現在都内でインハウスのデザイナー兼コーダーとして業務に当たっています。<br>
						デザイナーとしての業務は、バナー作成やページデザインをメインに、チラシなど紙媒体のデザインも経験させていただきました。<br>
						コーダーとしては、カンプをもとにコーディングを行う事が主な業務内容ですが、技術記事を執筆したり、弊社独自のCSSフレームワークの保守なども行っていました。
						</p>
						
					</div>
				</div>
				<div class="link_box">
					<a href="<?php echo $this->Url->build(['controller'=>'About', 'action'=>'index']); ?>" class="btn_link">私について詳しく</a>
				</div>
			</div>
		</section>

		<section id="works">
			<div class="container">
				<h2 class="headline">
					制作実績
					<span class="headline_large_en">Works</span>
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
					<a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'femmyShibuya']); ?>" class="works_item">
						<figure class="works_img">
						<?php echo $this->Html->image('works/site/works_thmb_femmy_shibuya.jpg', array('alt' => 'フェミークリニック渋谷院 サイトサムネイル画像')); ?>
						</figure>
						<p class="works_title">フェミークリニック渋谷院</p>
					</a>
					<a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'femmyAgora']); ?>" class="works_item">
						<figure class="works_img">
						<?php echo $this->Html->image('works/site/works_thmb_agora.jpg', array('alt' => 'フェミークリニックドクターズコスメ サイトサムネイル画像')); ?>
						</figure>
						<p class="works_title">フェミークリニックドクターズコスメ</p>
					</a>
					<a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'ukedental']); ?>" class="works_item">
						<figure class="works_img">
						<?php echo $this->Html->image('works/site/works_thmb_uke.jpg', array('alt' => '宇毛デンタルオフィス サイトサムネイル画像')); ?>
						</figure>
						<p class="works_title">宇毛デンタルオフィス</p>
					</a>
					<a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'mariaMachida']); ?>" class="works_item">
						<figure class="works_img">
						<?php echo $this->Html->image('works/site/works_thmb_maria_machida.jpg', array('alt' => 'マリアクリニック町田院 サイトサムネイル画像')); ?>
						</figure>
						<p class="works_title">マリアクリニック町田院</p>
					</a>
					<a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'aichimaria']); ?>" class="works_item">
						<figure class="works_img">
						<?php echo $this->Html->image('works/site/works_thmb_aichimaria.jpg', array('alt' => '愛知マリアクリニック サイトサムネイル画像')); ?>
						</figure>
						<p class="works_title">愛知マリアクリニック</p>
					</a>
					<a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'laketown']); ?>" class="works_item">
						<figure class="works_img">
						<?php echo $this->Html->image('works/site/works_thmb_laketown.jpg', array('alt' => 'レイクタウンクリニック サイトサムネイル画像')); ?>
						</figure>
						<p class="works_title">レイクタウンクリニック</p>
					</a>
					<a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'ayabe']); ?>" class="works_item">
						<figure class="works_img">
						<?php echo $this->Html->image('works/site/works_thmb_ayabe.jpg', array('alt' => 'あやべクリニック サイトサムネイル画像')); ?>
						</figure>
						<p class="works_title">あやべクリニック</p>
					</a>
					<a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'jdac']); ?>" class="works_item">
						<figure class="works_img">
						<?php echo $this->Html->image('works/site/works_thmb_jdac.jpg', array('alt' => 'JDAC サイトサムネイル画像')); ?>
						</figure>
						<p class="works_title">JDAC</p>
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
					<span class="headline_large_en">Contact</span>
				</h2>
				<div class="text_cnter">
					<p class="email">saikai.yutaro@gmail.com</p>
				</div>
			</div>
		</section>