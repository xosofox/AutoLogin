<?php

namespace Jmikola\AutoLogin\User;

use Jmikola\AutoLogin\Exception\AutoLoginTokenNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;

trigger_deprecation('jmikola/autologin', '6.0', 'The AutoLogin library is deprecated, use Symfony AccessTokenAuthenticator instead');

interface AutoLoginUserProviderInterface
{
    /**
     * Loads the user for the given auto-login token.
     *
     * This method must throw AutoLoginTokenNotFoundException if the user is not
     * found.
     *
     * @param string $key
     * @return UserInterface
     * @throws AutoLoginTokenNotFoundException if the user is not found
     */
    public function loadUserByAutoLoginToken($key) : UserInterface;
}
