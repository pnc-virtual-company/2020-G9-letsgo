<?php namespace App\Models;

use CodeIgniter\Model;

class CitiesModel{
    public function getCities(){

        $serverJson = file_get_contents('https://run.mocky.io/v3/7ea62752-cb4e-4d5a-94cf-1e37e9442e9f');
        $data = json_decode($serverJson,true);
        return $data;

    }
}
