<?php

namespace Drupal\capital_azur_decoupled\Plugin\vactory_dynamic_field\Platform;

use Drupal\vactory_dynamic_field\VactoryDynamicFieldPluginBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Capital Azur Decoupled platform provider plugin.
 *
 * @PlatformProvider(
 *   id = "capital_azur_decoupled",
 *   title = @Translation("Capital Azur Decoupled")
 * )
 */
class CapitalAzurDecoupled extends VactoryDynamicFieldPluginBase {

  /**
   * Extension path resolver service.
   *
   * @var \Drupal\Core\Extension\ExtensionPathResolver
   */
  protected $extensionPathResolver;

  /**
   * {@inheritDoc }
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $instance = parent::create($container, $configuration, $plugin_id, $plugin_definition);
    $instance->extensionPathResolver = $container->get('extension.path.resolver');
    $instance->setWidgetsPath($instance->extensionPathResolver->getPath('module', 'capital_azur_decoupled') . '/widgets');
    return $instance;
  }

}
