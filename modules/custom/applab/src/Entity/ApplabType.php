<?php

namespace Drupal\applab\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the AppLab type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "applab_type",
 *   label = @Translation("AppLab type"),
 *   label_collection = @Translation("AppLab types"),
 *   label_singular = @Translation("applab type"),
 *   label_plural = @Translation("applabs types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count applabs type",
 *     plural = "@count applabs types",
 *   ),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\applab\Form\ApplabTypeForm",
 *       "edit" = "Drupal\applab\Form\ApplabTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\applab\ApplabTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   admin_permission = "administer applab types",
 *   bundle_of = "applab",
 *   config_prefix = "applab_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/applab_types/add",
 *     "edit-form" = "/admin/structure/applab_types/manage/{applab_type}",
 *     "delete-form" = "/admin/structure/applab_types/manage/{applab_type}/delete",
 *     "collection" = "/admin/structure/applab_types"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   }
 * )
 */
class ApplabType extends ConfigEntityBundleBase {

  /**
   * The machine name of this applab type.
   *
   * @var string
   */
  protected $id;

  /**
   * The human-readable name of the applab type.
   *
   * @var string
   */
  protected $label;

}
