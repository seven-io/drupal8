<?php

namespace Drupal\sms77api\Form;

use Drupal\Core\Config\Config;

/**
 * Defines a form that configures sms77api settings.
 */
trait ConfigTrait {

  private $_editableConfigName = 'sms77api.settings';

  protected function getEditableConfigNames(): array {
    return [
      $this->_editableConfigName,
    ];
  }

  protected function getConfig(): Config {
    return $this->config($this->_editableConfigName);
  }

}
