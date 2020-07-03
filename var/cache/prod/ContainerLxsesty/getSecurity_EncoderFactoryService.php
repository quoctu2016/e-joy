<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.encoder_factory' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\Encoder\\EncoderFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\security\\Core\\Encoder\\EncoderFactory.php';

$a = ${($_ = isset($this->services['Eccube\Security\Core\Encoder\PasswordEncoder']) ? $this->services['Eccube\Security\Core\Encoder\PasswordEncoder'] : $this->load('getPasswordEncoderService.php')) && false ?: '_'};

return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['Eccube\\Entity\\Member' => $a, 'Eccube\\Entity\\Customer' => $a]);
