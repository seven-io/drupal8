<?php

namespace Drupal\sms77api\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;
use Sms77\Api\Client;

/**
 * Form controller for the message entity edit forms.
 *
 * @ingroup sms77api
 */
class MessageDefaultForm extends ContentEntityForm {

  use SmsFormTrait;
  use ConfigTrait;

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);
    $form += $this->getSmsForm($this->getConfig()->get('sms'), TRUE);

    return $form;
  }

  /** {@inheritdoc} */
  public function save(array $form, FormStateInterface $state) {
    /** @var \Drupal\sms77api\Entity\Message $msg */
    $msg = $this->getEntity();
    $sms = $state->getValue('sms');
    $msg->set('sms', serialize($sms));
    $text = $sms['text'];
    $to = $sms['to'];
    unset($sms['text'], $sms['to']);
    $client = new Client($this->getConfig()->get('general.apiKey'), 'Drupal');
    $res = $client->sms($to, $text, $sms);

    $msg->set('response', serialize($res));

    $msg->save();

    $state->setRedirect('entity.sms77api_message.list');
  }

  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *
   * @return array
   */
  protected function actions(array $form, FormStateInterface $form_state): array {
    $actions = parent::actions($form, $form_state);

    $actions['submit']['#value'] = $this->t('Create Message');

    return $actions;
  }

}
