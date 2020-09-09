<?php

namespace Drupal\sms77api;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a Contact entity.
 * We have this interface so we can join the other interfaces it extends.
 *
 * @ingroup sms77api
 */
interface MessageInterface extends ContentEntityInterface, EntityOwnerInterface {

}
