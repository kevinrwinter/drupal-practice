<?php

namespace Drupal\second_module\Controller;

use Drupal\Core\Controller\ControllerBase;

// use \Drupal\Core\StringTranslation\StringTranslationTrait;


class SecondController extends ControllerBase
{
    // use Drupal\Core\StringTranslation\StringTranslationTrait;
    // use StringTranslationTrait;
    
    public function second()
    {
        // return array('#somethingelse' => 'Something else');
        // return array('#markup' => 'Something else');
        return ['#markup' => $this->t('Welcome to StringTranslationTrait')];
    }
}
