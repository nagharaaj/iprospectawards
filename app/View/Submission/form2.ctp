<script type="text/javascript">
	$(['../../img/ipg/pioneering-popup.png','../../img/ipg/ambitiously-popup.png','../../img/ipg/digital-popup.png','../../img/ipg/cultivating-popup.png']).preload();
</script>
<div class="submission-form">
	<?php echo $this->element($header); ?>
	<?php echo $this->Form->create('Cultivate', array('url' => '/submission/form2/'.$header, 'type' => 'file')); ?>
	<p class="solid-sep"><img src="../../img/ipg/solid_sep.png" /></p>
	<h2><img src="../../img/ipg/about-you-header.png" /></h2>
	<div id="form-top">
		<?php echo $this->Form->input('first_name', array('label' => 'First Name:')); ?>
		<?php echo $this->Form->input('last_name', array('label' => 'Last Name:')); ?>
		<?php echo $this->Form->input('email_address', array('label' => 'Email Address:')); ?>
		<?php echo $this->Form->input('country', array('label' => 'Country:')); ?>
	</div>
	<div id="form-middle-cultivate">
		<?php echo $this->Form->input('who', array('label' => 'Who are you submitting this for?')); ?>
		<?php echo $this->Form->input('their_email', array('label' => 'What is their Email Address?')); ?>
		<?php echo $this->Form->input('their_country', array('label' => 'What country do they work in?')); ?>
	</div>
	<div id="form-bottom">
		<h2><img src="../../img/ipg/word-submission-header.png" /> <span class="small white">(Required)</span></h2>
		<div id="no-more" class="indent">
			<p><a href="../../<?php echo strtoupper($header); ?>-FORMAT.doc" class="blue"><img src="../../img/ipg/form2-submission-details.png" /></a></p>
		</div>
		<?php if ($this->Form->isError('word_submission')): ?>
			<?php echo $this->Form->error('word_submission'); ?>
		<?php endif; ?>
		<div id="word-submission-container">
			<div class="overall-container">
				<p class="textarea-label">How do you think the employee is driving our corporate culture?</p>
				<?php echo $this->Form->textarea('driving', array('error' => false)); ?>
				<p class="arial right font-12 italic">Word Count: <span class="count">0</span> / Max word count: 150</p>
			</div>
			<div class="challenge-container">
				<p class="textarea-label">What examples can you provide that illustrate the positive impact on our culture, the employee is having?</span></p>
				<?php echo $this->Form->textarea('examples', array('error' => false)); ?>
				<p class="arial right font-12 italic">Word Count: <span class="count">0</span> / Max word count: 150</p>
			</div>
			<div class="strategy-container">
				<p class="textarea-label">How does the attitude of the employee affect the peers around them?</p>
				<?php echo $this->Form->textarea('attitude', array('error' => false)); ?>
				<p class="arial right font-12 italic">Word Count: <span class="count">0</span> / Max word count: 150</p>
			</div>
			<div class="files-container">
				<h2><img src="../../img/ipg/visual-header.png" /></h2>
				<p>Have a picture of the employee in action? Please share! Max. 3</p><br />
				<?php echo $this->Form->input('picture1', array('label' => 'Picture 1','type' => 'file', 'div' => 'input file orange')); ?>
				<?php echo $this->Form->input('picture2', array('label' => 'Picture 2','type' => 'file', 'div' => 'input file orange')); ?>
				<?php echo $this->Form->input('picture3', array('label' => 'Picture 3','type' => 'file', 'div' => 'input file orange')); ?>
			</div>
		</div>
	</div>
	<div class="center submit-container">
		<button class="submit" type="submit"></button>
		<p class="arial center">Double check all fields! This is the final "Done" button.</p>
	</div>
	
	<?php echo $this->Form->end(); ?>
</div>

<script type="text/javascript">
var $limitWords = 150;

$("#CultivateDriving, #CultivateExamples, #CultivateAttitude").each(function(e) {
	$this = $(this);
	wordCount($this);
});

$("#CultivateDriving, #CultivateExamples, #CultivateAttitude").keyup(function(e) {
    $this = $(this);
	wordCount($this);    
});

function wordCount( $this )
{
	var wordcount = $this.val().split(/\b[\s,\.-:;]*/).length;
	
	if ($this.val() == '') {
		wordcount = 0;
	}
	
    if (wordcount > $limitWords) {
        $this.addClass('error-bg');
    } else {
        $this.removeClass('error-bg');
    }
    
    $this.parent().find('.count').html(wordcount);
}
</script>
