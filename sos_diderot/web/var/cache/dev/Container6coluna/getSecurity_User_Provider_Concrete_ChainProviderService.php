<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.user.provider.concrete.chain_provider' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/UserProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/ChainUserProvider.php';

return $this->services['security.user.provider.concrete.chain_provider'] = new \Symfony\Component\Security\Core\User\ChainUserProvider(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['security.user.provider.concrete.student']) ? $this->services['security.user.provider.concrete.student'] : $this->load('getSecurity_User_Provider_Concrete_StudentService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['security.user.provider.concrete.staff']) ? $this->services['security.user.provider.concrete.staff'] : $this->load('getSecurity_User_Provider_Concrete_StaffService.php')) && false ?: '_'};
}, 2));
