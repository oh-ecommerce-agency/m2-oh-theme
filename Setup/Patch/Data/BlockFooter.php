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
<style>#html-body [data-pb-style=ELLJV15],#html-body [data-pb-style=FFLIWHV]{background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll}#html-body [data-pb-style=FFLIWHV]{justify-content:flex-start;display:flex;flex-direction:column}#html-body [data-pb-style=ELLJV15]{align-self:stretch}#html-body [data-pb-style=XUSKTFI]{display:flex;width:100%}#html-body [data-pb-style=TA3DF86]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;text-align:center;width:20%;align-self:stretch}#html-body [data-pb-style=Y1E84VK]{text-align:center}#html-body [data-pb-style=FDUMI2V],#html-body [data-pb-style=HRSVRFS],#html-body [data-pb-style=IACACP4],#html-body [data-pb-style=UBUPOVP]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;width:20%;align-self:stretch}#html-body [data-pb-style=PX9WOWF]{display:flex;width:100%}#html-body [data-pb-style=TG6SL8E]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;width:50%;align-self:stretch}#html-body [data-pb-style=QD62R8H]{text-align:left}#html-body [data-pb-style=TYP2V6U]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;width:50%;align-self:stretch}#html-body [data-pb-style=BJWOG07]{text-align:center}</style><div class="footer-mars" data-content-type="row" data-appearance="full-width" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="main" data-pb-style="FFLIWHV"><div class="row-full-width-inner" data-element="inner"><div class="pagebuilder-column-group footer-mars__container" data-background-images="{}" data-content-type="column-group" data-appearance="default" data-grid-size="10" data-element="main" data-pb-style="ELLJV15"><div class="pagebuilder-column-line" data-content-type="column-line" data-element="main" data-pb-style="XUSKTFI"><div class="pagebuilder-column brand" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="TA3DF86"><div class="logo-footer" data-content-type="html" data-appearance="default" data-element="main">&lt;a href="/" title="Mars"&gt;   &lt;img src="{{media url=wysiwyg/footer/logo-footer.svg}}" alt="Mars" /&gt; &lt;/a&gt;</div><h2 data-content-type="heading" data-appearance="default" data-element="main" data-pb-style="Y1E84VK">Frase de la marca</h2></div><div class="pagebuilder-column links" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="IACACP4"><h3 data-content-type="heading" data-appearance="default" data-element="main">Tienda</h3><div data-content-type="text" data-appearance="default" data-element="main"><ul> <li><a title="Nuevos ingresos" href="#">Nuevos ingresos</a></li> <li><a tabindex="0" title="Categoría 1" href="#">Categoría 1</a></li> <li><a title="Categoría 2" href="#">Categoría 2</a></li> <li><a title="Categoría 3" href="#">Categoría 3</a></li> </ul></div></div><div class="pagebuilder-column links" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="UBUPOVP"><h3 data-content-type="heading" data-appearance="default" data-element="main">Nosotros</h3><div data-content-type="text" data-appearance="default" data-element="main"><ul> <li><a title="About" href="#">Acerca de nosotros</a></li> <li><a title="Blog" href="#">Blog</a></li> </ul></div></div><div class="pagebuilder-column links" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="HRSVRFS"><h3 data-content-type="heading" data-appearance="default" data-element="main">Mi perfil</h3><div data-content-type="text" data-appearance="default" data-element="main"><ul> <li><a title="Mis favoritos" href="/wishlist">Mis favoritos</a></li> <li><a title="Cerrar sesión" href="/customer/account/logout">Cerrar sesión</a></li> </ul></div></div><div class="pagebuilder-column links" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="FDUMI2V"><h3 data-content-type="heading" data-appearance="default" data-element="main">¿Necesitas ayuda?</h3><div data-content-type="text" data-appearance="default" data-element="main"><ul> <li><a title="Preguntas frecuentes" href="#">Preguntas frecuentes</a></li> <li><a title="Contact" href="/contact">Contacto</a></li> </ul></div></div></div><div class="pagebuilder-column-line" data-content-type="column-line" data-element="main" data-pb-style="PX9WOWF"><div class="pagebuilder-column column-newsletter" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="TG6SL8E"><div data-content-type="text" data-appearance="default" data-element="main"><p>Suscribite a nuestro newsletter</p></div><div data-content-type="html" data-appearance="default" data-element="main" data-pb-style="QD62R8H">{{block class="Magento\Newsletter\Block\Subscribe" name="form.subscribe" as="subscribe" before="-" template="Magento_Newsletter::subscribe.phtml" ifconfig="newsletter/general/active"}}</div></div><div class="pagebuilder-column column-social-networks" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="TYP2V6U"><div data-content-type="text" data-appearance="default" data-element="main"><p style="text-align: center;">¡Matente informado!</p></div><div class="social-networks" data-content-type="html" data-appearance="default" data-element="main" data-pb-style="BJWOG07">&lt;a href="https://fb.com" title="Facebook" target="_blank"&gt;&lt;/a&gt; 
&lt;a href="https://instagram.com" title="Instagram" target="_blank"&gt;&lt;/a&gt; 
&lt;a href="https://tiktok.com" title="Tiktok" target="_blank"&gt;&lt;/a&gt;</div></div></div></div></div></div>
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
