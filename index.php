<?php
$CONFIG = init();
$controllerName = _get($_GET, 'controller', $CONFIG['DEFAULT_CONTROLLER']);
$controllerClassName = "{$controllerName}Controller";
$action = _get($_GET, 'action', $CONFIG['DEFAULT_ACTION']);
require_once("controllers/{$controllerClassName}.php");
$controller = new $controllerClassName();
$modelAndView = $controller->$action($_REQUEST);
extract($modelAndView->getModel());
require_once("views/$controllerName/{$modelAndView->getView()}.php");

function init() {
    require_once("ModelAndView.php");
    return array(
        "DEFAULT_CONTROLLER" => "Hello",
        "DEFAULT_ACTION" => "index"
    );
}

function _get($array, $field, $default = NULL) {
    return array_key_exists($field, $array) ? $array[$field] : $default;
}
?>
