
	<div class="head_inner">
		<div class="container">
			<div class="head_logo">
				<h1 class="head_logo_img">
					<a href="<?php echo $this->Url->build(['controller'=>'Home', 'action'=>'index']); ?>">
						<?php echo $this->Html->image('logo.png', array('alt' => 'ロゴ')); ?>
					</a>
				</h1>
			</div>
			<a class="menuBtn" id="menuBtn">
				<div></div>
				<div></div>
				<div></div>
			</a>
		</div>
	</div>
	
	<nav id="nav" class="groble_nav">
		<ul>
			<li><a href="<?php echo $this->Url->build(['controller'=>'About', 'action'=>'index']); ?>">私について</a></li>
			<li><a href="<?php echo $this->Url->build(['controller'=>'Works', 'action'=>'index']); ?>">制作実績</a></li>
			<li><a href="<?php echo $this->Url->build(['controller'=>'Home', 'action'=>'index', '#'=>'contact']); ?>">お問い合わせ</a></li>
		</ul>
	</nav>