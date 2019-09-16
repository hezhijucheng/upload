<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/16
 * Time: 10:32
 */

require '../vendor/autoload.php';

$upload = new upload\Upload($_FILES['file']['tmp_name'],$_POST['blob_num'],$_POST['total_blob_num'],$_POST['file_name'],$_POST['md5_file_name'],"./upload2");

$upload->apiReturn();