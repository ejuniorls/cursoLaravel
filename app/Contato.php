<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista()
    {
        return (object) [
            "nome"=>"Junior",
            "tel"=>"1234-4321"
        ];
    }
}
