<?php
    function getId() {
        if(isset($_GET['id'])) {
            $id=$_GET['id'];
        } else { 
                $id=1;
            }
    }

    function sosika() {
        $q=mysql_query("SELECT id,name FROM namecar");
			while ($row=mysql_fetch_array($q)){
				echo "<a href='?id=".$row['id']."'>".$row['name']."</a><br>";
			}
    }

    function hz() {
        $q=mysql_query("SELECT img_src FROM fotocar WHERE id_car='".$id."'");
		while ($row=mysql_fetch_array($q)){
			echo "<img src='".$row['img_src']."'> ";
		}
    }
?>