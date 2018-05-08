<?php

namespace Drupal\entity_browser_generic_embed\Plugin\media\Source;

use Drupal\entity_browser_generic_embed\FileInputExtensionMatchTrait;
use Drupal\entity_browser_generic_embed\InputMatchInterface;
use Drupal\media\Plugin\media\Source\File as BaseFile;

/**
 * Input-matching version of the File media source.
 */
class File extends BaseFile implements InputMatchInterface {

  use FileInputExtensionMatchTrait;

}
