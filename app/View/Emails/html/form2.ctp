<p><strong>Form Type:</strong><br />
<?php echo $type; ?></p>

<p><strong>Name:</strong><br />
<?php echo $data['Cultivate']['first_name']; ?> <?php echo $data['Cultivate']['last_name']; ?></p>

<p><strong>Email Address:</strong><br />
<?php echo $data['Cultivate']['email_address']; ?></p>

<p><strong>Country:</strong><br />
<?php echo $data['Cultivate']['country']; ?></p>

<p><strong>Who are you submitting this for?</strong><br />
<?php echo $data['Cultivate']['who']; ?></p>

<p><strong>What is their Email Address?</strong><br />
<?php echo $data['Cultivate']['their_email']; ?></p>

<p><strong>What country do they work in?</strong><br />
<?php echo $data['Cultivate']['their_country']; ?></p>

<?php if (!empty($data['Cultivate']['driving'])): ?>
<p><strong>How do you think the employee is driving our corporate culture?</strong><br />
<?php echo nl2br($data['Cultivate']['driving']); ?></p>
<?php endif; ?>

<?php if (!empty($data['Cultivate']['examples'])): ?>
<p><strong>What examples can you provide that illustrate the positive impact on our culture, the employee is having?</strong><br />
<?php echo nl2br($data['Cultivate']['examples']); ?></p>
<?php endif; ?>

<?php if (!empty($data['Cultivate']['attitude'])): ?>
<p><strong>How does the attitude of the employee affect the peers around them?</strong><br />
<?php echo nl2br($data['Cultivate']['attitude']); ?></p>
<?php endif; ?>

<?php if (isset($uploadData['picture1']) && !empty($uploadData['picture1']['path'])): ?>
<p><strong>Storyboard File:</strong><br />
<a href="<?php echo 'http://'.rtrim(rtrim($_SERVER['HTTP_HOST'], '/'), '/').$uploadData['picture1']['path']; ?>"><?php echo 'http://'.rtrim($_SERVER['HTTP_HOST'], '/').$uploadData['picture1']['path']; ?></a></p>
<?php endif; ?>

<?php if (isset($uploadData['picture2']) && !empty($uploadData['picture2']['path'])): ?>
<p><strong>PPT File:</strong><br />
<a href="<?php echo 'http://'.rtrim($_SERVER['HTTP_HOST'], '/').$uploadData['picture2']['path']; ?>"><?php echo 'http://'.rtrim($_SERVER['HTTP_HOST'], '/').$uploadData['picture2']['path']; ?></a></p>
<?php endif; ?>

<?php if (isset($uploadData['picture3']) && !empty($uploadData['picture3']['path'])): ?>
<p><strong>Video File:</strong><br />
<a href="<?php echo 'http://'.rtrim($_SERVER['HTTP_HOST'], '/').$uploadData['picture3']['path']; ?>"><?php echo 'http://'.rtrim($_SERVER['HTTP_HOST'], '/').$uploadData['picture3']['path']; ?></a></p>
<?php endif; ?>