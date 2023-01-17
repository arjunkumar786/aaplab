<?php

namespace Drupal\applab\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the applab entity edit forms.
 */
class ApplabForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $result = parent::save($form, $form_state);

    $entity = $this->getEntity();

    $message_arguments = ['%label' => $entity->toLink()->toString()];
    $logger_arguments = [
      '%label' => $entity->label(),
      'link' => $entity->toLink($this->t('View'))->toString(),
    ];

    switch ($result) {
      case SAVED_NEW:
        $this->messenger()->addStatus($this->t('New applab %label has been created.', $message_arguments));
        $this->logger('applab')->notice('Created new applab %label', $logger_arguments);
        break;

      case SAVED_UPDATED:
        $this->messenger()->addStatus($this->t('The applab %label has been updated.', $message_arguments));
        $this->logger('applab')->notice('Updated applab %label.', $logger_arguments);
        break;
    }

    $form_state->setRedirect('entity.applab.canonical', ['applab' => $entity->id()]);

    return $result;
  }

}
