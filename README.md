# light-vehikl-bot

A project to help you set up and run your own bot for the Light-Vehikl game.

Your bot only needs to implement one public function `decideMove`.

On each server event, the server will send out the state of the arena via a websocket.
This project has already been set up to receive that websocket event and pass the Arena
to your bot.

You can use the public functions and the data on the Arena object to decide which `Direction`
you want to move on the next turn. (See the Enum, values are NORTH, SOUTH, EAST, WEST).

In this version turns happen every 500 ms, and if you do not submit a move, your bot
continues in the same direction it was moving last turn.

CLI run using Laravel Zero.
Laravel Zero was created by [Nuno Maduro](https://github.com/nunomaduro) and [Owen Voke](https://github.com/owenvoke), and is a micro-framework that provides an elegant starting point for your console application. It is an **unofficial** and customized version of Laravel optimized for building command-line applications.
