<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List Page</title>
</head>
<body>
<?php foreach ($login as $login) { ?></br>
  <div class="list-group-item clearfix">
    <?php echo $login->username; ?>
    <?php echo $login->email; ?>
  </div>
<?php } ?>
</body>
</html>
