<?php

declare(strict_types=1);

namespace OH\Theme\Setup\Patch\Data;

use Magento\Cms\Model\PageFactory;
use Magento\Cms\Model\PageRepository;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class CreateAboutUsCms implements DataPatchInterface
{
    const CMS_MAP = [
        'homepage' => [
            'identifier' => 'about-us',
            'page_layout' => '1column',
            'title' => 'About us',
            'content' => <<<HTML
<style>#html-body [data-pb-style=BFSBX3L],#html-body [data-pb-style=D0QLIMC],#html-body [data-pb-style=FA8ROVG],#html-body [data-pb-style=IWTUGGC],#html-body [data-pb-style=S0V0DWT],#html-body [data-pb-style=TVQ8OJC],#html-body [data-pb-style=UJ8LTFJ]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat no-repeat;background-attachment:scroll}#html-body [data-pb-style=FLRB8V2],#html-body [data-pb-style=KK8G5AQ],#html-body [data-pb-style=POFWKGD],#html-body [data-pb-style=QM74KBS],#html-body [data-pb-style=SFO851Y]{text-align:center}#html-body [data-pb-style=BAKAHQ3],#html-body [data-pb-style=BQ5MF7A],#html-body [data-pb-style=CI7KIE2],#html-body [data-pb-style=HU60KEH],#html-body [data-pb-style=M7US5BU]{background-position:left top;background-size:cover;background-repeat:no-repeat no-repeat;background-attachment:scroll;align-self:stretch}#html-body [data-pb-style=W88OIE1]{text-align:center}#html-body [data-pb-style=G7NHC5V],#html-body [data-pb-style=GAX9CYB],#html-body [data-pb-style=I1GSDTO],#html-body [data-pb-style=MUQPD87],#html-body [data-pb-style=XMVNMTG]{display:flex;width:100%}#html-body [data-pb-style=I5PWKHP]{display:inline-block}#html-body [data-pb-style=QAMI0K9]{text-align:center}#html-body [data-pb-style=A0HOV8C],#html-body [data-pb-style=AL722OT],#html-body [data-pb-style=D1OEGEW],#html-body [data-pb-style=ECXSIDC],#html-body [data-pb-style=O387IS3],#html-body [data-pb-style=PTQ6OSJ],#html-body [data-pb-style=U96JUWH],#html-body [data-pb-style=V8B33PF],#html-body [data-pb-style=W4N1B3K],#html-body [data-pb-style=WBR0KTD],#html-body [data-pb-style=XCQ62KB],#html-body [data-pb-style=XR6J75I]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat no-repeat;background-attachment:scroll;width:12.5%;align-self:stretch}#html-body [data-pb-style=A0HOV8C],#html-body [data-pb-style=D1OEGEW],#html-body [data-pb-style=O387IS3],#html-body [data-pb-style=V8B33PF]{width:50%}#html-body [data-pb-style=AKN14XF],#html-body [data-pb-style=BETN1YE],#html-body [data-pb-style=HPBAP3D],#html-body [data-pb-style=KBD1H2G],#html-body [data-pb-style=OQ16D4F],#html-body [data-pb-style=P1DRBNW],#html-body [data-pb-style=SP0J2IL]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat no-repeat;background-attachment:scroll;width:16.6667%;align-self:stretch}#html-body [data-pb-style=AKN14XF],#html-body [data-pb-style=BETN1YE],#html-body [data-pb-style=HPBAP3D],#html-body [data-pb-style=KBD1H2G]{width:25%}#html-body [data-pb-style=BETN1YE],#html-body [data-pb-style=KBD1H2G]{width:50%}#html-body [data-pb-style=FKAM2YA]{border-style:none}#html-body [data-pb-style=U7FD85I],#html-body [data-pb-style=WIBQBLL]{max-width:100%;height:auto}#html-body [data-pb-style=PH3KCCV]{border-style:none}#html-body [data-pb-style=MHE6SV6],#html-body [data-pb-style=RDWTPOU]{max-width:100%;height:auto}#html-body [data-pb-style=Q90JBLF]{border-style:none}#html-body [data-pb-style=JS90Q5U],#html-body [data-pb-style=M6LQOND]{max-width:100%;height:auto}#html-body [data-pb-style=XW64SXW]{border-style:none}#html-body [data-pb-style=FT1PRVM],#html-body [data-pb-style=L04Y4CG]{max-width:100%;height:auto}#html-body [data-pb-style=VKOBV1O]{border-style:none}#html-body [data-pb-style=B1MQ79B],#html-body [data-pb-style=MMKYP1Q]{max-width:100%;height:auto}#html-body [data-pb-style=EBT588G]{border-style:none}#html-body [data-pb-style=QU97PON],#html-body [data-pb-style=SR4M8O7]{max-width:100%;height:auto}#html-body [data-pb-style=G1A2D41]{border-style:none}#html-body [data-pb-style=Q460H4L],#html-body [data-pb-style=SC97EFS]{max-width:100%;height:auto}#html-body [data-pb-style=C31IJ1O]{border-style:none}#html-body [data-pb-style=D002ITE],#html-body [data-pb-style=NYIEKAU]{max-width:100%;height:auto}#html-body [data-pb-style=G14HRQ5]{border-style:none}#html-body [data-pb-style=FLVP2FW],#html-body [data-pb-style=OMS15RH]{max-width:100%;height:auto}#html-body [data-pb-style=K2PQ5T8]{border-style:none}#html-body [data-pb-style=A80R0MK],#html-body [data-pb-style=WWAU9PA]{max-width:100%;height:auto}#html-body [data-pb-style=N9I0NTI]{border-style:none}#html-body [data-pb-style=MQCULMQ],#html-body [data-pb-style=OPWHONR]{max-width:100%;height:auto}#html-body [data-pb-style=IFSNPJM]{border-style:none}#html-body [data-pb-style=OU71BAS],#html-body [data-pb-style=PA8NC1C]{max-width:100%;height:auto}#html-body [data-pb-style=MVTNRMS]{border-style:none}#html-body [data-pb-style=F4CXW2B],#html-body [data-pb-style=RH5B4CV]{max-width:100%;height:auto}#html-body [data-pb-style=EO2BCGI]{border-style:none}#html-body [data-pb-style=I3NYW1S],#html-body [data-pb-style=NQRAYJS]{max-width:100%;height:auto}#html-body [data-pb-style=GYVQ8PD]{border-style:none}#html-body [data-pb-style=B63QETC],#html-body [data-pb-style=KFDODHD]{max-width:100%;height:auto}#html-body [data-pb-style=TQ1FP5J]{border-style:none}#html-body [data-pb-style=A1E6EWU],#html-body [data-pb-style=T00QDC7]{max-width:100%;height:auto}#html-body [data-pb-style=BUS7U1C]{border-style:none}#html-body [data-pb-style=FITMD3H],#html-body [data-pb-style=UD04EY9]{max-width:100%;height:auto}#html-body [data-pb-style=BEOPNH9]{border-style:none}#html-body [data-pb-style=HELH6VX],#html-body [data-pb-style=UYTCJXD]{max-width:100%;height:auto}@media only screen and (max-width: 768px) { #html-body [data-pb-style=BEOPNH9],#html-body [data-pb-style=BUS7U1C],#html-body [data-pb-style=C31IJ1O],#html-body [data-pb-style=EBT588G],#html-body [data-pb-style=EO2BCGI],#html-body [data-pb-style=FKAM2YA],#html-body [data-pb-style=G14HRQ5],#html-body [data-pb-style=G1A2D41],#html-body [data-pb-style=GYVQ8PD],#html-body [data-pb-style=IFSNPJM],#html-body [data-pb-style=K2PQ5T8],#html-body [data-pb-style=MVTNRMS],#html-body [data-pb-style=N9I0NTI],#html-body [data-pb-style=PH3KCCV],#html-body [data-pb-style=Q90JBLF],#html-body [data-pb-style=TQ1FP5J],#html-body [data-pb-style=VKOBV1O],#html-body [data-pb-style=XW64SXW]{border-style:none} }</style>
<div class="about-us-banner" data-content-type="row" data-appearance="full-width" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="main" data-pb-style="S0V0DWT">
<div class="row-full-width-inner" data-element="inner">
<h2 data-content-type="heading" data-appearance="default" data-element="main" data-pb-style="SFO851Y">Acerca de nosotros</h2>
<div data-content-type="text" data-appearance="default" data-element="main">
<p id="YOPWMP0" style="text-align: center;">Somos BOTANICA una marca de cosmética natural comprometida con tu bienestar y el cuidado del medio ambiente. Nos enorgullece ofrecerte productos de belleza de alta calidad que respetan tu piel y contribuyen a la preservación del entorno natural. &nbsp;</p>
</div>
</div>
</div>
<div data-content-type="row" data-appearance="contained" data-element="main">
<div class="about-us-our-mision" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="BFSBX3L">
<div class="pagebuilder-column-group" data-background-images="{}" data-content-type="column-group" data-appearance="default" data-grid-size="12" data-element="main" data-pb-style="BQ5MF7A">
<div class="pagebuilder-column-line" data-content-type="column-line" data-element="main" data-pb-style="XMVNMTG">
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="A0HOV8C">
<h3 data-content-type="heading" data-appearance="default" data-element="main">Nuestra misión</h3>
<div data-content-type="text" data-appearance="default" data-element="main">
<p>La misión de BOTANICA es proporcionar productos de belleza natural sin comprometer la eficacia ni la calidad. Creemos en la importancia de ofrecer opciones saludables y respetuosas con el medio ambiente, brindándote una experiencia de cuidado personal consciente y responsable.</p>
</div>
</div>
<div class="pagebuilder-column images-container" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="D1OEGEW">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="G14HRQ5"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/cosmetic-1.png}}" alt="" data-element="desktop_image" data-pb-style="OMS15RH"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/cosmetic-1.png}}" alt="" data-element="mobile_image" data-pb-style="FLVP2FW"></figure>
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="K2PQ5T8"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/cosmetic-2.png}}" alt="" data-element="desktop_image" data-pb-style="WWAU9PA"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/cosmetic-2.png}}" alt="" data-element="mobile_image" data-pb-style="A80R0MK"></figure>
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="N9I0NTI"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/1_1.png}}" alt="" data-element="desktop_image" data-pb-style="MQCULMQ"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/1_1.png}}" alt="" data-element="mobile_image" data-pb-style="OPWHONR"></figure>
</div>
</div>
</div>
</div>
</div>
<div data-content-type="row" data-appearance="contained" data-element="main">
<div class="about-us-our-values" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="IWTUGGC">
<div class="pagebuilder-column-group" data-background-images="{}" data-content-type="column-group" data-appearance="default" data-grid-size="12" data-element="main" data-pb-style="HU60KEH">
<div class="pagebuilder-column-line" data-content-type="column-line" data-element="main" data-pb-style="MUQPD87">
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="V8B33PF">
<h3 data-content-type="heading" data-appearance="default" data-element="main">Nuestros valores</h3>
</div>
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="O387IS3">
<div data-content-type="text" data-appearance="default" data-element="main">
<ol>
<li>
<p><strong>Sustentabilidad:</strong><br>Nos esforzamos por reducir nuestro impacto en el medio ambiente en todas las etapas de nuestro negocio. Utilizamos ingredientes naturales y sostenibles, evitando el uso de productos químicos dañinos y apoyando prácticas de producción ecoamigables.&nbsp;</p>
</li>
<li><strong>Ética:</strong> <br>Trabajamos con proveedores que comparten nuestros valores éticos y garantizan prácticas justas y responsables en la obtención de ingredientes y en la fabricación de nuestros productos.&nbsp;</li>
<li><strong>Calidad:</strong> <br>Trabajamos para ofrecer productos de belleza de la más alta calidad. Cada producto en nuestra tienda está cuidadosamente formulado y diseñado para brindarte resultados efectivos y duraderos. Queremos que te sientas confiado y orgulloso de usar nuestros productos en tu rutina de cuidado personal.&nbsp;</li>
<li><strong>Impacto social:</strong> <br>No solo nos enfocamos en el impacto ambiental de nuestra tienda, sino que también nos preocupamos por nuestro impacto social. Colaboramos con organizaciones y proyectos locales que promueven la sostenibilidad, la equidad y el bienestar de las comunidades.&nbsp;</li>
</ol>
</div>
</div>
</div>
</div>
</div>
</div>
<div data-content-type="row" data-appearance="contained" data-element="main">
<div class="about-us-our-history" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="TVQ8OJC">
<h3 data-content-type="heading" data-appearance="default" data-element="main" data-pb-style="KK8G5AQ">Nuestra historia</h3>
<div data-content-type="text" data-appearance="default" data-element="main">
<p>BOTANICA surgió como una respuesta a la necesidad de productos de belleza que fueran seguros, naturales y respetuosos con el medio ambiente. A lo largo de nuestra historia, hemos aprendido y evolucionado, mejorando continuamente nuestras fórmulas y comprometiéndonos con la innovación en la cosmética natural.</p>
<p><br>Hoy nos enorgullece ser parte del movimiento hacia una belleza más consciente y sostenible. Agradecemos a nuestros clientes y seguidores por su apoyo en este viaje y esperamos seguir inspirando y cuidando de ti con nuestros productos naturales.</p>
<p>&nbsp;</p>
</div>
<h3 data-content-type="heading" data-appearance="default" data-element="main" data-pb-style="POFWKGD">Nuestros productos</h3>
<div data-content-type="text" data-appearance="default" data-element="main">
<p id="J7KF8IE">En BOTANICA, encontrarás una amplia variedad de productos de belleza natural para el cuidado facial, corporal y capilar. Desde cremas hidratantes hasta aceites esenciales, todos nuestros productos están cuidadosamente seleccionados para ofrecerte opciones saludables y efectivas que realzan tu belleza de manera natural.&nbsp;</p>
<p>&nbsp;</p>
</div>
<div class="pagebuilder-column-group" data-background-images="{}" data-content-type="column-group" data-appearance="default" data-grid-size="12" data-element="main" data-pb-style="M7US5BU">
<div class="pagebuilder-column-line" data-content-type="column-line" data-element="main" data-pb-style="I1GSDTO">
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="P1DRBNW">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="IFSNPJM"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/1_2.png}}" alt="" data-element="desktop_image" data-pb-style="OU71BAS"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/1_2.png}}" alt="" data-element="mobile_image" data-pb-style="PA8NC1C"></figure>
</div>
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="OQ16D4F">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="MVTNRMS"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/2_3.png}}" alt="" data-element="desktop_image" data-pb-style="RH5B4CV"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/2_3.png}}" alt="" data-element="mobile_image" data-pb-style="F4CXW2B"></figure>
</div>
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="SP0J2IL">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="EO2BCGI"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/3_3.png}}" alt="" data-element="desktop_image" data-pb-style="I3NYW1S"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/3_3.png}}" alt="" data-element="mobile_image" data-pb-style="NQRAYJS"></figure>
</div>
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="AKN14XF">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="GYVQ8PD"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/4_1.png}}" alt="" data-element="desktop_image" data-pb-style="KFDODHD"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/4_1.png}}" alt="" data-element="mobile_image" data-pb-style="B63QETC"></figure>
</div>
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="HPBAP3D">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="TQ1FP5J"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/5_2.png}}" alt="" data-element="desktop_image" data-pb-style="A1E6EWU"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/5_2.png}}" alt="" data-element="mobile_image" data-pb-style="T00QDC7"></figure>
</div>
</div>
</div>
</div>
</div>
<div class="about-us-our-team" data-content-type="row" data-appearance="full-width" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="main" data-pb-style="FA8ROVG">
<div class="row-full-width-inner" data-element="inner">
<h3 data-content-type="heading" data-appearance="default" data-element="main" data-pb-style="FLRB8V2">Nuestro equipo</h3>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><span id="docs-internal-guid-c775eae3-7fff-77b9-81bf-164e7bc77bd9"><span style="font-size: 11pt; font-family: Arial; color: #000000; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; vertical-align: baseline; white-space: pre-wrap;">En BOTANICA, contamos con un grupo de personas apasionadas y comprometidas que impulsa nuestra misión de belleza natural y sustentable. Nuestro equipo está conformado por expertos en formulación, dermatología y sostenibilidad, quienes trabajan diariamente para brindarte la mejor experiencia de cuidado personal y promover un cambio positivo en la industria de la belleza.&nbsp; </span></span></p>
<p>&nbsp;</p>
</div>
<div class="pagebuilder-column-group" data-background-images="{}" data-content-type="column-group" data-appearance="default" data-grid-size="8" data-element="main" data-pb-style="CI7KIE2">
<div class="pagebuilder-column-line" data-content-type="column-line" data-element="main" data-pb-style="G7NHC5V">
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="W4N1B3K">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="FKAM2YA"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/16_3.png}}" alt="" data-element="desktop_image" data-pb-style="WIBQBLL"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/16_3.png}}" alt="" data-element="mobile_image" data-pb-style="U7FD85I"></figure>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><strong>Nombre del empleado</strong></p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p>CEO</p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><a tabindex="0" href="linkedin.com">Ver perfil de linkedin</a></p>
</div>
</div>
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="PTQ6OSJ">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="PH3KCCV"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/15_1.png}}" alt="" data-element="desktop_image" data-pb-style="MHE6SV6"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/15_1.png}}" alt="" data-element="mobile_image" data-pb-style="RDWTPOU"></figure>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><strong>Nombre del empleado</strong></p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p>CEO</p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><a tabindex="0" href="linkedin.com">Ver perfil de linkedin</a></p>
</div>
</div>
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="AL722OT">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="Q90JBLF"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/12_3.png}}" alt="" data-element="desktop_image" data-pb-style="JS90Q5U"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/12_3.png}}" alt="" data-element="mobile_image" data-pb-style="M6LQOND"></figure>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><strong>Nombre del empleado</strong></p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p>CEO</p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><a tabindex="0" href="linkedin.com">Ver perfil de linkedin</a></p>
</div>
</div>
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="XCQ62KB">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="XW64SXW"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/7_1.png}}" alt="" data-element="desktop_image" data-pb-style="FT1PRVM"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/7_1.png}}" alt="" data-element="mobile_image" data-pb-style="L04Y4CG"></figure>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><strong>Nombre del empleado</strong></p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p>CEO</p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><a tabindex="0" href="linkedin.com">Ver perfil de linkedin</a></p>
</div>
</div>
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="U96JUWH">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="VKOBV1O"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/2_4.png}}" alt="" data-element="desktop_image" data-pb-style="MMKYP1Q"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/2_4.png}}" alt="" data-element="mobile_image" data-pb-style="B1MQ79B"></figure>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><strong>Nombre del empleado</strong></p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p>CEO</p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><a tabindex="0" href="linkedin.com">Ver perfil de linkedin</a></p>
</div>
</div>
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="ECXSIDC">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="EBT588G"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/1_3.png}}" alt="" data-element="desktop_image" data-pb-style="SR4M8O7"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/1_3.png}}" alt="" data-element="mobile_image" data-pb-style="QU97PON"></figure>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><strong>Nombre del empleado</strong></p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p>CEO</p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><a tabindex="0" href="linkedin.com">Ver perfil de linkedin</a></p>
</div>
</div>
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="WBR0KTD">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="G1A2D41"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/8_2.png}}" alt="" data-element="desktop_image" data-pb-style="Q460H4L"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/8_2.png}}" alt="" data-element="mobile_image" data-pb-style="SC97EFS"></figure>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><strong>Nombre del empleado</strong></p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p>CEO</p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><a tabindex="0" href="linkedin.com">Ver perfil de linkedin</a></p>
</div>
</div>
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="XR6J75I">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="C31IJ1O"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/10_3.png}}" alt="" data-element="desktop_image" data-pb-style="D002ITE"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/10_3.png}}" alt="" data-element="mobile_image" data-pb-style="NYIEKAU"></figure>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><strong>Nombre del empleado</strong></p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p>CEO</p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main">
<p><a tabindex="0" href="linkedin.com">Ver perfil de linkedin</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="about-us-join-team" data-content-type="row" data-appearance="full-width" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="main" data-pb-style="UJ8LTFJ">
<div class="row-full-width-inner" data-element="inner">
<h3 data-content-type="heading" data-appearance="default" data-element="main" data-pb-style="QM74KBS">¡Únete a Nuestro Equipo!</h3>
<div data-content-type="text" data-appearance="default" data-element="main">
<p style="text-align: center;"><span id="docs-internal-guid-4bdb1a1a-7fff-acd7-4ea2-dd95e6e043e5" style="color: #ecf0f1;"><span style="font-size: 11pt; font-family: Arial; background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; vertical-align: baseline; white-space: pre-wrap;">En BOTANICA, fomentamos un ambiente de trabajo colaborativo, inclusivo y respetuoso, donde todas las ideas son valoradas. Si eres una persona apasionada por la belleza natural y la sostenibilidad, y deseas marcar la diferencia en la industria de la belleza, ¡te invitamos a unirte a nuestro equipo!</span></span></p>
</div>
<div data-content-type="buttons" data-appearance="inline" data-same-width="false" data-element="main" data-pb-style="W88OIE1">
<div data-content-type="button-item" data-appearance="default" data-element="main" data-pb-style="I5PWKHP">
<div class="pagebuilder-button-primary" data-element="empty_link" data-pb-style="QAMI0K9"><span data-element="link_text">Ver todas las búsquedas abiertas</span></div>
</div>
</div>
</div>
</div>
<div data-content-type="row" data-appearance="contained" data-element="main">
<div class="about-us-info" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="D0QLIMC">
<div class="pagebuilder-column-group" data-background-images="{}" data-content-type="column-group" data-appearance="default" data-grid-size="12" data-element="main" data-pb-style="BAKAHQ3">
<div class="pagebuilder-column-line" data-content-type="column-line" data-element="main" data-pb-style="GAX9CYB">
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="BETN1YE">
<h3 data-content-type="heading" data-appearance="default" data-element="main">¡Gracias por elegir la belleza natural y sostenible!</h3>
</div>
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="KBD1H2G">
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="BUS7U1C"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/1_4.png}}" alt="" data-element="desktop_image" data-pb-style="UD04EY9"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/1_4.png}}" alt="" data-element="mobile_image" data-pb-style="FITMD3H"></figure>
<figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="BEOPNH9"><img class="pagebuilder-mobile-hidden" title="" src="{{media url=wysiwyg/14_2.png}}" alt="" data-element="desktop_image" data-pb-style="UYTCJXD"><img class="pagebuilder-mobile-only" title="" src="{{media url=wysiwyg/14_2.png}}" alt="" data-element="mobile_image" data-pb-style="HELH6VX"></figure>
</div>
</div>
</div>
</div>
</div>
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