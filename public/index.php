<?php



switch ($_SERVER['REQUEST_URI']) {
    case '/':
        # code...
        require_once realpath(__DIR__).'/../views/home.php';
        break;

    case '/about':
        # code...
        require_once realpath(__DIR__).'/../views/about.php';
        break;

    case '/blog':
        # code...
        require_once realpath(__DIR__).'/../controllers/blog.php';
        break;
    case '/detail':
        # code...
        require_once realpath(__DIR__).'/../controllers/detail.php';
        break;
    case '/admin':
        # code...
        require_once realpath(__DIR__).'/../controllers/admin/index.php';
        break;
    case '/add':
        # code...
        require_once realpath(__DIR__).'/../controllers/admin/add.php';
        break;
    default:
        # code...
        $url = $_SERVER['REQUEST_URI'];

        parse_str(parse_url($url, PHP_URL_QUERY), $arr);

        echo $arr['id'];
        break;
}

?>
