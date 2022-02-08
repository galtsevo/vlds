<?php
return function($container)
{
    $container["GuestEntryController"] = function()
    {
        return new \App\config\controllers\GuestEntryController;
    };

    $container["AuthController"] = function()
    {
      return new \App\config\controllers\AuthController;
    };

};
