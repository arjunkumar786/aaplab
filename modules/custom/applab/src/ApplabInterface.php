<?php

namespace Drupal\applab;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining an applab entity type.
 */
interface ApplabInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
