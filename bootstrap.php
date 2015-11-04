<?php
/**
* @package   flame05\flarum-mediaEmbed
* @copyright Copyright (c) 2015 daniel@cerchio.ch | principal code of s9e
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/


use Flarum\MediaEmbed\Listener;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->subscribe(Listener\FormatMediaEmbed::class);
};