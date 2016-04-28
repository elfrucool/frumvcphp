<?php
class HelloController {
    function index($request) {
        return new ModelAndView(array("name" => "World"), "index");
    }
}
?>
