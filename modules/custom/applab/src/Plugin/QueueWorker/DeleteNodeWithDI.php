<?php

namespace Drupal\applab\Plugin\QueueWorker;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Queue\QueueWorkerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides base functionality for the ChangeTextWithDI Queue Workers.
 */
abstract class DeleteNodeWithDI extends QueueWorkerBase implements ContainerFactoryPluginInterface {

  /**
   * The Entity storage.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $entityStorage;

  /**
   * The moderation entity storage.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $moderationStorage;

  /**
   * Creates a new ChangeTextWithDI Base.
   *
   * @param \Drupal\Core\Entity\EntityStorageInterface $entity_storage
   * @param \Drupal\Core\Entity\EntityStorageInterface $moderation_storage
   *   The node storage and the moderation storage.
   */
  public function __construct(EntityStorageInterface $entity_storage, EntityStorageInterface $moderation_storage) {
    $this->entityStorage = $entity_storage;
    $this->moderationStorage = $moderation_storage;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $container->get('entity_type.manager')->getStorage('applab'),
      $container->get('entity_type.manager')->getStorage('content_moderation_state')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function processItem($data) {
    // Load node.
    $nid = $this->moderationStorage->load($data->mode_id)->content_entity_id->getString();

    if ($nid) {
      $node = $this->entityStorage->load($nid)->delete();
    }
  }

}
