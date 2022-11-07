<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\GameServiceInterface;
use Illuminate\Http\Request;

class GameController extends Controller
{
    private $gameService;

    public function construct(GameServiceInterface $gameService)
    {

    }
    
    public function index()
    {
        
    }
}
