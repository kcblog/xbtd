<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>雄霸天地</title>

	<!-- Bootstrap core CSS -->
	<?php echo $this->Html->css('bootstrap.min'); ?>
	<!-- Bootstrap theme CSS -->
	<?php echo $this->Html->css('bootstrap-theme.min'); ?>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	<style>
		body {
			padding-top: 20px;
			padding-bottom: 20px;
		}

		.navbar {
			margin-bottom: 20px;
		}
	</style>
	<?php echo $this->fetch('style'); ?>

</head>
<body>
	<div class="container">
		<!-- Static navbar -->
		<div class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<?php echo $this->Html->link('雄霸天地', array('action' => 'display', 'home'), array('class' => 'navbar-brand')); ?>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li<?php echo ($this->params['pass'][0] == 'home' ? ' class="active"' : ''); ?>><?php echo $this->Html->link('主頁', array('action' => 'display', 'home'), array('class' => 'navbar-brand')); ?></li>
					<li<?php echo ($this->params['pass'][0] == 'wjlb' ? ' class="active"' : ''); ?>><?php echo $this->Html->link('武將列表', array('action' => 'display', 'wjlb', 'ext' => 'html'), array('class' => 'navbar-brand')); ?></li>
					<li<?php echo ($this->params['pass'][0] == 'zbdl' ? ' class="active"' : ''); ?>><?php echo $this->Html->link('裝備掉落', array('action' => 'display', 'zbdl', 'ext' => 'html'), array('class' => 'navbar-brand')); ?></li>
					<li<?php echo ($this->params['pass'][0] == 'jnb' ? ' class="active"' : ''); ?>><?php echo $this->Html->link('技能升級', array('action' => 'display', 'jnsj', 'ext' => 'html'), array('class' => 'navbar-brand')); ?></li>
					<li<?php echo ($this->params['pass'][0] == 'sjjl' ? ' class="active"' : ''); ?>><?php echo $this->Html->link('刷將機率', array('action' => 'display', 'sjjl', 'ext' => 'html'), array('class' => 'navbar-brand')); ?></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>

		<div class="page-header">
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>
		</div>
	</div>

	<footer class="bs-footer" role="contentinfo">
		<div class="container">
			<p>Copyright &copy; <?php echo $this->Html->link('eChin Network', 'http://echin.net/'); ?>. All Rights Reserved.</p>
		</div>
	</footer>

<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<?php echo $this->Html->script('//code.jquery.com/jquery-1.10.2.min.js'); ?>
<?php echo $this->Html->script('bootstrap.min'); ?>
<?php echo $this->fetch('script'); ?>
</body>
</html>