<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\Module\Mbo\Distribution;

use PrestaShop\Module\Mbo\Helpers\Config;
use PrestaShop\Module\Mbo\Helpers\ErrorHelper;
use stdClass;

class Client extends BaseClient
{
    /**
     * Register new Shop on Distribution API.
     *
     * @param array $params
     *
     * @return stdClass
     *
     * @usage \ps_mbo::registerShop
     */
    public function registerShop(array $params = [])
    {
        return $this->processRequestAndDecode(
            'shops',
            self::HTTP_METHOD_POST,
            ['body' => $this->mergeShopDataWithParams($params)]
        );
    }

    /**
     * Unregister a Shop on Distribution API.
     *
     * @return stdClass
     */
    public function unregisterShop()
    {
        return $this->processRequestAndDecode(
            'shops/' . Config::getShopMboUuid(),
            self::HTTP_METHOD_DELETE
        );
    }

    /**
     * Update shop on Distribution API.
     *
     * @param array $params
     *
     * @return stdClass
     *
     * @usage \ps_mbo::updateShop
     */
    public function updateShop(array $params)
    {
        return $this->processRequestAndDecode(
            'shops/' . Config::getShopMboUuid(),
            self::HTTP_METHOD_PUT,
            ['body' => $this->mergeShopDataWithParams($params)]
        );
    }

    /**
     * @param array $eventData
     *
     * @return void
     */
    public function trackEvent(array $eventData)
    {
        try {
            $this->processRequestAndDecode(
                'shops/events',
                self::HTTP_METHOD_POST,
                ['body' => $eventData]
            );
        } catch (\Exception $e) {
            // Do nothing, we don't want to block the module action
            ErrorHelper::reportError($e);
        }
    }
}
