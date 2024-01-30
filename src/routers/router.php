<?php
// List of routes
$router->map('GET', '/', 'defaultController#home', 'index');

$router->map('GET', '/login', 'loginController#login', 'login');
$router->map('POST', '/login', 'loginController#validate', 'validate');
$router->map('GET', '/logout', 'loginController#logout', 'logout');

if (isset($_SESSION['id'])) {

  $router->map('GET', '/companie', 'CompanieController#index', 'companies-list');
  $router->map('GET', '/companie/[i:id]/edit', 'CompanieController#edit', 'companie_edit');
  $router->map('POST', '/companie/update', 'CompanieController#update', 'companie_update');
  $router->map('GET', '/companie/[i:id]/delete', 'CompanieController#delete', 'companie_delete');
  $router->map('GET', '/companie/create', 'CompanieController#create', 'companie_create');
  $router->map('POST', '/companie', 'CompanieController#post', 'companie_post');


  $router->map('GET', '/choice', 'ChoiceController#index', 'choice_list');
}
