<?php
    // Sempre que 'new' for declarado, essa função aciona inserindo o nome do arquivo chamado como parâmetro.
    // A partir disso faz a verificação se aquele nome existe dentro das pastas e o chama.
    spl_autoload_register(function($file_name) { 
        if(file_exists('Controllers/' .$file_name .'.php')){
            require('Controllers/' .$file_name .'.php');
        } elseif(file_exists('Core/' .$file_name .'.php')) {
            require 'Core/'.$file_name.'.php';
        } elseif(file_exists('Models/' .$file_name .'.php')) {
            file_exists('Models/' .$file_name .'.php');
        }
    });
?>
