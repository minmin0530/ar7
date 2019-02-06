<?php

class Admin {
    function __construct() {
        echo "<h1>管理画面</h1>";
        echo "<h2>記事作成</h2>";

        $filename = './memo.php';
 
 //       mkdir('memo');
        include('./admin/editor.html');
//        file_put_contents($filename, '<?php echo "ファイル作成しました。"; ');
 
    }
}