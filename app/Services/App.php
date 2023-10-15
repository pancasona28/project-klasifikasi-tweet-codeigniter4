<?php

namespace App\Services;

class App {
    public function log($message) {
        // Log your message here
        // Contoh: echo $message;

        return "Pesan yang berhasil di-log: " . $message;
    }

    public function addmenu($controler) {
        $output = [];
        $returnCode = 0;
    
        // Gantilah perintah berikut sesuai dengan perintah PHP Spark yang ingin Anda jalankan
        $command = 'php artisan spark make:controller '. $controler;
    
        exec($command, $output, $returnCode);
    
        // Lakukan sesuatu dengan output atau return code jika diperlukan
        // Misalnya, tampilkan output ke pengguna atau tangani kesalahan
    }
    
}
