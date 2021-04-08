<?php
declare(strict_types=1);
session_start();
var_dump($_SESSION);
//  phpinfo();
//  die();

$url = '';
if (isset($_GET['url'])) { //vérifier si mon url est vide sinon explode
    $url = explode('/', $_GET['url']); // definir le format de l'url
}
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/CompanyController.php';
require 'Controller/InvoiceController.php';
require 'Controller/ContactController.php';
require 'Controller/ProvidersController.php';
require 'Controller/ClientController.php';
require 'Controller/ConnexionController.php';
require 'Controller/AdminController.php';

//Your index is your Router. You could write a simple IF here based on some $_GET or $_POST vars, to choose your controller

$controller = new HomepageController();


if (isset($url[0]) && $url[0] === 'companies') {
    $controller = new CompanyController();
} elseif (isset($url[0]) && $url[0] === 'invoices') {
    $controller = new InvoiceController();
} elseif (isset($url[0]) && $url[0] === 'contacts') {
    $controller = new ContactController();
} elseif (isset($url[0]) && $url[0] === 'providers') {
    $controller = new ProviderController();
} elseif (isset($url[0]) && $url[0] === 'clients') {
    $controller = new ClientController();
} elseif (isset($url[0]) && $url[0] === 'login') {
    $controller = new ConnexionController();
} elseif (isset($url[0]) && $url[0] ==='newcontact') {
    $controller = new AdminController();
} elseif (isset($url[0]) && $url[0] ==='newcompany') {
    $controller = new AdminController();
} elseif (isset($url[0]) && $url[0] ==='newinvoice') {
    $controller = new AdminController();
} elseif (isset($url[0]) && $url[0] ==='editcontact') {
    $controller = new AdminController();
} elseif (isset($url[0]) && $url[0] ==='editcompany') {
    $controller = new AdminController();
} elseif (isset($url[0]) && $url[0] ==='editinvoice') {
    $controller = new AdminController();
} elseif (isset($url[0]) && $url[0] ==='moderation') {
    $controller = new AdminController();
}

$controller->render();
