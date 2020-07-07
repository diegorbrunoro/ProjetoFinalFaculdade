<?php
if (!function_exists('redirect')) {
    function redirect($url) {
        header(sprintf('Location: %s%s', APP_URL, $url));
    }
}

if (!function_exists('kernel')) {
    /**
     * @param $method
     * @param $controller
     * @param $action
     * @return mixed
     * @throws Exception
     */
    function route ($method, $controller, $action) {
        if ($_SERVER['REQUEST_METHOD'] === $method) {

            $pathToController = ROOT_DIR . '/app/Controllers/' . $controller . '.php';

            if (file_exists($pathToController)) {

                require($pathToController);

                $controllerInstance = new $controller();

                return $controllerInstance->{$action}();
            } else {
                throw new Exception("Controlador não encontrado");
            }
        } else {
            throw new Exception("Requisição não aguardada para essa rota");
        }
    }
}
