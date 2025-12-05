<?php

it('has play command', function () {
    $this->artisan('play', ['gameId' => '123'])->assertExitCode(0);
});
