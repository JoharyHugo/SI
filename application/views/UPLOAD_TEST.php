<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test upload</title>
</head>
<body>
	<b><?php if(isset($response)) echo $response; ?></b>
	<form action='<?php echo base_url("CSV/index"); ?>' method='get'>
		<label>test uploading file</label>
		<input type="file" name="upload">
		<input type="submit" value="upload">
	</form>
</body>
</html>