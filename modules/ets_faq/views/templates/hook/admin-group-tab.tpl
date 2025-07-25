{*
/**
 * Copyright ETS Software Technology Co., Ltd
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 website only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.
 *
 * @author ETS Software Technology Co., Ltd
 * @copyright  ETS Software Technology Co., Ltd
 * @license    Valid for 1 website (or project) for each purchase of license
 */
*}

{if isset($group) && $group}
    <li class="faq_group_li item{$group.id_faq_group|intval}" data-id-faq_group="{$group.id_faq_group|intval}"
        data-obj="group">
        <span class="group-name"><span>{if $group.group_name}{$group.group_name|escape:'html':'UTF-8'}{else}{$group.id_faq_group|intval}{/if}</span></span>
    </li>
{/if}