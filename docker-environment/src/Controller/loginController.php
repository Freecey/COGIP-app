<?php

declare(strict_types=1);

class LoginController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {
        // global $url;
        $view = $_SERVER['DOCUMENT_ROOT'] . '/View/connexion.php';

        //load the view
        require $view;
    }
}
