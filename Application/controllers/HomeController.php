<?php 
require '../Application/utils/Flash.php';

use Application\core\Controller;

use const Application\utils\FLASH_ERROR;
use const Application\utils\FLASH_SUCCESS;
use function Application\utils\create_flash_message;

class HomeController extends Controller {


    public function index() {
        $this->view('/home/index', []);
    }

    public function new() {
        $this->view('/home/new', []);
    }

    public function save() {
        try {
            $name = $_POST['name'];

            if (!empty($name)) {
                create_flash_message('message', 'Usuário cadastrado com sucesso!', FLASH_SUCCESS);
                $this->redirect('/home/index');
            } else {
                create_flash_message('message', 'Informe o nome', FLASH_ERROR);
                $this->view('/home/new', $_REQUEST);
            }

            
            // $this->view('home/index', $data, true);
        } catch (\Throwable $th) {
            create_flash_message('message', $th->getMessage(), FLASH_SUCCESS);
            $this->view('home/new', $_REQUEST);
            throw $th;
        }
    }

}