<?php print_r($data); ?>
<?php print_r($uploadData); ?>

<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>

Form Type:
<?php echo $type; ?>

Name :
<?php echo $data['Submission']['first_name']; ?> <?php echo $data['Submission']['last_name']; ?>

<?php if (!empty($data['Submission']['team_name'])): ?>
Team Name :
<?php echo $data['Submission']['team_name']; ?>
<?php endif; ?>

E-mail Address:
<?php echo $data['Submission']['email_address']; ?>

Country:
<?php echo $data['Submission']['country']; ?>

Client Name:
<?php echo $data['Submission']['client_name']; ?>

Service Lines Used:
<?php echo ((isset($data['Submission']['seo']) && !empty($data['Submission']['seo']))?'SEO':''); ?>