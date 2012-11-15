<script type="text/javascript">
	$(['../../img/ipg/pioneering-popup.png','../../img/ipg/ambitiously-popup.png','../../img/ipg/digital-popup.png','../../img/ipg/cultivating-popup.png']).preload();
</script>
<div class="submission-form">
	<?php echo $this->element($header); ?>
	<?php echo $this->Form->create('Submission', array('url' => '/submission/form1/'.$header, 'type' => 'file')); ?>
	<p class="solid-sep"><img src="../../img/ipg/solid_sep.png" /></p>
	<h2><img src="../../img/ipg/about-you-header.png" /></h2>
	<div id="form-top">
		<?php echo $this->Form->input('first_name', array('label' => 'First Name:')); ?>
		<?php echo $this->Form->input('last_name', array('label' => 'Last Name:')); ?>
		<?php echo $this->Form->input('team_name', array('label' => 'Team Name:<br /><span class="small">(if applicable)</span>')); ?>
		<?php echo $this->Form->input('email_address', array('label' => 'Email Address:')); ?>
		<?php echo $this->Form->input('country', array('label' => 'Country:')); ?>
	</div>
	<p class="dashed-sep"><img src="../../img/ipg/dashed_sep.png" /></p>
	<h2><img src="../../img/ipg/about-submission-header.png" /></h2>
	<div id="form-middle">
		<?php echo $this->Form->input('client_name', array('label' => 'Client Name')); ?>
		<p>Service Line Used <span class="small">(Check all that apply)</span></p>
		<div id="checkboxes">
			<div class="left">
				<p><?php echo $this->Form->checkbox('seo', array('value' => 1, 'hiddenField' => false)); ?> <label for="SubmissionSeo">SEO</label></p>
				<p><?php echo $this->Form->checkbox('ppc_sem_sea', array('value' => 1, 'hiddenField' => false)); ?> <label for="SubmissionPpcSemSea">PPC/SEM/SEA</label></p>
				<p><?php echo $this->Form->checkbox('mobile', array('value' => 1, 'hiddenField' => false)); ?> <label for="SubmissionMobile">Mobile</label></p>
				<p><?php echo $this->Form->checkbox('video', array('value' => 1, 'hiddenField' => false)); ?> <label for="SubmissionVideo">Video</label></p>
				<p><?php echo $this->Form->checkbox('structured_data', array('value' => 1, 'hiddenField' => false)); ?> <label for="SubmissionStructuredData">Structured Data</label></p>
				<p><?php echo $this->Form->checkbox('social_platform_management', array('value' => 1, 'hiddenField' => false)); ?> <label for="SubmissionSocialPlatformManagement">Social Platform Management</label></p>				
			</div>
			<div class="left">
				<p><?php echo $this->Form->checkbox('display_advertising', array('value' => 1, 'hiddenField' => false)); ?> <label for="SubmissionDisplayAdvertising">Display Advertising</label></p>
				<p><?php echo $this->Form->checkbox('analytics_and_analysis', array('value' => 1, 'hiddenField' => false)); ?> <label for="SubmissionAnalyticsAndAnalysis">Analytics and Analysis</label></p>
				<p><?php echo $this->Form->checkbox('content_generation', array('value' => 1, 'hiddenField' => false)); ?> <label for="SubmissionContentGeneration">Content Generation</label></p>
				<p><?php echo $this->Form->checkbox('affiliate_program_management', array('value' => 1, 'hiddenField' => false)); ?> <label for="SubmissionAffiliateProgramManagement">Affiliate Program Management</label></p>
				<p><?php echo $this->Form->checkbox('conversion_optimization', array('value' => 1, 'hiddenField' => false)); ?> <label for="SubmissionConversionOptimization">Conversion Optimization</label></p>
				<p><?php echo $this->Form->checkbox('other', array('value' => 1, 'hiddenField' => false)); ?> <label for="SubmissionOther">Other</label> <?php echo $this->Form->input('other_text', array('label' => false, 'div' => false, 'error' => false)); ?><p class="other-error"><?php echo $this->Form->error('other_text', null, array('wrap' => false)); ?></p></p>				
			</div>
			<div class="clear"></div>
		</div>
		<p class="dashed-sep"><img src="../../img/ipg/dashed_sep.png" /></p>
	</div>
	<div id="form-bottom">
		<div id="dont-forget">
			<div class="left">
				<p class="dk-crayon-crumble green">Don't Forget:</p>
			</div>
			<div class="right">
				<p class="drawing-guides blue">English Only</p>
				<p class="bottom dk-crayon-crumble">For all Submission Materials</p>
			</div>
			<div class="clear"></div>
		</div>
		<h2><img src="../../img/ipg/word-submission-header.png" /> <span class="small white">(Required)</span></h2>
		<div id="no-more" class="indent">
			<p>We want no more than 600 words in total and 150 per section.</p>
			<p>Be clear and concise. <a href="../../<?php echo strtoupper($header); ?>-FORMAT.doc" class="blue">Download Word Submission Format Here</a> <span class="white">&#9654;</span></p>
		</div>
		<?php if ($this->Form->isError('word_submission')): ?>
			<?php echo $this->Form->error('word_submission'); ?>
		<?php endif; ?>
		<div id="word-submission-container">
			<div class="overall-container">
				<p class="textarea-label">Overall Summary <span class="arial font-10">(brief summarization of the featured submission)</span></p>
				<?php echo $this->Form->textarea('overall_summary', array('error' => false)); ?>
				<p class="arial right font-12 italic">Word Count: <span class="count">0</span> / Max word count: 150</p>
			</div>
			<div class="challenge-container">
				<p class="textarea-label">Challenge/Objective <span class="arial font-10">(what were you trying to achieve for the client or what obstacle did they need you to overcome)</span></p>
				<?php echo $this->Form->textarea('challenge', array('error' => false)); ?>
				<p class="arial right font-12 italic">Word Count: <span class="count">0</span> / Max word count: 150</p>
			</div>
			<div class="strategy-container">
				<p class="textarea-label">Strategy/Tactics <span class="arial font-10">(share more than just the services employed...share your strategic process)</span></p>
				<?php echo $this->Form->textarea('strategy', array('error' => false)); ?>
				<p class="arial right font-12 italic">Word Count: <span class="count">0</span> / Max word count: 150</p>
			</div>
			<div class="result-container">
				<p class="textarea-label">Results/Solutions <span class="arial font-10">(what success did you bring to your client)</span></p>
				<?php echo $this->Form->textarea('results', array('error' => false)); ?>
				<p class="arial right font-12 italic">Word Count: <span class="count">0</span> / Max word count: 150</p>
			</div>
		</div>
		
		<div class="files-container">
			<h2>Visual Representation <span class="small white">(required to submit at least one visual)</span></h2>
			<p class="solid-sep"><img src="../../img/ipg/solid_sep.png" /></p>
			<?php if ($this->Form->isError('files_submission')): ?>
				<?php echo $this->Form->error('files_submission'); ?>
			<?php endif; ?>
			<?php echo $this->Form->input('storyboard', array('label' => 'Storyboard','type' => 'file')); ?>
			<?php echo $this->Form->input('ppt', array('label' => 'PPT <span class="small">(5 Slides - Keep it visual)</span>','type' => 'file')); ?>
			<?php echo $this->Form->input('video', array('label' => 'Video <span class="small">(2 min. max)</span>','type' => 'file')); ?>
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

$("#SubmissionOverallSummary, #SubmissionChallenge, #SubmissionStrategy, #SubmissionResults").each(function(e) {
	$this = $(this);
	wordCount($this);
});

$("#SubmissionOverallSummary, #SubmissionChallenge, #SubmissionStrategy, #SubmissionResults").keyup(function(e) {
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