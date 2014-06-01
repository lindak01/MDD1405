<?php

class view{
    
    public function show($template, $data = array()) {
        $templatePath = "pages/${template}.inc";
        if (file_exists($templatePath)) {
            include $templatePath;
        }
    }
}
?>