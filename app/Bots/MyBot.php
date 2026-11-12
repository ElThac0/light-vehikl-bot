<?php

namespace App\Bots;

use LightVehikl\LvObjects\Enums\Direction;
use LightVehikl\LvObjects\GameObjects\Arena;
use LightVehikl\LvObjects\GameObjects\Personalities\Personality;
use LightVehikl\LvObjects\GameObjects\Player;

class MyBot implements Personality
{
    public function name(): string {
        return 'MyBot';
    }

    public function decideMove(Arena $arena, Player $player): Direction|null
    {
        // TODO: Implement decideMove() method.
        return null;
    }
}
