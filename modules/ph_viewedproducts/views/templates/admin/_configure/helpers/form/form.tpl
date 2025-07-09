{*
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
*}

{extends file="helpers/form/form.tpl"}
{block name="input"}
    {if $input.name == 'PH_VP_HOOK_DISPLAYED'}
        <p class="checkbox">
            <label>
                <input type="checkbox" id="PH_VP_HOOK_DISPLAYED_ALL"
                       value="1" {if $hookAccepted && count($hookAccepted)== 6}checked="checked"{/if} />
                {l s='All' mod='ph_viewedproducts'}
            </label>
        </p>
        {foreach $listHooks as $hookItem}
            <p class="checkbox">
                <label>
                    <input type="checkbox" name="PH_VP_HOOK_DISPLAYED[]"
                           value="{$hookItem.value|escape:'html':'UTF-8'}" {if $hookAccepted && in_array($hookItem.value,$hookAccepted)}checked="checked"{/if} />
                    {$hookItem.title|escape:'html':'UTF-8'}
                </label>
                {if isset($hookItem.desc) && $hookItem.desc}
                    <span class="text-muted checkbox-desc {if $hookItem.value == 5 && $hookAccepted && in_array($hookItem.value,$hookAccepted)}{else}hide{/if}" style="display: block;margin-top: 5px; font-style: italic;">
                        {$hookItem.desc nofilter}
                    </span>
                {/if}
            </p>
        {/foreach}
    {else}
        {$smarty.block.parent}
    {/if}
{/block}