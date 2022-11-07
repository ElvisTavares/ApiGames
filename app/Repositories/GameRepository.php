<?php

namespace App\Repositories;

use App\Models\Game;

class GameRepository extends BaseRepository implements GameRepositoryInterface
{
    protected $model;

    public function __construct(Game $model)
    {
    }

    public function list()
    {
        return $this->model->get();
    }


}