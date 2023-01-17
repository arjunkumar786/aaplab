<?php

namespace Drupal\applab\Plugin\QueueWorker;

/**
 * A Node Delete that delete nodes on CRON run.
 *
 * @QueueWorker(
 *   id = "cron_node_delete",
 *   title = @Translation("Cron Node Delete"),
 *   cron = {"time" = 10}
 * )
 */
class CronNodeDelete extends DeleteNodeWithDI {}
