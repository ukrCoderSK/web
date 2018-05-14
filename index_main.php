<!DOCTYPE html>
<html>
<?php 
	include "head.php"; 
	include "start.php"; 
?>
<?php
	if(isset($_GET['id'])){
	$id=$_GET['id'];}else{$id=1;}
?>
<body>
<div id="main">
	<div id="logo">Сучаснi електро-кари</div>
	<div id="menu">
		<?php
			$q=mysql_query("SELECT id,name FROM namecar");
		while ($row=mysql_fetch_array($q)){
		echo "<a href='?id=".$row['id']."'>".$row['name']."</a><br>";
		}
			
		?>
	</div>
	<div id="content">
	<?php
		$q=mysql_query("SELECT img_src FROM fotocar WHERE id_car='".$id."'");
		while ($row=mysql_fetch_array($q)){
		echo "<img src='".$row['img_src']."'> ";
		}
	?>
	</div>
</div>

</body>
</html>