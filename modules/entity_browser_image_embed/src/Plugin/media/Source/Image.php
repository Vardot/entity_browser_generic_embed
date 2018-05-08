<?php

namespace Drupal\entity_browser_image_embed\Plugin\media\Source;

use Drupal\entity_browser_generic_embed\FileInputExtensionMatchTrait;
use Drupal\entity_browser_generic_embed\InputMatchInterface;
use Drupal\media\Plugin\media\Source\Image as BaseImage;

/**
 * Input-matching version of the Image media source.
 */
class Image extends BaseImage implements InputMatchInterface {

  use FileInputExtensionMatchTrait;

}
