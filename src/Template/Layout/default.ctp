<!DOCTYPE html>
<html>
<head>
    <?=$this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/slick.css">
	<?=$this->Html->css('style.css?20201004') ?>
	<?=$this->Html->script('common') ?>
</head>

<body>
	<header id="header" class="header fixed sticky_header">
		<?=$this->element('header') ?>
	</header>

	
	<div class="mask" id="mask"></div>

	<main class="under_main">
		<?=$this->fetch('content') ?>
		<?=$this->element('page_top') ?>
	</main>
	
	<footer>
		<?=$this->element('footer') ?>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<?=$this->Html->script('slick.min') ?>
	<?=$this->Html->script('script') ?>
</body>

</html>