<?php

$params = explode('/', $_GET['url']);

if ($params[0] == 'home') {
    include ('./main/Admin.php');
    new Admin();
}
if ($params[0] == 'memo') {
    include ('./main/memo.php');
}

// $model = array_shift($params);

// include ('./models/'.$model.'.php');
// $ret = handle($params);

// extract($ret);
// include ('./views/'.$model.'.php');