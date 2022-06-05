<?php

use Application\core\Controller;

class AboutController extends Controller {
    
    public function index() {
        $this->view('/about/index', ['author'=>'Fabricio Bizotto']);
    }
}
