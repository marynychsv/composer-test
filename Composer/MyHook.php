<?php
/**
 * Created by PhpStorm.
 * User: O.Marynych
 * Date: 2016-05-19
 * Time: 12:08 PM
 */

namespace CorleyComposer;

use ComposerScriptEvent;

class MyHook
{
    public static function localConf(Event $event)
    {
        $event->getIO()->write("Show me after INSTALL/UPDATE command");
    }
}
