<?php
use App\Http\Controllers\BotManController;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\BotMan\Messages\Outgoing\Question;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');

    $mybot = new \App\classes\MyBot();
    $mybot->setCoplor("olive");

    $bot->reply('Цвет '.$mybot->color);
    $bot->reply('Имя '.$mybot->name);
    $bot->reply('Цена '.$mybot->price);
    $bot->reply($mybot->img);

    $question = Question::create('Другие коты?')
        ->fallback('Unable to create a new database')
        ->callbackId('create_database')
        ->addButtons([
            Button::create('Of course')->value('1'),
            Button::create('Hell no!')->value('2'),
        ]);

    $bot->reply($question);

});
$botman->hears('1', function ($bot) {
    $products=\App\Product::all();
    foreach ($products as $product)
    {
        $attachment = new Image($product->img_url);

        // Build message object
        $message = OutgoingMessage::create($product->name)
            ->withAttachment($attachment);

        // Reply message object
        $bot->reply($message);
    }


});
$botman->hears('3', function ($bot) {

    $categories=\App\Category::all();
    foreach ($categories as $category)
        $bot->reply($category->title. ' ' .$category->img_url);

});
$botman->hears('/cat ([0-9]+)', function ($bot,$id) {
    $products=(\App\Category::with(['products'])->find($id))->products;
    foreach ($products as $product)
        $bot->reply($product->name. ' ' .$product->img_url);

});
$botman->hears('2', function ($bot) {
    $bot->reply("Tell me more!2");
    $bot->reply("And even more");
});

$botman->hears('img', function ( $bot) {
    // Create attachment
    $attachment = new Image('https://botman.io/img/logo.png');

    // Build message object
    $message = OutgoingMessage::create('This is my text')
        ->withAttachment($attachment);

    // Reply message object
    $bot->reply($message);
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
