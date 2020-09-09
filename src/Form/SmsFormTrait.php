<?php

namespace Drupal\sms77api\Form;

use Sms77\Api\Validator\SmsValidator;

/**
 * Defines a form that configures sms77api settings.
 */
trait SmsFormTrait {

  public function getSmsForm($smsConfig, bool $open = FALSE): array {
    !$smsConfig && $smsConfig = [];

    return [
      'sms' => [
        '#open' => $open,
        '#title' => $this->t('SMS'),
        '#tree' => TRUE,
        '#type' => 'details',
        'text' => [
          '#attributes' => [
            'title' => $this->t("The default message to send."),
          ],
          '#default_value' => $smsConfig['text'],
          '#title' => $this->t('Default Text'),
          '#type' => 'textarea',
        ],
        'signature' => [
          '#attributes' => [
            'title' => $this->t("Defines the default signature."),
          ],
          '#default_value' => $smsConfig['signature'],
          '#title' => $this->t('Signature'),
          '#type' => 'textarea',
        ],
        'signaturePosition' => [
          '#default_value' => $smsConfig['signaturePosition'],
          '#options' => [
            'append' => $this->t('Append'),
            'prepend' => $this->t('Prepend'),
          ],
          '#title' => $this->t('Signature Position'),
          '#type' => 'radios',
        ],
        'performance_tracking' => [
          '#default_value' => (bool) $smsConfig['performance_tracking'],
          '#title' => $this->t('Performance Tracking'),
          '#type' => 'checkbox',
        ],
        'json' => [
          '#default_value' => (bool) $smsConfig['json'],
          '#title' => $this->t('JSON'),
          '#type' => 'checkbox',
        ],
        'return_msg_id' => [
          '#default_value' => (bool) $smsConfig['return_msg_id'],
          '#title' => $this->t('Return Message ID'),
          '#type' => 'checkbox',
        ],
        'details' => [
          '#default_value' => (bool) $smsConfig['details'],
          '#title' => $this->t('Details'),
          '#type' => 'checkbox',
        ],
        'utf8' => [
          '#default_value' => (bool) $smsConfig['utf8'],
          '#title' => $this->t('UTF-8'),
          '#type' => 'checkbox',
        ],
        'flash' => [
          '#default_value' => (bool) $smsConfig['flash'],
          '#title' => $this->t('Flash'),
          '#type' => 'checkbox',
        ],
        'unicode' => [
          '#default_value' => (bool) $smsConfig['unicode'],
          '#title' => $this->t('Unicode'),
          '#type' => 'checkbox',
        ],
        'no_reload' => [
          '#default_value' => (bool) $smsConfig['no_reload'],
          '#title' => $this->t('No Reload'),
          '#type' => 'checkbox',
        ],
        'debug' => [
          '#attributes' => [
            'title' => $this->t("If enabled, SMS will be validated on the server, but not dispatched."),
          ],
          '#default_value' => (bool) $smsConfig['debug'],
          '#title' => $this->t('Debug'),
          '#type' => 'checkbox',
        ],
        'to' => [
          '#default_value' => $smsConfig['to'],
          '#attributes' => [
            'title' => $this->t("The default recipient(s) separated by comma."),
          ],
          '#title' => $this->t('To'),
          '#type' => 'textfield',
        ],
        'foreign_id' => [
          '#attributes' => [
            'title' => $this->t("The default foreign ID."),
          ],
          '#default_value' => $smsConfig['foreign_id'],
          '#title' => $this->t('Foreign ID'),
          '#type' => 'textfield',
        ],
        'label' => [
          '#attributes' => [
            'title' => $this->t("The default message label."),
          ],
          '#default_value' => $smsConfig['label'],
          '#title' => $this->t('Label'),
          '#type' => 'textfield',
        ],
        'ttl' => [
          '#attributes' => [
            'max' => SmsValidator::TTL_MAX,
            'min' => SmsValidator::TTL_MIN,
          ],
          '#default_value' => $smsConfig['ttl'],
          '#title' => $this->t('Time To Live'),
          '#type' => 'number',
        ],
        'udh' => [
          '#default_value' => $smsConfig['udh'],
          '#title' => $this->t('User Data Header'),
          '#type' => 'textfield',
        ],
        'from' => [
          '#attributes' => [
            'title' => $this->t("Defines the default sender name."),
          ],
          '#default_value' => $smsConfig['from'] ?? $this->config('system.site')
              ->get('name'),
          '#title' => $this->t('From'),
          '#type' => 'textfield',
        ],
      ],
    ];
  }

}
