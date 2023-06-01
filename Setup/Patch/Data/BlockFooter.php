<?php

declare(strict_types=1);

namespace OH\Theme\Setup\Patch\Data;

use Magento\Cms\Api\BlockRepositoryInterface;
use Magento\Cms\Model\BlockFactory;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class BlockFooter implements DataPatchInterface
{
    /**
     * @var BlockFactory
     */
    private $blockFactory;

    /**
     * @var BlockRepositoryInterface
     */
    private $blockRepository;

    const BLOCK_MAP = [
        'footer' => [
            'identifier' => 'footer-mars',
            'title' => 'Footer',
            'content' => <<<HTML
<style>#html-body [data-pb-style=G1DG680],#html-body [data-pb-style=GPECFKE]{background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll}#html-body [data-pb-style=G1DG680]{justify-content:flex-start;display:flex;flex-direction:column}#html-body [data-pb-style=GPECFKE]{align-self:stretch}#html-body [data-pb-style=FBSPLV1],#html-body [data-pb-style=L0XTB3F]{display:flex;width:100%}#html-body [data-pb-style=B2BP5C4]{text-align:center}#html-body [data-pb-style=B2BP5C4],#html-body [data-pb-style=GWKRNWL],#html-body [data-pb-style=QT63A8F],#html-body [data-pb-style=R2BXI39],#html-body [data-pb-style=R4HXB7V],#html-body [data-pb-style=UJA3V2P],#html-body [data-pb-style=US7GWWH]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;width:20%;align-self:stretch}#html-body [data-pb-style=GWKRNWL],#html-body [data-pb-style=QT63A8F]{width:50%}#html-body [data-pb-style=CK9T0DF]{border-style:none}#html-body [data-pb-style=NMRSA5E],#html-body [data-pb-style=TMFH7LP]{max-width:100%;height:auto}#html-body [data-pb-style=S7U3JYW]{border-style:none}#html-body [data-pb-style=HDHWW7H],#html-body [data-pb-style=YVDIR0P]{max-width:100%;height:auto}#html-body [data-pb-style=KX7G0QM]{border-style:none}#html-body [data-pb-style=JMBH0RP],#html-body [data-pb-style=JR0EVX6]{max-width:100%;height:auto}#html-body [data-pb-style=LESARL2]{border-style:none}#html-body [data-pb-style=FIB2ST9],#html-body [data-pb-style=YX6CYHP]{max-width:100%;height:auto}#html-body [data-pb-style=J7PRYSK]{text-align:center}#html-body [data-pb-style=K2421KV]{text-align:left}@media only screen and (max-width: 768px) { #html-body [data-pb-style=CK9T0DF],#html-body [data-pb-style=KX7G0QM],#html-body [data-pb-style=LESARL2],#html-body [data-pb-style=S7U3JYW]{border-style:none} }</style><div class="footer-mars" data-content-type="row" data-appearance="full-width" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="main" data-pb-style="G1DG680"><div class="row-full-width-inner" data-element="inner"><div class="pagebuilder-column-group footer-mars__container" data-background-images="{}" data-content-type="column-group" data-appearance="default" data-grid-size="10" data-element="main" data-pb-style="GPECFKE"><div class="pagebuilder-column-line" data-content-type="column-line" data-element="main" data-pb-style="L0XTB3F"><div class="pagebuilder-column brand" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="B2BP5C4"><figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="CK9T0DF"><a href="/" target="" data-link-type="default" title="" data-element="link"><img class="pagebuilder-mobile-hidden" src="{{media url=wysiwyg/logo.png}}" alt="" title="" data-element="desktop_image" data-pb-style="NMRSA5E"><img class="pagebuilder-mobile-only" src="{{media url=wysiwyg/footer_mars.png}}" alt="" title="" data-element="mobile_image" data-pb-style="TMFH7LP"></a></figure><h2 data-content-type="heading" data-appearance="default" data-element="main" data-pb-style="J7PRYSK">Theme for growth!</h2></div><div class="pagebuilder-column links" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="US7GWWH"><h3 data-content-type="heading" data-appearance="default" data-element="main">Tienda</h3><div data-content-type="text" data-appearance="default" data-element="main"><ul>
<li><a title="Shop" href="/women.html">Shop</a></li>
<li><a title="Ofertas" href="/sale.html">Ofertas</a></li>
<li><a tabindex="0" title="Búsquedas populares" href="/search/term/popular">Búsquedas populares</a></li>
<li><a title="Búsqueda avanzada" href="/catalogsearch/advanced">Búsqueda avanzada</a></li>
</ul></div></div><div class="pagebuilder-column links" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="R4HXB7V"><h3 data-content-type="heading" data-appearance="default" data-element="main">Mi perfil</h3><div data-content-type="text" data-appearance="default" data-element="main"><ul>
<li><a title="Mis cuenta" href="/customer/account">Mis cuenta</a></li>
<li><a title="Mis favoritos" href="/wishlist">Mis favoritos</a></li>
<li><a title="Mis pedidos" href="/sales/order/history">Mis pedidos</a></li>
<li><a title="Newsletter" href="/newsletter/manage">Newsletter</a></li>
</ul></div></div><div class="pagebuilder-column links" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="UJA3V2P"><h3 data-content-type="heading" data-appearance="default" data-element="main">Enlaces útiles</h3><div data-content-type="text" data-appearance="default" data-element="main"><ul>
<li><a title="Preguntas frecuentes" href="#">Preguntas frecuentes</a></li>
<li><a title="Rastrear pedido" href="/sales/guest/form">Rastrear pedido</a></li>
<li><a title="Carrito" href="/checkout/cart">Carrito</a></li>
<li><a title="Contact" href="/contact">Contacto</a></li>
</ul></div></div><div class="pagebuilder-column links" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="R2BXI39"><h3 data-content-type="heading" data-appearance="default" data-element="main">Nosotros</h3><div data-content-type="text" data-appearance="default" data-element="main"><ul>
<li><a title="Acerca de nosotros" href="/about-us">Acerca de nosotros</a></li>
<li><a title="Tiendas" href="/tiendas">Tiendas</a></li>
<li><a title="Blog" href="/blog">Blog</a></li>
</ul></div></div></div><div class="pagebuilder-column-line" data-content-type="column-line" data-element="main" data-pb-style="FBSPLV1"><div class="pagebuilder-column column-newsletter" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="QT63A8F"><div data-content-type="text" data-appearance="default" data-element="main"><p>Suscribite a nuestro newsletter</p></div><div data-content-type="html" data-appearance="default" data-element="main" data-pb-style="K2421KV">{{block class="Magento\Newsletter\Block\Subscribe" name="form.subscribe.footer" template="Magento_Newsletter::subscribe.phtml" ifconfig="newsletter/general/active"}}</div></div><div class="pagebuilder-column column-social-networks" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="GWKRNWL"><div data-content-type="text" data-appearance="default" data-element="main"><p style="text-align: center;">¡Matente informado!</p></div><figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="S7U3JYW"><img class="pagebuilder-mobile-hidden" src="{{media url=wysiwyg/Group_70.png}}" alt="" title="" data-element="desktop_image" data-pb-style="YVDIR0P"><img class="pagebuilder-mobile-only" src="{{media url=wysiwyg/Group_70.png}}" alt="" title="" data-element="mobile_image" data-pb-style="HDHWW7H"></figure><figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="KX7G0QM"><img class="pagebuilder-mobile-hidden" src="{{media url=wysiwyg/Group_69.png}}" alt="" title="" data-element="desktop_image" data-pb-style="JMBH0RP"><img class="pagebuilder-mobile-only" src="{{media url=wysiwyg/Group_69.png}}" alt="" title="" data-element="mobile_image" data-pb-style="JR0EVX6"></figure><figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="LESARL2"><img class="pagebuilder-mobile-hidden" src="{{media url=wysiwyg/Group_68.png}}" alt="" title="" data-element="desktop_image" data-pb-style="FIB2ST9"><img class="pagebuilder-mobile-only" src="{{media url=wysiwyg/Group_68.png}}" alt="" title="" data-element="mobile_image" data-pb-style="YX6CYHP"></figure></div></div></div></div></div>
HTML
        ],
    ];

    public function __construct(
        BlockFactory $blockFactory,
        BlockRepositoryInterface $blockRepository
    ) {
        $this->blockFactory = $blockFactory;
        $this->blockRepository = $blockRepository;
    }

    /**
     * Create all about us pages
     */
    public function apply()
    {
        foreach (self::BLOCK_MAP as $blockData) {
            $block = $this->blockFactory->create();
            $block->setData($blockData);
            $this->blockRepository->save($block);
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
