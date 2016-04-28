<?php
class ModelAndView {
    private $model = array();
    private $view = "";

    function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    function getModel() {
        return $this->model;
    }

    function getView() {
        return $this->view;
    }
}
?>
