<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../model/Text.php';


class TextController extends Controller {

  public function index() {
    $texts= Text::get();

    $this->set("texts", $texts);

  }
}
