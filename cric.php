<?php 
//http://cricscore-api.appspot.com/csa
$data=file_get_contents('http://cricscore-api.appspot.com/csa?id=1122281');
$x=json_decode($data);
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $x[0]->de; ?></title>
<meta http-equiv="refresh" content="30" />
</head>
<body>
</body>
</html>