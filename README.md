# upload
===

## 大文件分段上传有进度条


## 安装

### Composer

upload采用composer进行安装，要使用upload功能，只需要在composer.json中添加如下依赖：

```json
{
  "require": {
    "jucheng/upload": "1.*"
  }
}
```


### 手动

1. 手动下载或clone最新版本upload代码
2. 把upload放入项目目录
3. `require` upload src目录下面的upload.php，即可使用，如把upload放在当前目录下，只需要:

```php
require __DIR__ . "/upload/src/upload.php";
```

## 用法


- **app唤起支付**

```php
$upload_path="./upload2";//文件储存位置
$upload = new upload\Upload($_FILES['file']['tmp_name'],$_POST['blob_num'],$_POST['total_blob_num'],$_POST['file_name'],$_POST['md5_file_name'],$upload_path);

$upload->apiReturn();
```

- **前端在test文件夹中可以查看test文件**



- **效果图如下**




