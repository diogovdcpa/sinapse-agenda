<!doctype html>
<html language="pt-br">
	<meta charset="utf-8">
	<thead>
		<title>Agenda</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo ASSETS ?>css/grade.css">
		<link rel="stylesheet" href="<?php echo ASSETS ?>css/style.css">
	</thead>
	<body>
        <?php include_once("header.php") ?>
        
        <?php $this->load($view,$viewData); ?>
        
		<?php include_once("footer.php") ?>
		
	</body>
</html>