<p>Form Type:<br />
<?php echo $type; ?></p>

<p>Name:<br />
<?php echo $data['Submission']['first_name']; ?> <?php echo $data['Submission']['last_name']; ?></p>

<?php if (!empty($data['Submission']['team_name'])): ?>
<p>Team Name:<br />
<?php echo $data['Submission']['team_name']; ?></p>
<?php endif; ?>

<p>E-mail Address:<br />
<?php echo $data['Submission']['email_address']; ?></p>

<p>Country:<br />
<?php echo $data['Submission']['country']; ?></p>

<p>Client Name:<br />
<?php echo $data['Submission']['client_name']; ?></p>

<p>Service Lines Used:<br />
<?php echo ((isset($data['Submission']['seo']) && !empty($data['Submission']['seo']))?'SEO':''); ?><br />
<?php echo ((isset($data['Submission']['ppc_sem_sea']) && !empty($data['Submission']['ppc_sem_sea']))?'PPC/SEM/SEA':''); ?><br />
<?php echo ((isset($data['Submission']['mobile']) && !empty($data['Submission']['mobile']))?'Mobile':''); ?><br />
<?php echo ((isset($data['Submission']['video']) && !empty($data['Submission']['video']))?'Video':''); ?><br />
<?php echo ((isset($data['Submission']['structured_data']) && !empty($data['Submission']['structured_data']))?'Structured Data':''); ?><br />
<?php echo ((isset($data['Submission']['social_platform_management']) && !empty($data['Submission']['social_platform_management']))?'Social Platform Management':''); ?><br />
<?php echo ((isset($data['Submission']['display_advertising']) && !empty($data['Submission']['display_advertising']))?'Display Advertising':''); ?><br />
<?php echo ((isset($data['Submission']['analytics_and_analysis']) && !empty($data['Submission']['analytics_and_analysis']))?'Analytics and Analysis':''); ?><br />
<?php echo ((isset($data['Submission']['content_generation']) && !empty($data['Submission']['content_generation']))?'Content Generation':''); ?><br />
<?php echo ((isset($data['Submission']['affiliate_program_management']) && !empty($data['Submission']['affiliate_program_management']))?'Affiliate Program Management':''); ?><br />
<?php echo ((isset($data['Submission']['conversion_optimization']) && !empty($data['Submission']['conversion_optimization']))?'Conversion Optimization':''); ?><br />
<?php echo ((isset($data['Submission']['other']) && !empty($data['Submission']['seo']))?'Other: ':''); ?><?php echo ((isset($data['Submission']['other_text']) && !empty($data['Submission']['other_text']))?$data['Submission']['other_text']:''); ?><br />
</p>

<?php if (!empty($data['Submission']['overall_summary'])): ?>
<p>Overall Summary:<br />
<?php echo nl2br($data['Submission']['overall_summary']); ?></p>
<?php endif; ?>

<?php if (!empty($data['Submission']['challenge'])): ?>
<p>Challenge/Objective:<br />
<?php echo nl2br($data['Submission']['challenge']); ?></p>
<?php endif; ?>

<?php if (!empty($data['Submission']['strategy'])): ?>
<p>Strategy/Tactics:<br />
<?php echo nl2br($data['Submission']['strategy']); ?></p>
<?php endif; ?>

<?php if (!empty($data['Submission']['results'])): ?>
<p>Results/Solutions:<br />
<?php echo nl2br($data['Submission']['results']); ?></p>
<?php endif; ?>

<?php if (isset($uploadData['storyboard']) && !empty($uploadData['storyboard']['path'])): ?>
<p>Storyboard File:<br />
<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>/<?php echo $uploadData['storyboard']['path']; ?>"><?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>/<?php echo $uploadData['storyboard']['path']; ?></a></p>
<?php endif; ?>

<?php if (isset($uploadData['ppt']) && !empty($uploadData['ppt']['path'])): ?>
<p>PPT File:<br />
<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>/<?php echo $uploadData['ppt']['path']; ?>"><?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>/<?php echo $uploadData['ppt']['path']; ?></a></p>
<?php endif; ?>

<?php if (isset($uploadData['video']) && !empty($uploadData['video']['path'])): ?>
<p>Video File:<br />
<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>/<?php echo $uploadData['video']['path']; ?>"><?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>/<?php echo $uploadData['video']['path']; ?></a></p>
<?php endif; ?>