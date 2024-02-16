<?php

declare(strict_types=1);

namespace OH\Theme\Setup\Patch\Data;

use Magento\Cms\Model\PageFactory;
use Magento\Cms\Model\PageRepository;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class CreateHomepageCms implements DataPatchInterface
{
    const CMS_MAP = [
        'homepage' => [
            'identifier' => 'homepage',
            'page_layout' => 'cms-full-width',
            'title' => 'Homepage | Theme Mars',
            'content' => <<<HTML
<style>#html-body [data-pb-style=EL2YLRY]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll}#html-body [data-pb-style=LU2M2OW],#html-body [data-pb-style=T7U1M7N]{min-height:300px}#html-body [data-pb-style=AFS53ML]{background-position:center center;background-size:cover;background-repeat:no-repeat;min-height:300px}#html-body [data-pb-style=GIJRDV2]{background-color:transparent}#html-body [data-pb-style=WP2KMFD]{opacity:1;visibility:visible}#html-body [data-pb-style=KV9572W]{min-height:300px}#html-body [data-pb-style=RG3XOA5]{background-position:center center;background-size:cover;background-repeat:no-repeat;min-height:300px}#html-body [data-pb-style=W14S1HR]{background-color:transparent}#html-body [data-pb-style=MUN9KEE]{opacity:1;visibility:visible}#html-body [data-pb-style=O3LP10I]{min-height:300px}#html-body [data-pb-style=XLIJNXT]{background-position:center center;background-size:cover;background-repeat:no-repeat;min-height:300px}#html-body [data-pb-style=UNDWMQ5]{background-color:transparent}#html-body [data-pb-style=GCY1PQW]{opacity:1;visibility:visible}#html-body [data-pb-style=SWE9VY9]{background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;align-self:stretch}#html-body [data-pb-style=HC469Y5]{display:flex;width:100%}#html-body [data-pb-style=CK8Y1WA]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;width:50%;align-self:stretch}#html-body [data-pb-style=EEQ674O]{border-style:none}#html-body [data-pb-style=JFVA0KA],#html-body [data-pb-style=JJYQ94T]{max-width:100%;height:auto}#html-body [data-pb-style=CRHIEED]{display:inline-block}#html-body [data-pb-style=NLLDN1K]{text-align:center}#html-body [data-pb-style=FSJ856A]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;width:50%;align-self:stretch}#html-body [data-pb-style=F0DLVHO]{border-style:none}#html-body [data-pb-style=GRVNKQM],#html-body [data-pb-style=RY3P3T4]{max-width:100%;height:auto}#html-body [data-pb-style=E9Y9280]{display:inline-block}#html-body [data-pb-style=AROVXIQ]{text-align:center}#html-body [data-pb-style=GG543TC],#html-body [data-pb-style=GROJ3E3]{background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll}#html-body [data-pb-style=GG543TC]{justify-content:flex-start;display:flex;flex-direction:column}#html-body [data-pb-style=GROJ3E3]{align-self:stretch}#html-body [data-pb-style=EDQ3WU3]{display:flex;width:100%}#html-body [data-pb-style=L2T8XW0]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;width:25%;align-self:stretch}#html-body [data-pb-style=G2K7YVH]{border-style:none}#html-body [data-pb-style=A3L29TW],#html-body [data-pb-style=WNBTDIV]{max-width:100%;height:auto}#html-body [data-pb-style=NGXE04R]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;width:25%;align-self:stretch}#html-body [data-pb-style=OXATC36]{border-style:none}#html-body [data-pb-style=BPMDV57],#html-body [data-pb-style=NAK5LSE]{max-width:100%;height:auto}#html-body [data-pb-style=VHG2JD9]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;width:25%;align-self:stretch}#html-body [data-pb-style=WRTKS0X]{border-style:none}#html-body [data-pb-style=ETILTU7],#html-body [data-pb-style=PQ8HH4K]{max-width:100%;height:auto}#html-body [data-pb-style=IYME7ER]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;width:25%;align-self:stretch}#html-body [data-pb-style=GSLE9FA]{border-style:none}#html-body [data-pb-style=S2WLGTT],#html-body [data-pb-style=V1QQ2HR]{max-width:100%;height:auto}#html-body [data-pb-style=V5SIV0J]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll}#html-body [data-pb-style=CIODWSD],#html-body [data-pb-style=F77C798],#html-body [data-pb-style=H8Y1H5G]{text-align:center}#html-body [data-pb-style=M16N7RN],#html-body [data-pb-style=Y4WGD1S]{background-color:#0059f8;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll}#html-body [data-pb-style=Y4WGD1S]{justify-content:flex-start;display:flex;flex-direction:column}#html-body [data-pb-style=M16N7RN]{text-align:center}#html-body [data-pb-style=W2Q677E]{border-radius:0;min-height:250px;background-color:transparent}#html-body [data-pb-style=VUFCDKX]{opacity:1;visibility:visible}#html-body [data-pb-style=UOEBCCP]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll}#html-body [data-pb-style=J4WYFWO]{text-align:center}@media only screen and (max-width: 768px) { #html-body [data-pb-style=EEQ674O],#html-body [data-pb-style=F0DLVHO],#html-body [data-pb-style=G2K7YVH],#html-body [data-pb-style=GSLE9FA],#html-body [data-pb-style=OXATC36],#html-body [data-pb-style=WRTKS0X]{border-style:none} }</style><div class="banner-home" data-content-type="row" data-appearance="full-width" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="main" data-pb-style="EL2YLRY"><div class="row-full-width-inner" data-element="inner"><div class="pagebuilder-slider banner-home--main" data-content-type="slider" data-appearance="default" data-autoplay="false" data-autoplay-speed="4000" data-fade="true" data-infinite-loop="true" data-show-arrows="false" data-show-dots="true" data-element="main" data-pb-style="T7U1M7N"><div data-content-type="slide" data-slide-name="" data-appearance="collage-left" data-show-button="always" data-show-overlay="never" data-element="main" data-pb-style="LU2M2OW"><a href="/" target="" data-link-type="default" title="" data-element="link"><div class="pagebuilder-slide-wrapper" data-background-images="{\&quot;desktop_image\&quot;:\&quot;{{media url=wysiwyg/home/main-banner.png}}\&quot;,\&quot;mobile_image\&quot;:\&quot;{{media url=wysiwyg/home/main-banner-mobile.png}}\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="AFS53ML"><div class="pagebuilder-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="GIJRDV2"><div class="pagebuilder-collage-content"><div data-element="content"><p><span style="color: #7a7a7a;">OFERTAS POR MEDIO TIEMPO</span></p><p id="MAGMV7G">Lorem ipsum dolor sit amet consectetur.</p><p>Lorem ipsum dolor, lorem ipsum dolor.</p></div><button type="button" class="pagebuilder-slide-button pagebuilder-button-primary" data-element="button" data-pb-style="WP2KMFD">Ver todas las ofertas</button></div></div></div></a></div><div data-content-type="slide" data-slide-name="" data-appearance="collage-left" data-show-button="always" data-show-overlay="never" data-element="main" data-pb-style="KV9572W"><a href="/" target="" data-link-type="default" title="" data-element="link"><div class="pagebuilder-slide-wrapper" data-background-images="{\&quot;desktop_image\&quot;:\&quot;{{media url=wysiwyg/home/main-banner.png}}\&quot;,\&quot;mobile_image\&quot;:\&quot;{{media url=wysiwyg/home/main-banner-mobile.png}}\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="RG3XOA5"><div class="pagebuilder-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="W14S1HR"><div class="pagebuilder-collage-content"><div data-element="content"><p><span style="color: #7a7a7a;">OFERTAS POR MEDIO TIEMPO</span></p><p id="MAGMV7G">Lorem ipsum dolor sit amet consectetur.</p><p>Lorem ipsum dolor, lorem ipsum dolor.</p></div><button type="button" class="pagebuilder-slide-button pagebuilder-button-primary" data-element="button" data-pb-style="MUN9KEE">Ver todas las ofertas</button></div></div></div></a></div><div data-content-type="slide" data-slide-name="" data-appearance="collage-left" data-show-button="always" data-show-overlay="never" data-element="main" data-pb-style="O3LP10I"><a href="/" target="" data-link-type="default" title="" data-element="link"><div class="pagebuilder-slide-wrapper" data-background-images="{\&quot;desktop_image\&quot;:\&quot;{{media url=wysiwyg/home/main-banner.png}}\&quot;,\&quot;mobile_image\&quot;:\&quot;{{media url=wysiwyg/home/main-banner-mobile.png}}\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="XLIJNXT"><div class="pagebuilder-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="UNDWMQ5"><div class="pagebuilder-collage-content"><div data-element="content"><p><span style="color: #7a7a7a;">OFERTAS POR MEDIO TIEMPO</span></p><p id="MAGMV7G">Lorem ipsum dolor sit amet consectetur.</p><p>Lorem ipsum dolor, lorem ipsum dolor.</p></div><button type="button" class="pagebuilder-slide-button pagebuilder-button-primary" data-element="button" data-pb-style="GCY1PQW">Ver todas las ofertas</button></div></div></div></a></div></div><div class="pagebuilder-column-group banner-home--secondary" data-background-images="{}" data-content-type="column-group" data-appearance="default" data-grid-size="12" data-element="main" data-pb-style="SWE9VY9"><div class="pagebuilder-column-line" data-content-type="column-line" data-element="main" data-pb-style="HC469Y5"><div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="CK8Y1WA"><figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="EEQ674O"><img class="pagebuilder-mobile-hidden" src="{{media url=wysiwyg/home/secondary-banner-2.png}}" alt="" title="" data-element="desktop_image" data-pb-style="JJYQ94T"><img class="pagebuilder-mobile-only" src="{{media url=wysiwyg/home/secondary-banner-2.png}}" alt="" title="" data-element="mobile_image" data-pb-style="JFVA0KA"></figure><div data-content-type="text" data-appearance="default" data-element="main"><h2>Lorem ipsum dolor sit amet consectetur.</h2>
<p>Lorem ipsum dolor.</p></div><div data-content-type="buttons" data-appearance="inline" data-same-width="false" data-element="main"><div data-content-type="button-item" data-appearance="default" data-element="main" data-pb-style="CRHIEED"><a class="pagebuilder-button-secondary" href="#" target="" data-link-type="default" data-element="link" data-pb-style="NLLDN1K"><span data-element="link_text">Ver más</span></a></div></div></div><div class="pagebuilder-column offers" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="FSJ856A"><figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="F0DLVHO"><img class="pagebuilder-mobile-hidden" src="{{media url=wysiwyg/home/secondary-banner-1.png}}" alt="" title="" data-element="desktop_image" data-pb-style="GRVNKQM"><img class="pagebuilder-mobile-only" src="{{media url=wysiwyg/home/secondary-banner-1.png}}" alt="" title="" data-element="mobile_image" data-pb-style="RY3P3T4"></figure><div class="offers" data-content-type="text" data-appearance="default" data-element="main"><p><span style="color: #111111;">20%</span></p>
<p><span style="color: #111111;">OFF</span></p></div><div data-content-type="buttons" data-appearance="inline" data-same-width="false" data-element="main"><div data-content-type="button-item" data-appearance="default" data-element="main" data-pb-style="E9Y9280"><a class="pagebuilder-button-secondary" href="#" target="" data-link-type="default" data-element="link" data-pb-style="AROVXIQ"><span data-element="link_text">Ver más</span></a></div></div></div></div></div></div></div><div class="benefits-home" data-content-type="row" data-appearance="full-width" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="main" data-pb-style="GG543TC"><div class="row-full-width-inner" data-element="inner"><div class="pagebuilder-column-group" data-background-images="{}" data-content-type="column-group" data-appearance="default" data-grid-size="12" data-element="main" data-pb-style="GROJ3E3"><div class="pagebuilder-column-line" data-content-type="column-line" data-element="main" data-pb-style="EDQ3WU3"><div class="pagebuilder-column benefit" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="L2T8XW0"><h3 data-content-type="heading" data-appearance="default" data-element="main">Información importante</h3><div data-content-type="text" data-appearance="default" data-element="main"><p><span style="color: #9a9a9a;">Lorem ipsum dolor sit.</span></p></div><figure class="icon" data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="G2K7YVH"><img class="pagebuilder-mobile-hidden" src="{{media url=wysiwyg/home/warranty.png}}" alt="" title="" data-element="desktop_image" data-pb-style="WNBTDIV"><img class="pagebuilder-mobile-only" src="{{media url=wysiwyg/home/warranty.png}}" alt="" title="" data-element="mobile_image" data-pb-style="A3L29TW"></figure></div><div class="pagebuilder-column benefit" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="NGXE04R"><h3 data-content-type="heading" data-appearance="default" data-element="main">Atención personalizada</h3><div data-content-type="text" data-appearance="default" data-element="main"><p><span style="color: #9a9a9a;">Lorem ipsum dolor sit.</span></p></div><figure class="icon" data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="OXATC36"><img class="pagebuilder-mobile-hidden" src="{{media url=wysiwyg/home/phone.png}}" alt="" title="" data-element="desktop_image" data-pb-style="BPMDV57"><img class="pagebuilder-mobile-only" src="{{media url=wysiwyg/home/phone.png}}" alt="" title="" data-element="mobile_image" data-pb-style="NAK5LSE"></figure></div><div class="pagebuilder-column benefit" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="VHG2JD9"><h3 data-content-type="heading" data-appearance="default" data-element="main">Ofertas imperdibles</h3><div data-content-type="text" data-appearance="default" data-element="main"><p><span style="color: #9a9a9a;">Lorem ipsum dolor sit.</span></p></div><figure class="icon" data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="WRTKS0X"><img class="pagebuilder-mobile-hidden" src="{{media url=wysiwyg/home/offer.png}}" alt="" title="" data-element="desktop_image" data-pb-style="PQ8HH4K"><img class="pagebuilder-mobile-only" src="{{media url=wysiwyg/home/offer.png}}" alt="" title="" data-element="mobile_image" data-pb-style="ETILTU7"></figure></div><div class="pagebuilder-column benefit" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="IYME7ER"><h3 data-content-type="heading" data-appearance="default" data-element="main">Envíos gratis desde $5.000</h3><div data-content-type="text" data-appearance="default" data-element="main"><p><span style="color: #9a9a9a;">Lorem ipsum dolor sit.</span></p></div><figure class="icon" data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="GSLE9FA"><img class="pagebuilder-mobile-hidden" src="{{media url=wysiwyg/home/shipping.png}}" alt="" title="" data-element="desktop_image" data-pb-style="V1QQ2HR"><img class="pagebuilder-mobile-only" src="{{media url=wysiwyg/home/shipping.png}}" alt="" title="" data-element="mobile_image" data-pb-style="S2WLGTT"></figure></div></div></div></div></div><div class="product-lists" data-content-type="row" data-appearance="full-width" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="main" data-pb-style="V5SIV0J"><div class="row-full-width-inner" data-element="inner"><h2 data-content-type="heading" data-appearance="default" data-element="main" data-pb-style="CIODWSD">#Hot sellers</h2><div data-content-type="text" data-appearance="default" data-element="main"><p style="text-align: center;"><span style="color: #7a7a7a;">Lorem ipsum dolor sit amet consectetur. Diam enim amet orci neque. Etiam blandit odio nisl orci.</span></p></div><div data-content-type="html" data-appearance="default" data-element="main">&lt;a href="#" class="btn-product new active"&gt;
&lt;span&gt;Productos nuevos&lt;/span&gt;
&lt;/a&gt;
&lt;a href="#" class="btn-product bestsellers"&gt;
&lt;span&gt;Más vendidos&lt;/span&gt;
&lt;/a&gt;
&lt;a href="#" class="btn-product recommended"&gt;
&lt;span&gt;Recomendados&lt;/span&gt;
&lt;/a&gt;</div><div class="new" data-content-type="products" data-appearance="carousel" data-autoplay="true" data-autoplay-speed="4000" data-infinite-loop="false" data-show-arrows="true" data-show-dots="true" data-carousel-mode="default" data-slides-to-show="" data-slides-to-scroll="" data-center-padding="90px" data-element="main" data-pb-style="H8Y1H5G">{{widget type="Magento\CatalogWidget\Block\Product\ProductsList" template="Magento_PageBuilder::catalog/product/widget/content/carousel.phtml" anchor_text="" id_path="" show_pager="0" products_count="7" condition_option="sku" condition_option_value="WT09,WT08,WS05,WT07,WJ12,WJ06,WS12" type_name="Catalog Products Carousel" conditions_encoded="^[`1`:^[`aggregator`:`all`,`new_child`:``,`type`:`Magento||CatalogWidget||Model||Rule||Condition||Combine`,`value`:`1`^],`1--1`:^[`operator`:`()`,`type`:`Magento||CatalogWidget||Model||Rule||Condition||Product`,`attribute`:`sku`,`value`:`WT09,WT08,WS05,WT07,WJ12,WJ06,WS12`^]^]" sort_order="date_newest_top"}}</div><div class="recommended" data-content-type="products" data-appearance="carousel" data-autoplay="true" data-autoplay-speed="4000" data-infinite-loop="false" data-show-arrows="true" data-show-dots="true" data-carousel-mode="default" data-slides-to-show="" data-slides-to-scroll="" data-center-padding="90px" data-element="main" data-pb-style="F77C798">{{widget type="Magento\CatalogWidget\Block\Product\ProductsList" template="Magento_PageBuilder::catalog/product/widget/content/carousel.phtml" anchor_text="" id_path="" show_pager="0" products_count="20" condition_option="condition" condition_option_value="" type_name="Catalog Products Carousel" conditions_encoded="^[`1`:^[`type`:`Magento||CatalogWidget||Model||Rule||Condition||Combine`,`aggregator`:`all`,`value`:`1`,`new_child`:``^],`1--1`:^[`type`:`Magento||CatalogWidget||Model||Rule||Condition||Product`,`attribute`:`category_ids`,`operator`:`^[^]`,`value`:`15,17,20,6`^]^]" sort_order="date_newest_top"}}</div><div class="bestsellers" data-content-type="text" data-appearance="default" data-element="main"><p>{{widget type="OH\Bestsellers\Block\Bestsellers" products_count="7" show_title="0"}}</p></div></div></div><div class="banner-offers" data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="main" data-pb-style="Y4WGD1S"><div data-content-type="banner" data-appearance="poster" data-show-button="always" data-show-overlay="never" data-element="main"><a href="/" target="" data-link-type="default" title="" data-element="link"><div class="pagebuilder-banner-wrapper" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="M16N7RN"><div class="pagebuilder-overlay pagebuilder-poster-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="W2Q677E"><div class="pagebuilder-poster-content"><div data-element="content"><h3><span style="color: #ffffff;">LOREM IPSUM DOLOR SIT AMET CONSECTETUR.</span></h3><h2><span style="color: #ffffff;">Lorem ipsum dolor sit amet</span></h2></div><button type="button" class="pagebuilder-banner-button pagebuilder-button-secondary" data-element="button" data-pb-style="VUFCDKX">Ver todas las ofertas</button></div></div></div></a></div></div><div class="unmissable-offers" data-content-type="row" data-appearance="full-width" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="main" data-pb-style="UOEBCCP"><div class="row-full-width-inner" data-element="inner"><h2 data-content-type="heading" data-appearance="default" data-element="main" data-pb-style="J4WYFWO">Ofertas imperdibles</h2><div data-content-type="products" data-appearance="carousel" data-autoplay="true" data-autoplay-speed="4000" data-infinite-loop="true" data-show-arrows="true" data-show-dots="true" data-carousel-mode="default" data-slides-to-show="" data-slides-to-scroll="" data-center-padding="90px" data-element="main">{{widget type="Magento\CatalogWidget\Block\Product\ProductsList" template="Magento_PageBuilder::catalog/product/widget/content/carousel.phtml" anchor_text="" id_path="" show_pager="0" products_count="4" condition_option="category_ids" condition_option_value="7" type_name="Catalog Products Carousel" conditions_encoded="^[`1`:^[`aggregator`:`all`,`new_child`:``,`type`:`Magento||CatalogWidget||Model||Rule||Condition||Combine`,`value`:`1`^],`1--1`:^[`operator`:`==`,`type`:`Magento||CatalogWidget||Model||Rule||Condition||Product`,`attribute`:`category_ids`,`value`:`7`^]^]" sort_order="position"}}</div></div></div>
HTML
        ]
    ];

    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * @var PageRepository
     */
    private $pageRepository;

    public function __construct(
        PageFactory    $pageFactory,
        PageRepository $pageRepository
    )
    {
        $this->pageFactory = $pageFactory;
        $this->pageRepository = $pageRepository;
    }

    /**
     * Create all about us pages
     */
    public function apply()
    {
        foreach (self::CMS_MAP as $cms) {
            try {
                $this->pageRepository->getById($cms['identifier']);
            } catch (NoSuchEntityException $noSuchEntityException) {
                //page doesn't exist
                $page = $this->pageFactory->create()->setData($cms);
                $this->pageRepository->save($page);
            }
        }
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}