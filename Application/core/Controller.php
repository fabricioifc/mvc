<?php

namespace Application\core;

require_once '../Application/utils/Flash.php';

use function Application\utils\create_flash_message;
use function Application\utils\flash;

// use Application\models\User;

class Controller {


    /**
     * @param string model: Model que será instanciado para usar em uma view
     */
    public function model(String $model) {
        require '../Application/models/' . $model . '.php';
        $classe = 'Application\\models\\' . $model;
        return new $classe();
    }

    /**
     * Este método é responsável por chamar uuma determinada view (página).
     *
     * @param  string  $view   A view que será chamada (ou requerida)
     * @param  array   $data   São os dados que serão exibido na view
     */
    public function view(string $view, $data=[]) {
        require_once '../Application/views/_inc/header.php';

        // Mostrar uma mensagem
        // if (!empty($data['message'])) {
        //     create_flash_message('message', $data['message'], 'info');
            // flash('message');
        // }
        
        require '../Application/views/' . $view . '.php';
        require_once '../Application/views/_inc/footer.php';
    }

    /**
     * Este método é herdado para todas as classes filhas que o chamaram 
     * quando o método ou classe informada pelo usuário nçao forem encontrados.
     */
    public function pageNotFound() {
        $this->view(
            'not-found', 
            ['error-code' => 404, 'error-message' => 'Página não encontrada!']
        );
    }

    /**
     * Redirecionar para um controller
     */
    public function redirect($controller) {
        header("Location: $controller", true, 301);
        exit();
    }

}