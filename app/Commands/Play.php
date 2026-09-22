<?php

namespace App\Commands;

use App\Bots\MyBot;
use LaravelZero\Framework\Commands\Command;
use LightVehikl\LvObjects\Bots\BotClient;

class Play extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play {gameId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Would you like to play a game?';
    protected string $host = 'http://light-vehikl.rustyblog.com';
    protected string $webSocketHost = 'ws://ws.light-vehikl.rustyblog.com/app/';
    private string|array|bool|null $gameId;
    private BotClient $client;

    public function handle(): void
    {
        $this->gameId = $this->argument('gameId');

        $this->client = new BotClient(new MyBot(), $this->host, $this->webSocketHost, fn ($text) => $this->line($text));

        $this->client->connect($this->gameId);
    }
}
