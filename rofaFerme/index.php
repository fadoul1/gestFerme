<?php

require 'app/App.php';
App::load();

$app = App::getInstance();

$router = new App\Router\Router(@$_GET['url']);

$router->get('/', function() {
    require 'app/Views/index.php';
});

$router->get('/error', function() {
    require 'app/Views/erreur/404.html';
});

$router->get('/admin/error', function() {
    require 'app/Views/admin/erreur/404.html';
});

$router->get('/admin', "Admin\Admins#index");$router->get('/admin/error', function() {
    require 'app/Views/admin/erreur/404.html';
});


$router->get('/produits', "Produits#index");
$router->get('/equipements', "Equipements#index");
$router->get('/apropos', function() {
    require 'app/Views/apropos.html';
});


$router->get('/admin/login', "Admins#login");

$router->post('/admin/login', "Admins#login");

//****************************Produit****************************************

$router->get('/admin/produit/:id', "Admin\Produits#show")->with('id', '[0-9]+');

$router->get('/admin/produit/add', "Admin\Produits#create");

$router->post('/admin/produit/add', "Admin\Produits#create");

$router->get('/admin/produit/liste', "Admin\Produits#index");

$router->get('/admin/produit/liste/:slug', "Admin\Produits#index")->with('slug', '([a-z\-0-9]+)');

$router->get('/admin/produit/edit/:id', "Admin\Produits#edit")->with('id', '[0-9]+');

$router->post('/admin/produit/edit/:id', "Admin\Produits#edit")->with('id', '[0-9]+');

$router->get('/admin/produit/delete/:id', "Admin\Produits#delete")->with('id', '[0-9]+');

//*******************************Employé****************

$router->get('/admin/employe/:id', "Admin\Employes#show")->with('id', '[0-9]+');

$router->get('/admin/employe/add', "Admin\Employes#create");

$router->post('/admin/employe/add', "Admin\Employes#create");

$router->get('/admin/employe/liste', "Admin\Employes#index");

$router->get('/admin/employe/liste/:slug', "Admin\Employes#index")->with('slug', '([a-z\-0-9]+)');

$router->get('/admin/employe/liste/:slug', "Admin\Employes#index")->with('slug', '([a-z\-0-9]+)');

$router->get('/admin/employe/edit/:id', "Admin\Employes#edit")->with('id', '[0-9]+');

$router->post('/admin/employe/edit/:id', "Admin\Employes#edit")->with('id', '[0-9]+');

$router->get('/admin/employe/delete/:id', "Admin\Employes#delete")->with('id', '[0-9]+');


//*******************************Equipements****************

$router->get('/admin/equipement/:id', "Admin\Equipements#show")->with('id', '[0-9]+');

$router->get('/admin/equipement/add', "Admin\Equipements#create");

$router->post('/admin/equipement/add', "Admin\Equipements#create");

$router->get('/admin/equipement/list', "Admin\Equipements#index");

$router->get('/admin/equipement/list/:slug', "Admin\Equipements#index")->with('slug', '([a-z\-0-9]+)');

$router->get('/admin/equipement/edit/:id', "Admin\Equipements#edit")->with('id', '[0-9]+');

$router->post('/admin/equipement/edit/:id', "Admin\Equipements#edit")->with('id', '[0-9]+');

$router->get('/admin/equipement/delete/:id', "Admin\Equipements#delete")->with('id', '[0-9]+');

//*******************************Admin****************

$router->get('/admin/add', "Admin\Admins#create");
$router->post('/admin/add', "Admin\Admins#create");
$router->get('/admin/edit', "Admin\Admins#newPasseword");
$router->post('/admin/edit', "Admin\Admins#newPasseword");
$router->get('/admin/logout', "Admins#logout");



$router->run();
