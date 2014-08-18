<p><strong>Form Type:</strong><br />
<?php echo $type; ?></p>

<p><strong>Name:</strong><br />
<?php echo $data['Submission']['first_name']; ?> <?php echo $data['Submission']['last_name']; ?></p>

<?php if (!empty($data['Submission']['team_name'])): ?>
<p><strong>Team Name:</strong><br />
<?php echo $data['Submission']['team_name']; ?></p>
<?php endif; ?>

<p><strong>Email Address:</strong><br />
<?php echo $data['Submission']['email_address']; ?></p>

<p><strong>Country:</strong><br />
<?php echo $data['Submission']['country']; ?></p>

<p><strong>Client Name:</strong><br />
<?php echo $data['Submission']['client_name']; ?></p>

<p><strong>Service Lines Used:</strong><br />
<?php echo ((isset($data['Submission']['seo']) && !empty($data['Submission']['seo']))?'SEO<br />':''); ?>
<?php echo ((isset($data['Submission']['ppc_sem_sea']) && !empty($data['Submission']['ppc_sem_sea']))?'PPC/SEM/SEA<br />':''); ?>
<?php echo ((isset($data['Submission']['mobile']) && !empty($data['Submission']['mobile']))?'Mobile<br />':''); ?>
<?php echo ((isset($data['Submission']['video']) && !empty($data['Submission']['video']))?'Video<br />':''); ?>
<?php echo ((isset($data['Submission']['structured_data']) && !empty($data['Submission']['structured_data']))?'Structured Data<br />':''); ?>
<?php echo ((isset($data['Submission']['social_platform_management']) && !empty($data['Submission']['social_platform_management']))?'Social Platform Management<br />':''); ?>
<?php echo ((isset($data['Submission']['display_advertising']) && !empty($data['Submission']['display_advertising']))?'Display Advertising<br />':''); ?>
<?php echo ((isset($data['Submission']['analytics_and_analysis']) && !empty($data['Submission']['analytics_and_analysis']))?'Analytics and Analysis<br />':''); ?>
<?php echo ((isset($data['Submission']['content_generation']) && !empty($data['Submission']['content_generation']))?'Content Generation<br />':''); ?>
<?php echo ((isset($data['Submission']['affiliate_program_management']) && !empty($data['Submission']['affiliate_program_management']))?'Affiliate Program Management<br />':''); ?>
<?php echo ((isset($data['Submission']['conversion_optimization']) && !empty($data['Submission']['conversion_optimization']))?'Conversion Optimization<br />':''); ?>
<?php echo ((isset($data['Submission']['other_text']) && !empty($data['Submission']['other_text']))?'Other: '.$data['Submission']['other_text'].'<br />':''); ?>
</p>

<?php if ($type == 'pioneering' && !empty($data['Submission']['budget'])) { ?>
<p><strong>Budget:</strong><br />
<?php echo ucfirst($data['Submission']['budget']) . ' Budget'; ?></p>
<?php } ?>

<?php if ($type == 'digital' && !empty($data['Submission']['scale'])) { ?>
<p><strong>Scale:</strong><br />
<?php echo ucfirst($data['Submission']['scale']) . ' Scale'; ?></p>
<?php } ?>

<?php if ($type == 'vertical' && !empty($data['Submission']['vertical'])) { ?>
<p><strong>Vertical Spotlight:</strong><br />
<?php echo (($data['Submission']['vertical'] == 'finance') ? 'Finance/Insurance' : (($data['Submission']['vertical'] == 'b2b') ? 'B2B' : '')); ?></p>
<?php } ?>

<?php if ($type == 'service' && !empty($data['Submission']['service'])) { ?>
<p><strong>Service Spotlight:</strong><br />
<?php echo (($data['Submission']['service'] == 'mobile') ? 'Mobile' : (($data['Submission']['service'] == 'content') ? 'Content Generation' : '')); ?></p>
<?php } ?>

<?php if (!empty($data['Submission']['overall_summary'])): ?>
<p><strong>Overall Summary:</strong><br />
<?php echo nl2br($data['Submission']['overall_summary']); ?></p>
<?php endif; ?>

<?php if (!empty($data['Submission']['challenge'])): ?>
<p><strong>Challenge/Objective:</strong><br />
<?php echo nl2br($data['Submission']['challenge']); ?></p>
<?php endif; ?>

<?php if (!empty($data['Submission']['strategy'])): ?>
<p><strong>Strategy/Tactics:</strong><br />
<?php echo nl2br($data['Submission']['strategy']); ?></p>
<?php endif; ?>

<?php if (!empty($data['Submission']['results'])): ?>
<p><strong>Results/Solutions:</strong><br />
<?php echo nl2br($data['Submission']['results']); ?></p>
<?php endif; ?>

<?php if (isset($uploadData['storyboard']) && !empty($uploadData['storyboard']['path'])): ?>
<p><strong>Storyboard File:</strong><br />
<a href="<?php echo 'http://'.rtrim(rtrim($_SERVER['HTTP_HOST'], '/'), '/').$uploadData['storyboard']['path']; ?>"><?php echo 'http://'.rtrim($_SERVER['HTTP_HOST'], '/').$uploadData['storyboard']['path']; ?></a></p>
<?php endif; ?>

<?php if (isset($uploadData['ppt']) && !empty($uploadData['ppt']['path'])): ?>
<p><strong>PPT File:</strong><br />
<a href="<?php echo 'http://'.rtrim($_SERVER['HTTP_HOST'], '/').$uploadData['ppt']['path']; ?>"><?php echo 'http://'.rtrim($_SERVER['HTTP_HOST'], '/').$uploadData['ppt']['path']; ?></a></p>
<?php endif; ?>

<?php if (isset($uploadData['video']) && !empty($uploadData['video']['path'])): ?>
<p><strong>Video File:</strong><br />
<a href="<?php echo 'http://'.rtrim($_SERVER['HTTP_HOST'], '/').$uploadData['video']['path']; ?>"><?php echo 'http://'.rtrim($_SERVER['HTTP_HOST'], '/').$uploadData['video']['path']; ?></a></p>
<?php endif; ?>