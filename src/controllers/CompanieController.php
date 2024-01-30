<?php

namespace Dsw\Fct\Controllers;

use Dsw\Fct\Controllers\Controller;
use Dsw\Fct\Models\Companie;

require_once('../src/connection.php');

class CompanieController extends Controller
{
  public function index()
  {
    $companies = Companie::all();
    $router = $this->router;
    echo $this->blade->make('companie.list', compact("companies", "router"))->render();
  }

  public function create()
  {
    $router = $this->router;
    echo $this->blade->make('companie.create_form', compact('router'))->render();
  }

  public function post()
  {
    if (isset($_POST['name']) && isset($_POST['url']) && isset($_POST['mode']) && isset($_POST['description'])) {
      $companie = new Companie();
      $companie->name = $_POST['name'];
      $companie->url = $_POST['url'];
      $companie->mode = $_POST['mode'];
      $companie->description = $_POST['description'];
      $companie->save();
      header('Location: /companie');
    }
  }

  public function delete($params)
  {

    $id = $params['id'];
    $companie = Companie::find($id);
    if ($companie) {
      $companie->delete();
    }
    header('Location: /companie');
  }
  public function edit($params)
  {
    $id = $params['id'];
    $router = $this->router;
    $companie = Companie::find($id);
    echo $this->blade->make('companie.update_form', compact('router', 'companie'))->render();
  }

  public function update()
  {
    $companie = Companie::find($_POST['id']);
    $companie->name = $_POST['name'];
    $companie->url = $_POST['url'];
    $companie->mode = $_POST['mode'];
    $companie->description = $_POST['description'];
    $companie->save();
    header('Location: /companie');
  }
}
