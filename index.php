<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Title</title>
</head>
<body>
<?php $script = 'eK19'; // change to yor prefix ?>
<?php $script .= base64_encode(file_get_contents('main.js')); ?>
<?php $script .= 'eK19'; // change to yor suffix ?>

<script src="crypt.js"></script>
<script>
  glob('<?php echo $script; ?>')
</script>
</body>
</html>