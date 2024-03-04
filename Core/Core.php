<?php 

    class Core {

        public function __construct() {
            $this->run();
        }

        public function run() {
            if(isset($_GET['pag'])) {
                $url = $_GET['pag']; // index.php/class/metodo/parametro
            }

            if(!empty($url)){
                $url = explode('/', $url);
                $controller = $url[0]; // class
                array_shift($url); // retira o primeiro item da array, sobrando o 

                // IF mandou um método
                if(isset($url[0]) && !empty($url[0])) { 
                    $method = $url[0];
                    array_shift($url); // retira novamente o primeiro item da array, sobrando apenas os parametros
                } else { // somente enviou classe
                    $method = "index";
                }
            }




        }
    }


?>