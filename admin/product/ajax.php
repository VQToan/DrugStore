<?php
require_once ('../db/dbhelper.php');
if (!empty($_POST)) {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $img=executeSingleResult('select * from product where id ='.$id)['image'];
        $imgSrc='../images/'.$_POST['img'];
        $imgSrc='../images/'.$img;
        $sql = 'delete from product where id ='.$id;
        execute($sql);
        if (file_exists($imgSrc)) unlink($imgSrc);
	}
}
?>