<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
  <!-- Meta -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="@lang('extra.page_description')">
  <meta name="keywords" content="@lang('extra.page_keywords')">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="facebook-domain-verification" content="fkb2gh1zufv2n8ifz51hd0bek0o2l1" />

  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N8V7HGL');
  </script>
  <!-- End Google Tag Manager -->
  
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '365510238458390'); 
    fbq('track', 'PageView');
  </script>
  <noscript>
    <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=365510238458390&ev=PageView
    &noscript=1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->

  <!-- Setting -->
  <title>Get Schiffy - @lang('header_nfts.title_nfts')</title>
  <link rel="shortcut icon" href="/static/resources/images/GetSchiffy-Logo.webp">

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/css/splide-core.min.css">
  <link rel="stylesheet" href="/static/css/fonts.css">
  <link rel="stylesheet" href="/static/css/home/app_v1.2.8.min.css">
  <link rel="stylesheet" href="/static/css/home/nfts/style_v1.0.5.min.css">
  
  <!-- Cookies -->
  <style type="text/css">
    .terms-policies 
    {
      transition: all ease-in .3s;
      position: fixed;
      display: flex;
      justify-content:center;
      align-items: center;
      bottom: 0px;
      width: 100%;
      padding: 8px 10px;
      z-index: 1100;
      transform: translateY(500px);
    }

    .terms-policies.terms-style 
    {
      background-color: #fff;
      color: #130806;
    }

    .text-termsPolicies 
    {
      max-width: 800px;
      text-align: center;
      font-size: 16px;
    }

    .text-termsPolicies .more-termsPolicies 
    {
      text-decoration: underline;
      color: #039be5;
    }

    .button_termsPolicies
    {
      user-select: none;
      margin-left: 10px;
      color: #130806;
      padding: 4px 8px;
      background-color: #F2CB05;
      border-radius: 4px;
      font-weight: bold;
      transition: all ease-in .3s;
      border: 1px solid transparent;
    }

    .button_termsPolicies:hover {
      border-color: #130806;
    }

    .button_termsPolicies:active, .button_termsPolicies:focus {
      background-color: #F2CB05 !important;
    }

    @media all and (max-width: 600px)
    {
      .terms-policies {
        flex-direction: column-reverse;
        padding-bottom: 12px;
      }

      .button_termsPolicies {
        margin: 12px 0px;
      }
    }
  </style>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-220386621-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-220386621-1');
  </script>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8V7HGL"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <div id="hero-slider">
    <div id="logo" class="mask select-none">
      <div class="w-[80px] h-[40px] menu_desktop:w-[100px] menu_desktop:h-[55px] logo-brand">
        <a href="https://getschiffy.com/{{$locale}}" class="overflow-hidden block w-full h-full">
          <img class="w-full h-full align-top" src="/static/resources/images/GetSchiffy-Logo.webp" alt="Get Schiffy Logo"></a>
      </div>

      <div class="title-page"><h1 class="uppercase text-yellow text-xl menu_desktop:text-2xl font-bold">@lang('nfts.title_nfts')</h1></div>
    </div>

    <div id="slideshow">
      <div id="slides-main" class="slides gradient-brownTolight">
        <!-- Item -->
        <div class="slide" data-index="0">
          <div class="abs-mask">
            <div class="slide-image">
              <div class="w-full h-full flex flex-col justify-center items-center">
                <div class="max-w-[600px] select-none">
                  <video class="w-full h-full object-contain" playsinline autoplay muted loop id="animationSchiffy" poster="/static/resources/images/banner_nfts_marketplace_getschiffy.webp">
                    <source src="/static/resources/videos/nft_marketplace_animation.mp4" type="video/mp4">
                  </video>
                </div>

                <div class="text-center mt-[30px]">
                  <div>
                    <div>
                      <span class="select-none inline-block py-[2px] px-[4px] text-sm font-bold rounded bg-white text-black">1st phase</span> 
                      <span>@lang('nfts.sold_quickly_page1')</span> 

                      <div class="mt-[8px]"><h3 class="text-xl font-bold text-yellow uppercase">@lang('nfts.minting_page1')</h3></div>
                    </div>
                  </div>

                  <div class="max-w-[700px] px-[20px]">
                    <p class="text-base">@lang('nfts.description_page1')</p>
                  </div>

                  <div class="mt-[8px] select-none">
                    <div>
                      <a href="https://nft.getschiffy.com/" class="inline-block bg-yellow text-black transition-all duration-300 hover:shadow hover:shadow-yellow py-[6px] px-[12px] text-base sm:text-lg mx-[8px] font-bold rounded">@lang('nfts.normal_nfts')</a>
                      <a href="https://nft.getschiffy.com/" class="inline-block bg-yellow text-black transition-all duration-300 hover:shadow hover:shadow-yellow py-[6px] px-[12px] text-base sm:text-lg mx-[8px] font-bold rounded">@lang('nfts.silver_nfts')</a>
                      <a href="https://nft.getschiffy.com/" class="inline-block bg-yellow text-black transition-all duration-300 hover:shadow hover:shadow-yellow py-[6px] px-[12px] text-base sm:text-lg mx-[8px] font-bold rounded">@lang('nfts.gold_nfts')</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="slide" data-index="1">
          <div class="abs-mask">
            <div class="slide-image">
              <div class="w-full h-full flex flex-col justify-center items-center">
                <div class="w-[250px] sm:max-w-[400px] select-none">
                  <img class="object-cover w-full h-full align-top" src="/static/resources/images/enemys-getschiffy.webp" alt="Get schiffy enemys">
                </div>

                <div class="text-center px-[20px] max-w-[800px]">
                  <p class="mt-[8px] text-base sm:text-lg font-bold shadow-text">@lang('nfts.subtitle_page2')</p>
                  <p class="mt-[8px]">@lang('nfts.description_page2')</p>
                  <p class="mt-[8px] font-bold">@lang('nfts.said_page2') <span class="starSlide inline-block bg-yellow text-black rounded py-[4px] px-[8px] font-bold cursor-pointer transition-all duration-300 hover:shadow hover:shadow-yellow">@lang('nfts.nfts_cand_page2')</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="slide" data-index="2">
          <div class="abs-mask">
            <div class="slide-image">
              <div class="w-full h-full flex flex-col justify-center items-center text-center px-[20px]">
                <div><h3 class="text-2xl font-bold shadow-text">@lang('nfts.title_page3')</h3></div>

                <!-- List NFTs -->
                <div class="max-w-[1000px] mt-[12px] w-[99%]">
                  <!-- Track -->
                  <div id="nfts-splide_1" class="sm:hidden w-full h-[300px]">
                    <div class="splide__track w-full h-full">
                      <ul class="splide__list">
                        <!-- Item -->
                        <div class="px-[10px] splide__slide flex flex-col justify-center items-center">
                          <div class="w-[100px] select-none">
                            <img class="w-full align-top" src="/static/resources/images/nfts/normal_nfts_1.webp" alt="Get schiffy NFTs normal">
                          </div>

                          <div class="mt-[8px] w-full text-left h-auto max-w-[600px] border-l-2 border-yellow pl-[10px]">
                            <div><span class="bg-black text-white font-bold shadow-text text-lg">@lang('nfts.normal_nfts')</span></div>
                            <div><p><span class="bg-yellow text-black inline-block py-[2px] px-[6px] font-bold rounded">@lang('nfts.nft_utility'):</span> @lang('nfts.utility_normal')</p></div>
                          </div>
                        </div>

                        <!-- Item -->
                        <div class="px-[10px] splide__slide flex flex-col justify-center items-center mt-[10px]">
                          <div class="w-[100px] select-none">
                            <img class="w-full align-top" src="/static/resources/images/nfts/silver_nfts_3.webp" alt="Get schiffy NFTs Silver">
                          </div>

                          <div class="mt-[8px] w-full text-left h-auto max-w-[600px] border-l-2 border-yellow pl-[10px]">
                            <div><span class="bg-black text-white font-bold shadow-text text-lg">@lang('nfts.silver_nfts')</span></div>
                            <div><p><span class="bg-yellow text-black inline-block py-[2px] px-[6px] font-bold rounded">@lang('nfts.nft_utility'):</span> @lang('nfts.utility_silver')</p></div>
                          </div>
                        </div>
                        
                        <!-- Item -->
                        <div class="spx-[10px] plide__slide flex flex-col justify-center items-center mt-[10px]">
                          <div class="w-[100px] select-none">
                            <img class="w-full align-top" src="/static/resources/images/nfts/gold_nfts_1.webp" alt="Get schiffy NFTs Gold">
                          </div>

                          <div class="mt-[8px] w-full text-left h-auto max-w-[600px] border-l-2 border-yellow pl-[10px]">
                            <div><span class="bg-black text-white font-bold shadow-text text-lg">@lang('nfts.gold_nfts')</span></div>
                            <div><p><span class="bg-yellow text-black inline-block py-[2px] px-[6px] font-bold rounded">@lang('nfts.nft_utility'):</span> @lang('nfts.utility_gold')</p></div>
                          </div>
                        </div>
                      </ul>
                    </div>
                  </div>

                  <!-- List -->
                  <div class="hidden sm:block">
                    <!-- Item -->
                    <div class="splide__slide flex justify-center items-center">
                      <div class="w-[100px] select-none">
                        <img class="w-full align-top" src="/static/resources/images/nfts/normal_nfts_1.webp" alt="Get schiffy NFTs normal">
                      </div>

                      <div class="text-left w-[90%] max-w-[600px] border-l-2 border-yellow pl-[10px] ml-[10px]">
                        <div><span class="bg-black text-white font-bold shadow-text text-lg">@lang('nfts.normal_nfts')</span></div>
                        <div><p><span class="bg-yellow text-black inline-block py-[2px] px-[6px] font-bold rounded">@lang('nfts.nft_utility'):</span> @lang('nfts.utility_normal')</p></div>
                      </div>
                    </div>

                    <!-- Item -->
                    <div class="splide__slide flex justify-center items-center mt-[10px]">
                      <div class="w-[100px] select-none">
                        <img class="w-full align-top" src="/static/resources/images/nfts/silver_nfts_3.webp" alt="Get schiffy NFTs Silver">
                      </div>

                      <div class="text-left w-[90%] max-w-[600px] border-l-2 border-yellow pl-[10px] ml-[10px]">
                        <div><span class="bg-black text-white font-bold shadow-text text-lg">@lang('nfts.silver_nfts')</span></div>
                        <div><p><span class="bg-yellow text-black inline-block py-[2px] px-[6px] font-bold rounded">@lang('nfts.nft_utility'):</span> @lang('nfts.utility_silver')</p></div>
                      </div>
                    </div>
                    
                    <!-- Item -->
                    <div class="splide__slide flex justify-center items-center mt-[10px]">
                      <div class="w-[100px] select-none">
                        <img class="w-full align-top" src="/static/resources/images/nfts/gold_nfts_1.webp" alt="Get schiffy NFTs Gold">
                      </div>

                      <div class="text-left w-[90%] max-w-[600px] border-l-2 border-yellow pl-[10px] ml-[10px]">
                        <div><span class="bg-black text-white font-bold shadow-text text-lg">@lang('nfts.gold_nfts')</span></div>
                        <div><p><span class="bg-yellow text-black inline-block py-[2px] px-[6px] font-bold rounded">@lang('nfts.nft_utility'):</span> @lang('nfts.utility_gold')</p></div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Subtitle -->
                <div class="mt-[12px]"><p class="font-bold text-lg text-yellow shadow-text">@lang('nfts.subtitle_nfts')</p></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="slide" data-index="3">
          <div class="abs-mask">
            <div class="slide-image">
              <div class="w-full h-full flex flex-col justify-center items-center text-center">
                <div class="max-w-[1000px] px-[20px]">
                  <div><h3 class="text-xl sm:text-3xl font-bold shadow-text">@lang('nfts.footer_page4')</h3></div>

                  <div class="mt-[12px] sm:mt-[20px]">
                    <p>@lang('nfts.page4_rotation')</p>
                  </div>

                  <div class="mt-[8px] sm:mt-[10px] inline-block select-none">
                    <h3 class="bg-yellow text-black font-bold shadow-text text-base sm:text-lg py-[4px] px-[10px] rounded">@lang('nfts.total_nftsPage4')</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="slide" data-index="4">
          <div class="abs-mask">
            <div class="slide-image">
              <div class="w-full h-full flex flex-col justify-center items-center text-center">
                <div class="max-w-[1000px] px-[20px]">
                  <div><h3 class="text-xl sm:text-3xl font-bold shadow-text">@lang('nfts.footer_page4')</h3></div>

                  <div class="mt-[10px] sm:mt-[12px]">
                    <p><span class="select-none bg-white text-black font-bold inline-block py-[4px] px-[6px] rounded">@lang('nfts.page4_example')</span> @lang('nfts.page4_example_Text')</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="slide" data-index="5">
          <div class="abs-mask">
            <div class="slide-image">
              <div class="w-full h-full flex flex-col justify-center items-center text-center">
                <div class="max-w-[1000px] px-[20px]">
                  <div><h3 class="text-xl sm:text-3xl font-bold shadow-text text-yellow">@lang('nfts.footer_page5')</h3></div>

                  <div class="mt-[12px] sm:mt-[20px]">
                    <p>@lang('nfts.myths_page5')</p>
                  </div>

                  <div class="mt-[8px] sm:mt-[10px]">
                    <p><span class="select-none bg-black text-yellow font-bold inline-block py-[4px] px-[6px] rounded">@lang('nfts.noway_page5')</span> @lang('nfts.way_page5')</p>
                  </div>

                  <div class="mt-[8px] sm:mt-[10px]">
                    <p class="text-yellow font-bold shadow-text">@lang('nfts.genius_page5')</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="slide" data-index="6">
          <div class="abs-mask">
            <div class="slide-image">
              <div class="w-full h-full flex flex-col justify-center items-center text-center">
                <div class="max-w-[1000px] px-[20px]">
                  <div><h3 class="text-xl sm:text-3xl font-bold shadow-text text-yellow">@lang('nfts.footer_page5_2')</h3></div>

                  <div class="mt-[20px] bg-[#ffffff13] py-[4px] px-[8px] rounded">
                    <p>@lang('nfts.example_page5')</p>
                  </div>

                  <div class="select-none mt-[20px] bg-yellow text-black shadow shadow-yellow font-bold inline-block py-[6px] px-[12px]">
                    <span>@lang('nfts.viral_page5')</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="slide" data-index="7">
          <div class="abs-mask">
            <div class="w-full h-full flex flex-col justify-center items-center">
              <div class="max-w-[800px] select-none">
                <img class="object-cover w-full h-full align-top" src="/static/resources/images/banner_nfts_marketplace_getschiffy.webp" alt="Get schiffy banner nfts">
              </div>

              <div class="text-center px-[20px] max-w-[800px] mt-[40px]">
                <p class="mt-[8px] text-lg font-bold shadow-text">@lang('nfts.viral_page6')</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="slides-aux" class="slides mask">
        <div class="slide-footer slide flex items-center" data-index="0">
          <h2>@lang('nfts.footer_page1')</h2>

          <div class="ml-[16px] select-none">
            <button class="starSlide bg-yellow text-black py-[6px] px-[10px] text-base font-bold rounded transition-all duration-300 hover:shadow hover:shadow-yellow">@lang('nfts.discover_nfts')</button>
          </div>
        </div>

        <div class="slide-footer slide flex items-center" data-index="1">
          <h2>@lang('nfts.footer_page2')</h2>

          <div class="ml-[16px] select-none">
            <button class="starSlide bg-yellow text-black py-[6px] px-[10px] text-base font-bold rounded transition-all duration-300 hover:shadow hover:shadow-yellow">@lang('nfts.discover_nfts')</button>
          </div>
        </div>

        <div class="slide-footer slide flex items-center" data-index="2">
          <h2>@lang('nfts.footer_page3')</h2>

          <div class="ml-[16px] select-none">
            <button class="starSlide bg-yellow text-black py-[6px] px-[10px] text-base font-bold rounded transition-all duration-300 hover:shadow hover:shadow-yellow">@lang('nfts.discover_nfts')</button>
          </div>
        </div>
        
        <div class="slide-footer slide flex items-center" data-index="3">
          <h2>@lang('nfts.footer_page4')</h2>

          <div class="ml-[16px] select-none">
            <button class="starSlide bg-yellow text-black py-[6px] px-[10px] text-base font-bold rounded transition-all duration-300 hover:shadow hover:shadow-yellow">@lang('nfts.discover_nfts')</button>
          </div>
        </div>

        <div class="slide-footer slide flex items-center" data-index="4">
          <h2>@lang('nfts.footer_page4')</h2>

          <div class="ml-[16px] select-none">
            <button class="starSlide bg-yellow text-black py-[6px] px-[10px] text-base font-bold rounded transition-all duration-300 hover:shadow hover:shadow-yellow">@lang('nfts.discover_nfts')</button>
          </div>
        </div>

        <div class="slide-footer slide flex items-center" data-index="5">
          <h2>@lang('nfts.footer_page5')</h2>

          <div class="ml-[16px] select-none">
            <button class="starSlide bg-yellow text-black py-[6px] px-[10px] text-base font-bold rounded transition-all duration-300 hover:shadow hover:shadow-yellow">@lang('nfts.discover_nfts')</button>
          </div>
        </div>

        <div class="slide-footer slide flex items-center" data-index="6">
          <h2>@lang('nfts.footer_page5_2')</h2>

          <div class="ml-[16px] select-none">
            <button class="starSlide bg-yellow text-black py-[6px] px-[10px] text-base font-bold rounded transition-all duration-300 hover:shadow hover:shadow-yellow">@lang('nfts.discover_nfts')</button>
          </div>
        </div>

        <div class="slide-footer slide flex items-center" data-index="7">
          <h2>@lang('nfts.footer_page6')</h2>

          <div class="ml-[16px] select-none">
            <button class="starSlide bg-yellow text-black py-[6px] px-[10px] text-base font-bold rounded transition-all duration-300 hover:shadow hover:shadow-yellow">@lang('nfts.discover_nfts')</button>
          </div>
        </div>
      </div>
    </div>

    <nav id="slider-nav" class="flex flex-nowrap items-center select-none">
      <div class="mr-[10px]">
        <a href="https://nft.getschiffy.com/" class="bg-yellow text-black inline-block py-[4px] px-[6px] font-bold uppercase rounded transition-all duration-300 hover:shadow-md hover:shadow-yellow">@lang('nfts.buy_nfts')</a>
      </div>

      <div class="bg-white py-[4px] px-[6px] text-black rounded font-bold flex items-center justify-around text-base">
        <span class="current">01</span>
        <span class="sep bg-black"></span>
        <span class="total">08</span>
      </div>
    </nav>
  </div>

  <!-- Terms and Policies -->
  <div class="terms-policies terms-style" id="termsPolities">
    <p class="text-termsPolicies">
      @lang('extra.termsPolicies_text')
      <a class="more-termsPolicies" target="_blank" href="https://whitepaper.getschiffy.com/faqs/terms-of-use">@lang('extra.termsPolicies_terms')</a>
      <a class="more-termsPolicies" target="_blank" href="https://whitepaper.getschiffy.com/faqs/privacy-policy">@lang('extra.termsPolicies_policy')</a>
      <a class="more-termsPolicies" target="_blank" href="https://whitepaper.getschiffy.com/faqs/disclaimer">@lang('extra.termsPolicies_disclaimer')</a>
    </p>
    <button class="button_termsPolicies" id="signCookies">@lang('extra.termsPolicies_agree')</button>
  </div>

   <!-- Social networks pinned -->
   <div class="fixed right-0 top-[45%] z-[799] flex flex-nowrap items-center select-none transition-all duration-500" id="socialsPinned">
    <div class="cursor-pointer h-[50px] w-[20px] flex justify-center items-center rounded-tl rounded-bl transition-all duration-500" id="closeSocials">
      <i class="material-icons flex items-center justify-center text-4xl">more_vert</i>
    </div>

    <div class="flex flex-col p-[8px] bg-[#25415775] rounded-tl rounded-bl">
      <div class="w-[36px] h-[36px] md:w-[38px] md:h-[38px] mb-2 rounded-md facebook-color opacity-80 hover:opacity-100 transition-all duration-300">
        <a href="https://www.facebook.com/SchiffyVideoGame" target="_blank" class="flex justify-center items-center h-full"><img class="social social-facebook" src="/static/resources/images/social/facebook.webp" alt="Facebook Social GetSchiffy"></a>
      </div>

      <div class="w-[36px] h-[36px] md:w-[38px] md:h-[38px] mb-2 rounded-md instagram-color opacity-80 hover:opacity-100 transition-all duration-300">
        <a href="https://www.instagram.com/getschiffy_official" target="_blank" class="flex justify-center items-center h-full"><img class="social social-instagram" src="/static/resources/images/social/instagram.webp" alt="Instagram Social GetSchiffy"></a>
      </div>

      <div class="w-[36px] h-[36px] md:w-[38px] md:h-[38px] mb-2 rounded-md twitter-color opacity-80 hover:opacity-100 transition-all duration-300">
        <a href="https://twitter.com/getschiffy" target="_blank" class="flex justify-center items-center h-full"><img class="social social-twitter" src="/static/resources/images/social/twitter.webp" alt="Twitter Social GetSchiffy"></a>
      </div>

      <div class="w-[36px] h-[36px] md:w-[38px] md:h-[38px] rounded-md telegram-color opacity-80 hover:opacity-100 transition-all duration-300">
        <a href="https://t.me/getschiffy" target="_blank" class="flex justify-center items-center h-full"><img class="social social-telegram" src="/static/resources/images/social/telegram.webp" alt="Telegram Social GetSchiffy"></a>
      </div>

      <!-- <div class="w-[36px] h-[36px] md:w-[38px] md:h-[38px] rounded-md discord-color">
        <a href="#" target="_blank" class="flex justify-center items-center h-full"><img class="social social-discord" src="/static/resources/images/social/discord.webp" alt="Discord Social GetSchiffy"></a>
      </div> -->
    </div>
  </div>

  <!-- Js -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/js/splide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-grid@0.4.1/dist/js/splide-extension-grid.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.3.6/dist/js/splide-extension-auto-scroll.min.js"></script>
  <script src="/static/js/assets/cookies_v1.0.0.min.js"></script>
  <script src="/static/js/home/nfts/main_v1.0.1.min.js"></script>
</body>
</html>