<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('ipg');
		echo $this->Html->css('fancybox2/jquery.fancybox');
		echo $this->Html->script('jquery-1.8.2.min');
		echo $this->Html->script('jquery.fancybox.pack');
	?>
	
</head>
<body>
	<div id="container">
		<div id="header">
			<ul id="navigation">
				<li class="home<?php echo ($currentPage == 'home'?'-current':''); ?>"><a href="/"><span>Home</span></a></li>
				<li class="message<?php echo ($currentPage == 'message'?'-current':''); ?>"><a href="/message"><span>Message</span></a></li>
				<li class="categories<?php echo ($currentPage == 'categories'?'-current':''); ?>"><a href="/categories"><span>Categories</span></a></li>
				<li class="judging<?php echo ($currentPage == 'judging'?'-current':''); ?>"><a href="/judging"><span>Judging</span></a></li>
				<li class="awards<?php echo ($currentPage == 'awards'?'-current':''); ?>"><a href="/awards"><span>Awards</span></a></li>
				<li class="submission-form<?php echo ($currentPage == 'form'?'-current':''); ?>"><a href="#"><span>Submission Form</span></a></li>
			</ul>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
			
		</div>
		<div id="push"></div>
	</div>
	<div id="footer">
		<div class="wrapper">
			<div class="left"><a id="footer-logo" href="#"></a></div>
			<div class="right"><a id="footer-button" href="#"></a></div>
		</div>
	</div>
</body>
</html>
