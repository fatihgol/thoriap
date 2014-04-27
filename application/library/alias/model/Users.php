<?php

namespace Application\Library\Alias\Model;

use Application\Library\Alias\AliasManager;

class Users extends AliasManager {

    protected static function getModuleAccessor()
    {
        return 'model.users';
    }

}