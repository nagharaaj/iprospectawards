<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<p>Form Type:<br />
<?php echo $type; ?></p>

<p>Name :<br />
<?php echo $data['Submission']['first_name']; ?> <?php echo $data['Submission']['last_name']; ?></p>

<?php if (!empty($data['Submission']['team_name'])): ?>
<p>Team Name :<br />
<?php echo $data['Submission']['team_name']; ?></p>
<?php endif; ?>

<p>E-mail Address:<br />
<?php echo $data['Submission']['email_address']; ?></p>

<p>Country:<br />
<?php echo $data['Submission']['country']; ?></p>

<p>Client Name:<br />
<?php echo $data['Submission']['client_name']; ?></p>

<p>Service Lines Used:<br />
<?php echo ((isset($data['Submission']['seo']) && !empty($data['Submission']['seo']))?'SEO':''); ?></p>