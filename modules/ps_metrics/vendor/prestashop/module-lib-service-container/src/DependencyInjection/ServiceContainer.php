<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
namespace PrestaShop\ModuleLibServiceContainer\DependencyInjection;

use ps_metrics_module_v4_1_2\PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider;
use Symfony\Component\DependencyInjection\ContainerInterface;
class ServiceContainer
{
    /**
     * @var string Module Name
     */
    private $moduleName;
    /**
     * @var string Module Local Path
     */
    private $moduleLocalPath;
    /**
     * @var ContainerInterface
     */
    private $container;
    /**
     * @param string $moduleName
     * @param string $moduleLocalPath
     */
    public function __construct($moduleName, $moduleLocalPath)
    {
        $this->moduleName = $moduleName;
        $this->moduleLocalPath = $moduleLocalPath;
    }
    /**
     * @param string $serviceName
     *
     * @return object|null
     */
    public function getService($serviceName)
    {
        if (null === $this->container) {
            $this->initContainer();
        }
        return $this->container->get($serviceName);
    }
    /**
     * Instantiate a new ContainerProvider
     *
     * @return void
     */
    private function initContainer()
    {
        $cacheDirectory = new CacheDirectoryProvider(\constant('_PS_VERSION_'), \constant('_PS_ROOT_DIR_'), \constant('_PS_MODE_DEV_'));
        $containerProvider = new \PrestaShop\ModuleLibServiceContainer\DependencyInjection\ContainerProvider($this->moduleName, $this->moduleLocalPath, $cacheDirectory);
        $this->container = $containerProvider->get(\defined('_PS_ADMIN_DIR_') || \defined('PS_INSTALLATION_IN_PROGRESS') || \PHP_SAPI === 'cli' ? 'admin' : 'front');
    }
}
