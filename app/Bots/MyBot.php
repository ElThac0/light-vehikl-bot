<?php

namespace App\Bots;

use LightVehikl\LvObjects\Enums\Direction;
use LightVehikl\LvObjects\GameObjects\Arena;
use LightVehikl\LvObjects\GameObjects\Personalities\Personality;
use LightVehikl\LvObjects\GameObjects\Player;

class MyBot implements Personality
{

    private Player $player;

    public function decideMove(Arena $arena): Direction|null
    {
        // TODO: Implement decideMove() method.
        return null;
    }

    public function updatePlayer(Player $player): static
    {
        $this->player = $player;
        return $this;
    }
}
