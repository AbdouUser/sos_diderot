<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.session_strategy.main_1' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Session/SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Session/SessionAuthenticationStrategy.php';

return $this->services['security.authentication.session_strategy.main_1'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
