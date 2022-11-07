<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInteface
{

    public function all()
    {
       return $this->model->all();
    }
}