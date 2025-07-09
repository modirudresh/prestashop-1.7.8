<?php
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

if (!defined('_PS_VERSION_')) { exit; }

class Ets_faqCaptchaModuleFrontController extends ModuleFrontController
{
    public function init()
    {
        $this->createImage();
        die;
    }

    public function createImage()
    {
        $security_code = Tools::substr(sha1(mt_rand()), 17, 6);
        $context = Context::getContext();
        $context->cookie->security_faq = $security_code;
        $context->cookie->write();
        if ($context->cookie->security_faq)
            $this->renderImageByCode($context->cookie->security_faq);
    }

    public function renderImageByCode($security_code)
    {
        if (!$security_code)
            exit();
        $image = imagecreatetruecolor(120, 35);

        $width = imagesx($image);
        $height = imagesy($image);

        $black = imagecolorallocate($image, 0, 0, 0);
        $white = imagecolorallocate($image, 255, 255, 255);
        $red = imagecolorallocatealpha($image, 255, 0, 0, 75);
        $green = imagecolorallocatealpha($image, 0, 255, 0, 75);
        $blue = imagecolorallocatealpha($image, 0, 0, 255, 75);

        imagefilledrectangle($image, 0, 0, $width, $height, $white);
        imagefilledellipse($image, ceil(rand(5, 145)), ceil(rand(0, 35)), 30, 30, $red);
        imagefilledellipse($image, ceil(rand(5, 145)), ceil(rand(0, 35)), 30, 30, $green);
        imagefilledellipse($image, ceil(rand(5, 145)), ceil(rand(0, 35)), 30, 30, $blue);
        imagefilledrectangle($image, 0, 0, $width, 0, $black);
        imagefilledrectangle($image, $width - 1, 0, $width - 1, $height - 1, $black);
        imagefilledrectangle($image, 0, 0, 0, $height - 1, $black);
        imagefilledrectangle($image, 0, $height - 1, $width, $height - 1, $black);

        imagestring($image, 10, (int)(($width - (Tools::strlen($security_code) * 9)) / 2), (int)(($height - 15) / 2), $security_code, $black);

        header("Content-Type: image/jpeg");
        ImageJpeg($image);
        ImageDestroy($image);
        exit();
    }
}