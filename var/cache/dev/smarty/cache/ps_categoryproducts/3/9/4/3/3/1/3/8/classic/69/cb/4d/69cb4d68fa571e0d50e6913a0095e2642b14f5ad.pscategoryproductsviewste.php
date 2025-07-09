<?php
/* Smarty version 3.1.48, created on 2025-07-09 19:08:43
  from 'module:pscategoryproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_686e70e364b229_73649278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d31a599d73c039735add7bd5dc7a2a3a72c0ba' => 
    array (
      0 => 'module:pscategoryproductsviewste',
      1 => 1689769962,
      2 => 'module',
    ),
    '71dca78fb50be949ad416ce4369ee3249c68a66c' => 
    array (
      0 => '/var/www/html/prestashop1.7/themes/classic/templates/catalog/_partials/productlist.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
    '85f5d3179de8289b2f5f62d320068e07d6eec545' => 
    array (
      0 => '/var/www/html/prestashop1.7/themes/classic/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1751969406,
      2 => 'file',
    ),
    '8eb09e64f9dbf1d235ae497e44cd519effca2a86' => 
    array (
      0 => '/var/www/html/prestashop1.7/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_686e70e364b229_73649278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/prestashop1.7/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/06/6a/78/066a786fd79abbb1a925157a9f8b8ae1e4702adc_2.file.helpers.tpl.php',
    'uid' => '066a786fd79abbb1a925157a9f8b8ae1e4702adc',
    'call_name' => 'smarty_template_function_renderLogo_984771298686e70dcaea788_04993529',
  ),
));
?><!-- begin /var/www/html/prestashop1.7/themes/classic/modules/ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl --><section class="featured-products clearfix mt-3">
  <h2>
          6 other products in the same category:
      </h2>
  

<div class="products">
            
<div class="js-product product col-xs-12 col-sm-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="13" data-id-product-attribute="0">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="http://demo-store.com/prestashop1.7/en/art/13-brown-bear-vector-graphics.html" class="thumbnail product-thumbnail">
              <img
                src="http://demo-store.com/prestashop1.7/16-home_default/brown-bear-vector-graphics.jpg"
                alt="Brown bear - Vector graphics"
                loading="lazy"
                data-full-size-image-url="http://demo-store.com/prestashop1.7/16-large_default/brown-bear-vector-graphics.jpg"
                width="250"
                height="250"
              />
            </a>
                  

        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h2 class="h3 product-title"><a href="http://demo-store.com/prestashop1.7/en/art/13-brown-bear-vector-graphics.html" content="http://demo-store.com/prestashop1.7/en/art/13-brown-bear-vector-graphics.html">Brown bear - Vector graphics</a></h2>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Price">
                                                  ₹10.80
                              </span>

              

              
            </div>
                  

        
          <!-- begin /var/www/html/prestashop1.7/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="13" data-url="http://demo-store.com/prestashop1.7/en/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/prestashop1.7/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
        
      </div>

      
    <ul class="product-flags js-product-flags">
            </ul>

    <div class="atc_div add-to-cart-icon ">
    <input name="qty" type="hidden" class="form-control ets_atc_qty" value="1" onfocus="if(this.value == '1') this.value = '';" onblur="if(this.value == '') this.value = '1';"/>
    <button id="ets_addToCart" class="btn btn-primary">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cart-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-cart-plus fa-w-18 fa-2x"><path fill="currentColor" d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" class=""></path></svg>
            </button>

</div></div>
  </article>
</div>

            
<div class="js-product product col-xs-12 col-sm-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="12" data-id-product-attribute="0">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="http://demo-store.com/prestashop1.7/en/art/12-mountain-fox-vector-graphics.html" class="thumbnail product-thumbnail">
              <img
                src="http://demo-store.com/prestashop1.7/15-home_default/mountain-fox-vector-graphics.jpg"
                alt="Mountain fox - Vector graphics"
                loading="lazy"
                data-full-size-image-url="http://demo-store.com/prestashop1.7/15-large_default/mountain-fox-vector-graphics.jpg"
                width="250"
                height="250"
              />
            </a>
                  

        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h2 class="h3 product-title"><a href="http://demo-store.com/prestashop1.7/en/art/12-mountain-fox-vector-graphics.html" content="http://demo-store.com/prestashop1.7/en/art/12-mountain-fox-vector-graphics.html">Mountain fox - Vector graphics</a></h2>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Price">
                                                  ₹10.80
                              </span>

              

              
            </div>
                  

        
          <!-- begin /var/www/html/prestashop1.7/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="12" data-url="http://demo-store.com/prestashop1.7/en/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/prestashop1.7/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
        
      </div>

      
    <ul class="product-flags js-product-flags">
            </ul>

    <div class="atc_div add-to-cart-icon ">
    <input name="qty" type="hidden" class="form-control ets_atc_qty" value="1" onfocus="if(this.value == '1') this.value = '';" onblur="if(this.value == '') this.value = '1';"/>
    <button id="ets_addToCart" class="btn btn-primary">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cart-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-cart-plus fa-w-18 fa-2x"><path fill="currentColor" d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" class=""></path></svg>
            </button>

</div></div>
  </article>
</div>

            
<div class="js-product product col-xs-12 col-sm-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="5" data-id-product-attribute="19">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="http://demo-store.com/prestashop1.7/en/art/5-19-today-is-a-good-day-framed-poster.html#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
              <img
                src="http://demo-store.com/prestashop1.7/5-home_default/today-is-a-good-day-framed-poster.jpg"
                alt="Today is a good day Framed poster"
                loading="lazy"
                data-full-size-image-url="http://demo-store.com/prestashop1.7/5-large_default/today-is-a-good-day-framed-poster.jpg"
                width="250"
                height="250"
              />
            </a>
                  

        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h2 class="h3 product-title"><a href="http://demo-store.com/prestashop1.7/en/art/5-19-today-is-a-good-day-framed-poster.html#/19-dimension-40x60cm" content="http://demo-store.com/prestashop1.7/en/art/5-19-today-is-a-good-day-framed-poster.html#/19-dimension-40x60cm">Today is a good day Framed...</a></h2>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Price">
                                                  ₹34.80
                              </span>

              

              
            </div>
                  

        
          <!-- begin /var/www/html/prestashop1.7/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="5" data-url="http://demo-store.com/prestashop1.7/en/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/prestashop1.7/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
        
      </div>

      
    <ul class="product-flags js-product-flags">
            </ul>

    <div class="atc_div add-to-cart-icon ">
    <input name="qty" type="hidden" class="form-control ets_atc_qty" value="1" onfocus="if(this.value == '1') this.value = '';" onblur="if(this.value == '') this.value = '1';"/>
    <button id="ets_addToCart" class="btn btn-primary">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cart-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-cart-plus fa-w-18 fa-2x"><path fill="currentColor" d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" class=""></path></svg>
            </button>

</div></div>
  </article>
</div>

            
<div class="js-product product col-xs-12 col-sm-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="15" data-id-product-attribute="0">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="http://demo-store.com/prestashop1.7/en/home-accessories/15-pack-mug-framed-poster.html" class="thumbnail product-thumbnail">
              <img
                src="http://demo-store.com/prestashop1.7/23-home_default/pack-mug-framed-poster.jpg"
                alt="Pack Mug + Framed poster"
                loading="lazy"
                data-full-size-image-url="http://demo-store.com/prestashop1.7/23-large_default/pack-mug-framed-poster.jpg"
                width="250"
                height="250"
              />
            </a>
                  

        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h2 class="h3 product-title"><a href="http://demo-store.com/prestashop1.7/en/home-accessories/15-pack-mug-framed-poster.html" content="http://demo-store.com/prestashop1.7/en/home-accessories/15-pack-mug-framed-poster.html">Pack Mug + Framed poster</a></h2>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Price">
                                                  ₹42.00
                              </span>

              

              
            </div>
                  

        
          <!-- begin /var/www/html/prestashop1.7/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="15" data-url="http://demo-store.com/prestashop1.7/en/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/prestashop1.7/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
        
      </div>

      
    <ul class="product-flags js-product-flags">
                    <li class="product-flag pack">Pack</li>
            </ul>

    <div class="atc_div add-to-cart-icon ">
    <input name="qty" type="hidden" class="form-control ets_atc_qty" value="1" onfocus="if(this.value == '1') this.value = '';" onblur="if(this.value == '') this.value = '1';"/>
    <button id="ets_addToCart" class="btn btn-primary">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cart-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-cart-plus fa-w-18 fa-2x"><path fill="currentColor" d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" class=""></path></svg>
            </button>

</div></div>
  </article>
</div>

            
<div class="js-product product col-xs-12 col-sm-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="4" data-id-product-attribute="16">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="http://demo-store.com/prestashop1.7/en/art/4-16-the-adventure-begins-framed-poster.html#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
              <img
                src="http://demo-store.com/prestashop1.7/4-home_default/the-adventure-begins-framed-poster.jpg"
                alt="The adventure begins Framed poster"
                loading="lazy"
                data-full-size-image-url="http://demo-store.com/prestashop1.7/4-large_default/the-adventure-begins-framed-poster.jpg"
                width="250"
                height="250"
              />
            </a>
                  

        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h2 class="h3 product-title"><a href="http://demo-store.com/prestashop1.7/en/art/4-16-the-adventure-begins-framed-poster.html#/19-dimension-40x60cm" content="http://demo-store.com/prestashop1.7/en/art/4-16-the-adventure-begins-framed-poster.html#/19-dimension-40x60cm">The adventure begins Framed...</a></h2>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Price">
                                                  ₹34.80
                              </span>

              

              
            </div>
                  

        
          <!-- begin /var/www/html/prestashop1.7/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="4" data-url="http://demo-store.com/prestashop1.7/en/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/prestashop1.7/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
        
      </div>

      
    <ul class="product-flags js-product-flags">
            </ul>

    <div class="atc_div add-to-cart-icon ">
    <input name="qty" type="hidden" class="form-control ets_atc_qty" value="1" onfocus="if(this.value == '1') this.value = '';" onblur="if(this.value == '') this.value = '1';"/>
    <button id="ets_addToCart" class="btn btn-primary">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cart-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-cart-plus fa-w-18 fa-2x"><path fill="currentColor" d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" class=""></path></svg>
            </button>

</div></div>
  </article>
</div>

            
<div class="js-product product col-xs-12 col-sm-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="14" data-id-product-attribute="0">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="http://demo-store.com/prestashop1.7/en/art/14-hummingbird-vector-graphics.html" class="thumbnail product-thumbnail">
              <img
                src="http://demo-store.com/prestashop1.7/17-home_default/hummingbird-vector-graphics.jpg"
                alt="Hummingbird - Vector graphics"
                loading="lazy"
                data-full-size-image-url="http://demo-store.com/prestashop1.7/17-large_default/hummingbird-vector-graphics.jpg"
                width="250"
                height="250"
              />
            </a>
                  

        <div class="highlighted-informations no-variants">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h2 class="h3 product-title"><a href="http://demo-store.com/prestashop1.7/en/art/14-hummingbird-vector-graphics.html" content="http://demo-store.com/prestashop1.7/en/art/14-hummingbird-vector-graphics.html">Hummingbird - Vector graphics</a></h2>
                  

        
                      <div class="product-price-and-shipping">
              
              

              <span class="price" aria-label="Price">
                                                  ₹10.80
                              </span>

              

              
            </div>
                  

        
          <!-- begin /var/www/html/prestashop1.7/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="14" data-url="http://demo-store.com/prestashop1.7/en/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/prestashop1.7/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
        
      </div>

      
    <ul class="product-flags js-product-flags">
            </ul>

    <div class="atc_div add-to-cart-icon ">
    <input name="qty" type="hidden" class="form-control ets_atc_qty" value="1" onfocus="if(this.value == '1') this.value = '';" onblur="if(this.value == '') this.value = '1';"/>
    <button id="ets_addToCart" class="btn btn-primary">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cart-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-cart-plus fa-w-18 fa-2x"><path fill="currentColor" d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM408 168h-48v-40c0-8.837-7.163-16-16-16h-16c-8.837 0-16 7.163-16 16v40h-48c-8.837 0-16 7.163-16 16v16c0 8.837 7.163 16 16 16h48v40c0 8.837 7.163 16 16 16h16c8.837 0 16-7.163 16-16v-40h48c8.837 0 16-7.163 16-16v-16c0-8.837-7.163-16-16-16z" class=""></path></svg>
            </button>

</div></div>
  </article>
</div>

    </div>
</section>
<!-- end /var/www/html/prestashop1.7/themes/classic/modules/ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl --><?php }
}
