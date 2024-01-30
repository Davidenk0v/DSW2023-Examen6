<?php

namespace Dsw\Fct\Controllers;

use Dsw\Fct\Controllers\Controller;
use Dsw\Fct\Models\Choice;

require_once('../src/connection.php');

class ChoiceController extends Controller
{
  public function index()
  {
    $router = $this->router;
    $choices = Choice::all();
    echo $this->blade->make('choice.list', compact("choices", "router"))->render();
  }
}
