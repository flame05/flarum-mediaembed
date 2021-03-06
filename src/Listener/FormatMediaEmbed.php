<?php 
/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flarum\MediaEmbed\Listener;

use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;
use s9e\TextFormatter\Configurator\Bundles\MediaPack;


class FormatMediaEmbed
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureFormatter::class, [$this, 'addMediaEmbedFormatter']);
    }

    /**
     * @param ConfigureFormatter $event
     */
    public function addMediaEmbedFormatter(ConfigureFormatter $event)
    {
        $event->configurator->MediaEmbed;
        (new MediaPack)->configure($event->configurator);
    }
}