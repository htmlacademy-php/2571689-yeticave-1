require_once('templates/data.php');
require_once('function/formatPrice.php');

/**
 * Подключает шаблон и передает туда данные
 * @param $pageData Путь к файлу шаблона относительно папки templates
 * @param array $categories
 * @param array $lots
 */
function $pageData = include_template('main.php', ['categories' => $categories, 'lots' => $lots,
]);
function $layoutContent = include_template('layout.php' ['content' => $pageData,
'title' => "Yeti Cave",
'isAuth' => $isAuth,
'userName'=> $userName,
'categories' => $categories,
]);

print($layoutContent);
