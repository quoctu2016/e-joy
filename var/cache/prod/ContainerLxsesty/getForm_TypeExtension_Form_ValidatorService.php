<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type_extension.form.validator' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\BaseValidatorExtension.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\form\\Extension\\Validator\\Type\\FormTypeValidatorExtension.php';

return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});
