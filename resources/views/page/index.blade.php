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
  <title>Get Schiffy - @lang('header_home.playtoearn')</title>
  <link rel="shortcut icon" href="/static/resources/images/GetSchiffy-Logo.webp">

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/css/splide-core.min.css">
  <link rel="stylesheet" href="/static/css/fonts.css">
  <link rel="stylesheet" href="/static/css/home/style_v1.2.3.min.css">
  <link rel="stylesheet" href="/static/css/home/app_v1.2.8.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  
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

  <!-- Play Now -->
  <div class="playNow-container select-none justify-center items-center fixed w-full h-screen bg-[#0a0a0a98] z-[800]" id="playNow">
    <div class="max-w-[660px] w-[70%] min-w-[280px] p-[12px] rounded relative bg-[#000] animate__animated animate__zoomIn" id="playNow_box">
      <!-- Close Button -->
      <div class="absolute right-[10px] top-[10px] text-black bg-yellow cursor-pointer rounded w-[30px] h-[30px] opacity-80 hover:opacity-100 transition-all duration-300" id="close-playNow">
        <i class="material-icons flex justify-center items-center text-2xl">close</i>
      </div>

      <!-- List -->
      <div class="flex justify-center items-center flex-wrap">
        <!-- Item -->
        <div class="w-[150px] overflow-hidden m-[12px]">
          <a href="#!">
            <div class="flex flex-nowrap justify-center items-center h-[50px] rounded-[6px] border border-[#c0c0c0] p-1">
              <div class="w-[30px] h-[30px] overflow-hidden">
                <img src="/static/resources/images/play-desktop-download.svg" alt="Desktop Getschiffy" class="w-full h-full align-top">
              </div>
              <span class="text-white ml-[10px] text-base">Windows</span>
            </div>
            <div class="mt-1 text-center"><span class="text-sm text-white shadow-text">@lang('extra.playnow_message')</span></div>
          </a>
        </div>

        <!-- Item -->
        <div class="w-[150px] overflow-hidden m-[12px]">
          <a href="#!">
            <div class="w-full h-[50px] overflow-hidden"><img src="/static/resources/images/play-google-download.webp" alt="Play Store Getschiffy" class="w-full h-full align-top"></div>
            <div class="mt-1 text-center"><span class="text-sm text-white shadow-text">@lang('extra.playnow_message')</span></div>
          </a>
        </div>

        <!-- Item -->
        <div class="w-[150px] overflow-hidden m-[12px]">
          <a href="#!">
            <div class="w-full h-[50px] overflow-hidden"><img src="/static/resources/images/play-appStore-download.svg" alt="App Store Getschiffy" class="w-full h-full align-top"></div>
            <div class="mt-1 text-center"><span class="text-sm text-white shadow-text">@lang('extra.playnow_message')</span></div>
          </a>
        </div>
      </div>
    </div>
  </div>   

  <!-- Header -->
  <header class="w-full sticky top-0 z-[850]" id="header-main">  
    <!-- Menu Mobile -->
    <div class="fixed top-0 w-full select-none z-[900]">
      <div id="shadowMenu_mobile" class="w-full h-screen bg-[#00000034] absolute transition-all duration-500"></div>

      <ul id="navbarMobile" class="w-[280px] h-screen text-white gradientDown-darkBlue-to-lightBlue z-[950] absolute transition-all duration-500">
        <li class="border-b border-b-[#ffffff13]"><a class="transition-all duration-300 hover:bg-[#ffffff13] flex items-center h-[48px] px-[32px] scrollTo" href="#home-section">@lang('header_home.home')</a></li>
        <li class="border-b border-b-[#ffffff13]"><a class="transition-all duration-300 hover:bg-[#ffffff13] flex items-center h-[48px] px-[32px] scrollTo" href="#promo-section">@lang('header_home.promo')</a></li>
        <li class="border-b border-b-[#ffffff13]"><a class="transition-all duration-300 hover:bg-[#ffffff13] flex items-center h-[48px] px-[32px] scrollTo" href="#gameplay-section">@lang('header_home.gameplay')</a></li>
        <li class="border-b border-b-[#ffffff13]"><a class="transition-all duration-300 hover:bg-[#ffffff13] flex items-center h-[48px] px-[32px] scrollTo" href="#nfts-section">@lang('header_home.nfts')</a></li>
        <li class="border-b border-b-[#ffffff13]"><a class="transition-all duration-300 hover:bg-[#ffffff13] flex items-center h-[48px] px-[32px] scrollTo" href="#motherumbrella-section">@lang('header_home.motherumbrella')</a></li>
        <li class="border-b border-b-[#ffffff13]"><a class="transition-all duration-300 hover:bg-[#ffffff13] flex items-center h-[48px] px-[32px] scrollTo" href="#roadmap-section">@lang('header_home.roadmap')</a></li>
        <li class="border-b border-b-[#ffffff13]"><a class="transition-all duration-300 hover:bg-[#ffffff13] flex items-center h-[48px] px-[32px] scrollTo" href="#tokenomics-section">@lang('header_home.tokenomics')</a></li>
        <li class="border-b border-b-[#ffffff13]"><a class="transition-all duration-300 hover:bg-[#ffffff13] flex items-center h-[48px] px-[32px] scrollTo" href="#team-section">@lang('header_home.team')</a></li>
        <li>
          <a href="#!" id="deployLanguage_mobile" class="transition-all duration-300 hover:bg-[#ffffff13] flex items-center justify-between h-[48px] px-[32px] font-bold uppercase text-yellow">{{$locale}}<i id="arrow_languageMobile" class="material-icons text-yellow transition-all duration-500">arrow_drop_down</i></a>
          
          <!-- Dropdown Lenguaje Menu -->
          <ul class="w-full transition-all duration-500 overflow-hidden" id="languageMobile_menu">
            @unless ($locale == 'en')
            <li class="border-t border-t-[#ffffff13] border-dashed"><a class="transition-all duration-300 hover:bg-[#ffffff13] flex items-center h-[40px] px-[32px]" href="/en">EN</a></li>
            @endunless
            @unless ($locale == 'es')
            <li class="border-t border-t-[#ffffff13] border-dashed"><a class="transition-all duration-300 hover:bg-[#ffffff13] flex items-center h-[40px] px-[32px]" href="/es">ES</a></li>
            @endunless
            @unless ($locale == 'zh')
            <li class="border-t border-t-[#ffffff13] border-dashed"><a class="transition-all duration-300 hover:bg-[#ffffff13] flex items-center h-[40px] px-[32px]" href="/zh">CHI</a></li>
            @endunless
            @unless ($locale == 'hi')
            <li class="border-t border-t-[#ffffff13] border-dashed"><a class="transition-all duration-300 hover:bg-[#ffffff13] flex items-center h-[40px] px-[32px]" href="/hi">HIN</a></li>
            @endunless
            @unless ($locale == 'tl')
            <li class="border-t border-t-[#ffffff13] border-dashed"><a class="transition-all duration-300 hover:bg-[#ffffff13] flex items-center h-[40px] px-[32px]" href="/tl">TL</a></li>
            @endunless
          </ul>
        </li>
      </ul>
    </div>

    <!-- Menu Main -->
    <nav class="h-[70px] gradient-brownTolight shadow shadow-[#130806] select-none">
      <div class="flex justify-between items-center py-[10px] px-[10px] sm:px-[20px] md:px-[30px] xl:px-[40px] h-full">
        <!-- Logo -->
        <div class="w-[90px] h-[55px] top-0 relative lg:w-[150px] lg:h-[80px] lg:top-[16px]">
          <a href="#home-section" class="overflow-hidden block w-full h-full scrollTo"><img class="w-full h-full align-top" src="/static/resources/images/GetSchiffy-Logo.webp" alt="Get Schiffy Logo"></a>
        </div>

        <!-- Menu -->
        <div class="flex flex-nowrap justify-end h-full text-center">
          <ul class="hidden menu_desktop:flex items-center text-white text-base text-center">
            <li class="px-[10px] lg:px-[14px] transition-all duration-300 hover:bg-[#ffffff13]"><a class="scrollTo" href="#home-section">@lang('header_home.home')</a></li>
            <li class="px-[10px] lg:px-[14px] transition-all duration-300 hover:bg-[#ffffff13]"><a class="scrollTo" href="#promo-section">@lang('header_home.promo')</a></li>
            <li class="px-[10px] lg:px-[14px] transition-all duration-300 hover:bg-[#ffffff13]"><a class="scrollTo" href="#gameplay-section">@lang('header_home.gameplay')</a></li>
            <li class="px-[10px] lg:px-[14px] transition-all duration-300 hover:bg-[#ffffff13]"><a class="scrollTo" href="#nfts-section">@lang('header_home.nfts')</a></li>
            <li class="px-[10px] lg:px-[14px] transition-all duration-300 hover:bg-[#ffffff13]"><a class="scrollTo" href="#motherumbrella-section">@lang('header_home.motherumbrella')</a></li>
            <li class="px-[10px] lg:px-[14px] transition-all duration-300 hover:bg-[#ffffff13]"><a class="scrollTo" href="#roadmap-section">@lang('header_home.roadmap')</a></li>
            <li class="px-[10px] lg:px-[14px] transition-all duration-300 hover:bg-[#ffffff13]"><a class="scrollTo" href="#tokenomics-section">@lang('header_home.tokenomics')</a></li>
            <li class="px-[10px] lg:px-[14px] transition-all duration-300 hover:bg-[#ffffff13]"><a class="scrollTo" href="#team-section">@lang('header_home.team')</a></li>
            <li class="mx-[10px] lg:mx-[14px] relative">
              <a id="deployLanguage" class="py-[3px] px-[6px] border-2 border-yellow rounded uppercase flex justify-between items-center" href="#!">{{$locale}}
                <i id="arrow_language" class="material-icons inline-block ml-[2px] h-auto transition-all duration-500">arrow_drop_down</i>
              </a>
              
              <!-- Dropdown Lenguaje Menu -->
              <ul id="language_menu" class="bg-[#132e36cb] absolute w-full rounded-bl rounded-br transition-all duration-500 overflow-hidden">
                @unless ($locale == 'en')
                <li><a class="py-[6px] px-[6px] block border-b border-transparent hover:border-yellow hover:bg-[#132e36cb] transition-all duration-300" href="/en">EN</a></li>
                @endunless
                @unless ($locale == 'es')
                <li><a class="py-[6px] px-[6px] block border-b border-transparent hover:border-yellow hover:bg-[#132e36cb] transition-all duration-300" href="/es">ES</a></li>
                @endunless
                @unless ($locale == 'zh')
                <li><a class="py-[6px] px-[6px] block border-b border-transparent hover:border-yellow hover:bg-[#132e36cb] transition-all duration-300" href="/zh">CHI</a></li>
                @endunless
                @unless ($locale == 'hi')
                <li><a class="py-[6px] px-[6px] block border-b border-transparent hover:border-yellow hover:bg-[#132e36cb] transition-all duration-300" href="/hi">HI</a></li>
                @endunless
                @unless ($locale == 'tl')
                <li><a class="py-[6px] px-[6px] block border-b border-transparent hover:border-yellow hover:bg-[#132e36cb] transition-all duration-300" href="/tl">TL</a></li>
                @endunless
              </ul>
            </li>
          </ul>

          <!-- Trigger Buttons -->
          <div class="flex justify-between items-center flex-nowrap">
            <!-- Marketplace -->
            <div>
              <div>
                <a href="https://marketplace.getschiffy.com/" target="_blank" class="block text-lg font-bold uppercase ml-[8px] lg:ml-[12px] border border-black rounded py-[4px] px-[10px] bg-yellow text-black transition-all duration-300 hover:border-transparent hover:shadow hover:shadow-yellow">@lang('header_home.login_marketplace')</a>
              </div>
            </div>

            <!-- Deploy Mobile Menu -->
            <div class="ml-[12px] block menu_desktop:hidden text-white z-[950]">
              <div>
                <a id="deploy_menuMobile" href="#!" class="flex justify-center items-center h-[39px] w-[39px] m-0 cursor-pointer p-1 transition-all duration-300 hover:bg-[#ffffff13] rounded"><i class="block material-icons text-4xl">menu</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- Home -->
  <div class="w-full h-auto md:h-screen overflow-hidden relative new-section-dv gradient-brownTolight" id="home-section">
    <!-- Animation -->
    <video class="w-full h-full object-cover" playsinline autoplay muted loop id="animationSchiffy" poster="/static/resources/images/poster_animation.webp">
      <source src="/static/resources/videos/getschiffy_animation.mp4" type="video/mp4">
    </video>

    <div class="py-[60px] sm:py-[80px] px-[30px] md:px-0 md:py-0 md:absolute top-0 left-0 w-full h-full flex flex-col justify-end items-center">
      <!-- About -->
      <div class="w-full">
        <p class="shadow-text w-full md:max-w-[500px] mx-auto text-base text-center text-white">@lang('header_home.about_text')</p>
      </div>

      <!-- Trigger Buttons -->
      <div class="flex flex-wrap flex-row justify-center mt-6 md:mt-4 select-none">
        <div class="mx-[10px] mb-[16px] sm:mb-0">
          <a href="#!" class="font-semibold text-lg md:text-xl w-[150px] text-center bg-yellow text-black md:bg-black transition-shadow duration-300 md:text-yellow block md:w-[200px] rounded-sm p-[8px] hover:shadow-md hover:shadow-black hover:md:shadow-yellow activePlay">@lang('header_home.playnow')</a>
        </div>

        <div class="mx-[10px]">
          <a href="https://whitepaper.getschiffy.com/"  class="font-semibold text-lg md:text-xl w-[150px] text-center bg-yellow text-black md:bg-black transition-shadow duration-300 md:text-yellow block md:w-[200px] rounded-sm p-[8px] hover:shadow-md hover:shadow-black hover:md:shadow-yellow" target="_blank">@lang('header_home.whitepaper')</a>
        </div>
      </div>

      <!-- Address -->
      <div class="text-center font-bold md:mb-[80px] mt-6 overflow-hidden rounded">
        <p class="overflow-hidden text-lg flex flex-col sm:flex-row justify-center items-stretch">
          <span class="bg-yellow inline-block py-[4px] px-[6px]">@lang('ido_details.contract_address')</span>
          <a href="https://bscscan.com/address/0x4aa6027de5acf37ef2221af51c5a8930e44e52f6" target="_blank" class="text-white bg-black text-base font-normal flex items-center justify-center py-[4px] px-[6px]">0x4aa6027De5acf37eF2221Af51c5a8930E44e52F6</a>
        </p>
      </div>
    </div>
  </div>

  <!-- Promo & Platforms -->  
  <div class="relative px-0 pb-[80px] md:py-[80px] promoPlatforms-style new-section-dv" id="promo-section">
    <!-- Promo -->
    <div>
      <div class="z-[780] flex justify-center items-center flex-col md:flex-row md:px-[30px] lg:px-[70px] relative">
        <!-- instructions -->
        <div class="w-full md:w-[50%] lg:w-[60%] md:max-w-[650px] text-white pt-[80px] md:pt-0 px-[30px] sm:px-[60px] md:px-0 text-center">
          <!-- Title -->
          <div class="my-[10px]">
            <h4 class="text-4xl sm:text-5xl font-bold uppercase shadow-text">@lang('ido_details.title')</h4>
          </div>

          <!-- Description -->
          <div>
            <p class="text-base md:text-lg">@lang('ido_details.description')</p>
          </div>

          <!-- Step list -->
          <ul class="mt-[20px]">
            <li class="mb-[18px] line-through">
              <span class="select-none inline-block py-[2px] px-[4px] text-sm font-bold rounded bg-black text-yellow">1st phase</span> 
              <span>@lang('ido_details.step_list_one')</span>
            </li>

            <li class="line-through">
              <span class="select-none inline-block py-[2px] px-[4px] text-sm font-bold rounded bg-black text-yellow">2nd phase</span> 
              <span>@lang('ido_details.step_list_two')</span> 
            </li>
          </ul>
        </div>
      </div>

      <!-- DexTools -->
      <div class="z-[780] mt-[60px] relative">
        <div class="px-[30px] sm:px-[60px] md:px-[70px] flex flex-col items-center"> 
          <!-- Title -->
          <div class="mb-[16px]">
            <h6 class="text-[#00ADCE] text-3xl sm:text-4xl font-bold uppercase shadow-text text-center">@lang('ido_details.dextool_title')</h6>
          </div>

          <!-- Description -->
          <div class="mb-[16px]">
            <p class="text-center text-white text-base md:text-lg">@lang('ido_details.dextool_description')</p>
          </div>

          <!-- Buy Button -->
          <div class="bg-white rounded select-none">
            <a href="https://www.dextools.io/app/bnb/pair-explorer/0xf4521f211dacad3064f9b589878b5ea965cc48ea" target="_blank" rel="noopener noreferrer" class="text-[#00ADCE] text-lg text-center font-bold w-[180px] py-[8px] px-[16px] transition-all duration-500 hover:shadow-md hover:shadow-[#00ADCE] flex justify-center items-center">
              <div class="mr-[3px]"><img src="/static/resources/images/platforms/dextools_logo_mini.webp" class="w-[30px]" alt="Dextools Mini"></div>
              <span>@lang('ido_details.dextool_buy')</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Platforms -->
    <div class="relative z-[780] px-[30px] sm:px-[60px] md:px-[70px] mt-[60px] text-white">
      <!-- Audited -->
      <div class="text-center font-bold">
        <p class="mb-[16px] overflow-hidden text-lg flex flex-wrap justify-center items-center">
          <a href="https://coinsult.net/" class="flex flex-nowrap items-center" target="_blank">
            <img class="w-[24px] h-[24px]" src="/static/resources/images/partnerships/coinsult_squ.webp" alt="Coinsult audited">
            <span class="ml-[6px]">@lang('ido_details.contract_audited')</span>
          </a>
          <a href="https://coinsult.net/projects/get-schiffy-2/" target="_blank" class="text-telegram ml-[6px] font-normal text-base">https://coinsult.net/projects/get-schiffy-2/</a>
        </p>
      </div>

      <!-- List --> 
      <div class="flex flex-wrap flex-col sm:flex-row justify-center items-center select-none">
        <!-- Item -->
        <a class="my-[14px] mx-[24px]" href="https://bscscan.com/token/0x4aa6027de5acf37ef2221af51c5a8930e44e52f6" target="_blank"><img src="/static/resources/images/platforms/bscscan-platform.webp" alt="Bsc Scan" class="w-[130px] align-top"></a>
        <!-- Item -->
        <a class="my-[14px] mx-[24px]" href="https://www.dextools.io/app/bnb/pair-explorer/0xf4521f211dacad3064f9b589878b5ea965cc48ea" target="_blank"><img src="/static/resources/images/platforms/dextools_logo.webp" alt="DexTools" class="w-[120px] align-top"></a>
        <!-- Item -->
        <!-- <div class="my-[14px] mx-[24px]"><img src="/static/resources/images/platforms/coingecko-platform.webp" alt="Coin Gecko" class="w-[130px] align-top"></div> -->
        <!-- Item -->
        <!-- <div class="my-[14px] mx-[24px]"><img src="/static/resources/images/platforms/Coinmarketcap-platform.webp" alt="Coin Market" class="w-[224px] align-top"></div> -->
        <!-- Item -->
        <a class="my-[14px] mx-[24px]" href="https://www.pinksale.finance/launchpad/0xd25a3AFceC7Ff51fA194e09788277918df263ef4?chain=BSC" target="_blank"><img src="/static/resources/images/platforms/pinksale-platform.webp" alt="PinkSale" class="w-[130px] align-top"></a>
        <!-- Item -->
        <div class="my-[14px] mx-[24px]"><img src="/static/resources/images/platforms/pancakeswap-platform.webp" alt="PancakeSwap" class="w-[200px] align-top"></div> 
      </div>
    </div>

    <!-- Confetti -->
    <canvas id="dropConfetti"></canvas>
  </div>
  
  <!-- Gameplay And Character -->
  <div class="background-one-image new-section-dv" id="gameplay-section">
    <div class="opacityDown-brownToLight">
      <!-- Gameplay -->
      <section class="gameplay-container padding-sections">
        <!-- Title -->
        <div>
          <h2 class="text-center text-white text-4xl sm:text-5xl font-bold uppercase shadow-text">@lang('gameplay.title_gameplay')</h2>
        </div>

        <div class="divider"></div>

        <!-- Description -->
        <div>
          <p class="mt-[16px] mb-[20px] mx-auto text-white text-center min-w-[250px] max-w-[650px]">@lang('gameplay.description_gameplay')</p>
        </div>

        <!-- Slide -->
        <div class="gameplay-splide  select-none">
          <div id="gameplay-splide" class="splide">
            <!-- Track -->
            <div class="splide__track">
              <ul class="splide__list">
                <!-- Item -->
                <li class="splide__slide gameplay-item">
                  <div class="gamepaly-box">
                    <!-- Picture -->
                    <div class="gameplay-picture">
                      <img src="/static/resources/images/Get_Schiffy_road_map.webp" alt="Mr P. Schiffy" class="picture">
                    </div>

                    <!-- Description -->
                    <div class="gameplay-description">
                      <!-- Title -->
                      <div class="gameplay-title gradient-brownTolight"><span class="title">@lang('gameplay.mr_schiffy_item')</span></div>

                      <!-- Description -->
                      <p class="description">@lang('gameplay.mr_schiffy_description')</p>
                    </div>
                  </div>
                </li>

                <!-- Item -->
                <li class="splide__slide gameplay-item">
                  <div class="gamepaly-box">
                    <!-- Picture -->
                    <div class="gameplay-picture">
                      <img src="/static/resources/images/enemys-getschiffy.webp" alt="Enemys Get Schiffy" class="picture gameplay-enemys-size">
                    </div>

                    <!-- Description -->
                    <div class="gameplay-description">
                      <!-- Title -->
                      <div class="gameplay-title gradient-brownTolight"><span class="title">@lang('gameplay.enemys_item')</span></div>

                      <!-- Description -->
                      <p class="description">@lang('gameplay.enemys_description')</p>
                    </div>
                  </div>
                </li>

                <!-- Item -->
                <li class="splide__slide gameplay-item">
                  <div class="gamepaly-box">
                    <!-- Picture -->
                    <div class="gameplay-picture gameplay-gold-picture">
                      <img src="/static/resources/images/token-gold-getschiffy.webp" alt="$Gold Token GetSchiffy" class="picture">
                    </div>

                    <!-- Description -->
                    <div class="gameplay-description">
                      <!-- Title -->
                      <div class="gameplay-title gradient-brownTolight"><span class="title">@lang('gameplay.gold_item')</span></div>

                      <!-- Description -->
                      <p class="description">@lang('gameplay.gold_description')</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <!-- Arrows -->
          <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev arrow-prev">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg>
            </button>
            <button class="splide__arrow splide__arrow--next">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg>
            </button>
          </div>
          </div>
        </div>
      </section>

      <!-- Character -->
      <div class="character-container padding-sections shadow-divider">
        <!-- Title -->
        <div>
          <h3 class="text-center text-yellow text-4xl sm:text-5xl font-bold uppercase shadow-text">@lang('character.title_character')</h3>
        </div>

        <!-- Content -->
        <div class="character-content">
          <!-- Picture -->
          <div class="character-picture  select-none">
            <img src="/static/resources/images/character-schiffy.webp" alt="Mr. Schiffy" class="picture">
          </div>

          <!-- Description -->
          <div class="character-description">
            <p class="description">@lang('character.description_one')</p>
            <p class="description">@lang('character.description_two')</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- NFTs -->
  <section class="nfts-backgroundImg new-section-dv" id="nfts-section">
    <div class="shadow-background  py-[80px] px-[30px] sm:px-[60px]">
      <!-- Title -->
      <div>
        <h2 class="text-center text-white text-4xl sm:text-5xl font-bold uppercase shadow-text">@lang('nfts.title_nfts')</h2>
      </div>

      <!-- Description -->
      <div class="mt-[20px] flex justify-center">
        <p class="text-white text-base sm:text-lg text-center shadow-text max-w-[550px]">@lang('nfts.description_nfts') <a href="https://getschiffy.com/{{$locale}}/nfts" class="text-telegram">@lang('extra.moreDetails')</a></p>
      </div>

      <!-- Gallery -->
      <div class="w-full flex flex-col sm:flex-row flex-wrap justify-center items-center my-[40px]">
        <!-- Item -->
        <div class="my-[10px] sm:my-0 sm:mx-[10px]">
          <div class="flex flex-col items-center md:flex-row md:flex-wrap">
            <!-- splide -->
            <div class="w-[200px] sm:w-[150px] md:w-[190px] roadmap_form:w-[220px] select-none">
              <div class="bg-black px-[8px] pb-[6px] rounded">
                <!-- Title -->
                <div>
                  <span class="text-white text-center font-bold text-xl block py-[8px] px-[6px] uppercase">@lang('nfts.normal_nfts')</span>
                </div>

                <!-- Track -->
                <div id="nfts-splide_1">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <!-- Item --> 
                      <li class="splide__slide w-[200px] sm:w-[150px] md:w-[190px] roadmap_form:w-[220px] cursor-pointer"><div class="rounded-sm overflow-hidden"><img src="/static/resources/images/nfts/normal_nfts_1.webp" alt="Get schiffy NFTS"></div></li>

                      <!-- Item --> 
                      <li class="splide__slide w-[200px] sm:w-[150px] md:w-[190px] roadmap_form:w-[220px] cursor-pointer"><div class="rounded-sm overflow-hidden"><img src="/static/resources/images/nfts/normal_nfts_2.webp" alt="Get schiffy NFTS"></div></li>

                      <!-- Item --> 
                      <li class="splide__slide w-[200px] sm:w-[150px] md:w-[190px] roadmap_form:w-[220px] cursor-pointer"><div class="rounded-sm overflow-hidden"><img src="/static/resources/images/nfts/normal_nfts_3.webp" alt="Get schiffy NFTS"></div></li>
                    </ul>
                  </div>
                </div>

                <!-- Info -->
                <div class="mt-[6px] text-center font-bold">
                  <!-- Price -->
                  <div>
                    <span class="text-white text-lg select-none">@lang('nfts.price_nfts'):</span>
                    <span class="text-yellow">100 BUSD</span>
                  </div>

                  <!-- Link Button -->
                  <div class="select-none mt-[6px] w-full">
                    <a href="https://nft.getschiffy.com/" target="_blank" rel="noopener noreferrer" class="block bg-yellow text-black rounded-sm text-xl py-[4px] px-[14px]">@lang('nfts.buy_nfts')</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="my-[10px] sm:my-0 sm:mx-[10px]">
          <div class="flex flex-col items-center md:flex-row md:flex-wrap">
            <!-- splide -->
            <div class="w-[200px] sm:w-[150px] md:w-[190px] roadmap_form:w-[220px] select-none">
              <div class="bg-black px-[8px] pb-[6px] rounded">
                <!-- Title -->
                <div>
                  <span class="text-white text-center font-bold text-xl block py-[8px] px-[6px] uppercase">@lang('nfts.silver_nfts')</span>
                </div>

                <!-- Track -->
                <div id="nfts-splide_2">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <!-- Item --> 
                      <li class="splide__slide w-[200px] sm:w-[150px] md:w-[190px] roadmap_form:w-[220px] cursor-pointer"><div class="rounded-sm overflow-hidden"><img src="/static/resources/images/nfts/silver_nfts_1.webp" alt="Get schiffy NFTS"></div></li>

                      <!-- Item --> 
                      <li class="splide__slide w-[200px] sm:w-[150px] md:w-[190px] roadmap_form:w-[220px] cursor-pointer"><div class="rounded-sm overflow-hidden"><img src="/static/resources/images/nfts/silver_nfts_2.webp" alt="Get schiffy NFTS"></div></li>

                      <!-- Item --> 
                      <li class="splide__slide w-[200px] sm:w-[150px] md:w-[190px] roadmap_form:w-[220px] cursor-pointer"><div class="rounded-sm overflow-hidden"><img src="/static/resources/images/nfts/silver_nfts_3.webp" alt="Get schiffy NFTS"></div></li>
                    </ul>
                  </div>
                </div>

                <!-- Info -->
                <div class="mt-[6px] text-center font-bold">
                  <!-- Price -->
                  <div>
                    <span class="text-white text-lg select-none">@lang('nfts.price_nfts'):</span>
                    <span class="text-yellow">300 BUSD</span>
                  </div>

                  <!-- Link Button -->
                  <div class="select-none mt-[6px] w-full">
                    <a href="https://nft.getschiffy.com/" target="_blank" rel="noopener noreferrer" class="block bg-yellow text-black rounded-sm text-xl py-[4px] px-[14px]">@lang('nfts.buy_nfts')</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="my-[10px] sm:my-0 sm:mx-[10px]">
          <div class="flex flex-col items-center md:flex-row md:flex-wrap">
            <!-- splide -->
            <div class="w-[200px] sm:w-[150px] md:w-[190px] roadmap_form:w-[220px] select-none">
              <div class="bg-black px-[8px] pb-[6px] rounded">
                <!-- Title -->
                <div>
                  <span class="text-white text-center font-bold text-xl block py-[8px] px-[6px] uppercase">@lang('nfts.gold_nfts')</span>
                </div>

                <!-- Track -->
                <div id="nfts-splide_3">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <!-- Item --> 
                      <li class="splide__slide w-[200px] sm:w-[150px] md:w-[190px] roadmap_form:w-[220px] cursor-pointer"><div class="rounded-sm overflow-hidden"><img src="/static/resources/images/nfts/gold_nfts_1.webp" alt="Get schiffy NFTS"></div></li>

                      <!-- Item --> 
                      <li class="splide__slide w-[200px] sm:w-[150px] md:w-[190px] roadmap_form:w-[220px] cursor-pointer"><div class="rounded-sm overflow-hidden"><img src="/static/resources/images/nfts/gold_nfts_2.webp" alt="Get schiffy NFTS"></div></li>

                      <!-- Item --> 
                      <li class="splide__slide w-[200px] sm:w-[150px] md:w-[190px] roadmap_form:w-[220px] cursor-pointer"><div class="rounded-sm overflow-hidden"><img src="/static/resources/images/nfts/gold_nfts_3.webp" alt="Get schiffy NFTS"></div></li>
                    </ul>
                  </div>
                </div>

                <!-- Info -->
                <div class="mt-[6px] text-center font-bold">
                  <!-- Price -->
                  <div>
                    <span class="text-white text-lg select-none">@lang('nfts.price_nfts'):</span>
                    <span class="text-yellow">450 BUSD</span>
                  </div>

                  <!-- Link Button -->
                  <div class="select-none mt-[6px] w-full">
                    <a href="https://nft.getschiffy.com/" target="_blank" rel="noopener noreferrer" class="block bg-yellow text-black rounded-sm text-xl py-[4px] px-[14px]">@lang('nfts.buy_nfts')</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Link to Marketplace -->
      <div class="flex justify-center flex-col items-center">
        <p class="text-center text-white">@lang('nfts.marketplace_nfts')</p>

        <div class="mt-[12px] text-center">
          <a href="https://marketplace.getschiffy.com/" target="_blank" class="uppercase inline-block bg-black text-yellow shadow-text rounded font-bold text-2xl py-[4px] px-[20px] translate-x-[1px] translate-y-[-1px] hover:translate-x-0 hover:translate-y-0 transition-all duration-500 hover:shadow-sm hover:shadow-yellow">@lang('header_home.login_marketplace')</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Mother Umbrella -->
  <div class="mother-background px-0 pb-0 new-section-dv padding-sections shadow-divider menu_desktop:pb-[80px]" id="motherumbrella-section">
    <div class="flex flex-col justify-center p-0 menu_desktop:flex-row menu_desktop:justify-between items-center menu_desktop:px-[70px]">
      <!-- Content -->
      <div class="menu_desktop:mr-[40px] menu_desktop:w-[45%] menu_desktop:px-0 menu_desktop:pb-0 w-full pt-0 px-[30px] md:px-[60px] pb-[80px]">
        <!-- Title -->
        <div>
          <h2 class="text-center text-yellow text-4xl sm:text-5xl font-bold uppercase shadow-text">@lang('motherUmbrella.title_motherUmbrella')</h2>
        </div>

        <div class="divider"></div>
        
        <!-- Description -->
        <div class="mt-[20px]">
          <p class="text-base text-white text-center">@lang('motherUmbrella.description_motherUmbrella')</p>
        </div>
      </div>

      <!-- Video -->
      <div class="w-full max-w-none flex items-end menu_desktop:max-w-[600px] menu_desktop:w-[55%] overflow-hidden select-none">
        <video class="w-full object-cover" playsinline autoplay muted loop id="motherVideo">
          <source src="/static/resources/videos/Promo_MotherUmbrella.mp4" type="video/mp4">
        </video>
      </div>
    </div>  
  </div>

  <!-- Roadmap And Tokenomics -->
  <div class="background-one-image-three shadow-background">
    <div class="shadow-background">
      <!-- Roadmap -->
      <section class="shadow-divider new-section-dv" id="roadmap-section">
        <div class="padding-sections">
          <!-- Title -->
          <div>
            <h2 class="text-center text-white text-4xl sm:text-5xl font-bold uppercase shadow-text">@lang('roadmap.title_roadmap')</h2>
          </div>

          <!-- Roadmap Table -->
          <div class="mt-[60px] hidden roadmap_form:block">
            <!-- Table -->
            <table class="w-full">
              <!-- Head -->
              <tr class="border-none select-none">
                <th class="relative head-item active-head">
                  <div class="head-square rounded border-2 border-black text-transparent bg-white h-[36px] w-[36px] m-auto rotate-45">1</div>
                </th>
                <th class="relative head-item">
                  <div class="head-square rounded border-2 border-black text-transparent bg-white h-[36px] w-[36px] m-auto rotate-45">2</div>
                </th>
                <th class="relative head-item">
                  <div class="head-square rounded border-2 border-black text-transparent bg-white h-[36px] w-[36px] m-auto rotate-45">3</div>
                </th>
                <th class="relative head-item">
                  <div class="head-square rounded border-2 border-black text-transparent bg-white h-[36px] w-[36px] m-auto rotate-45">4</div>
                </th>
                <th class="relative head-item">
                  <div class="head-square rounded border-2 border-black text-transparent bg-white h-[36px] w-[36px] m-auto rotate-45">5</div>
                </th>
              </tr>

              <!-- Road items -->
              <tr class="border-none">
                <!-- Item -->
                <td class="max-w-[100px] overflow-hidden align-top pt-[20px] px-[8px]">
                  <!-- Title -->
                  <div class="select-none">
                    <div class="bg-yellow text-black font-bold text-lg p-[4px] uppercase text-center rounded shadow shadow-black">@lang('roadmap.title_q2_22')</div>
                  </div>

                  <!-- Body -->
                  <ul class="mt-[18px]">
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q2_22_1')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q2_22_2')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q2_22_3')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q2_22_4')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q2_22_5')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q2_22_6')</span></li>
                  </ul>
                </td>

                <!-- Item -->
                <td class="max-w-[100px] overflow-hidden align-top pt-[20px] px-[8px]">
                  <!-- Title -->
                  <div class="select-none">
                    <div class="bg-yellow text-black font-bold text-lg p-[4px] uppercase text-center rounded shadow shadow-black">@lang('roadmap.title_q3_22')</div>
                  </div>

                  <!-- Body -->
                  <ul class="mt-[18px]">
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q3_22_1')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q3_22_2')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q3_22_3')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q3_22_4')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q3_22_5')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q3_22_6')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q3_22_6_2')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q3_22_7')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q3_22_8')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q3_22_9')</span></li>
                  </ul>
                </td>

                <!-- Item -->
                <td class="max-w-[100px] overflow-hidden align-top pt-[20px] px-[8px]">
                  <!-- Title -->
                  <div class="select-none">
                    <div class="bg-yellow text-black font-bold text-lg p-[4px] uppercase text-center rounded shadow shadow-black">@lang('roadmap.title_q4_22')</div>
                  </div>

                  <!-- Body -->
                  <ul class="mt-[18px]">
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q4_22_1')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q4_22_2')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q4_22_3')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q4_22_4')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q4_22_5')</span></li>
                  </ul>
                </td>

                <!-- Item -->
                <td class="max-w-[100px] overflow-hidden align-top pt-[20px] px-[8px]"> 
                  <!-- Title -->
                  <div class="select-none">
                    <div class="bg-yellow text-black font-bold text-lg p-[4px] uppercase text-center rounded shadow shadow-black">@lang('roadmap.title_q1_23')</div>
                  </div>

                  <!-- Body -->
                  <ul class="mt-[18px]">
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q1_23_1')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q1_23_2')</span></li>
                  </ul>
                </td>

                <!-- Item -->
                <td class="max-w-[100px] overflow-hidden align-top pt-[20px] px-[8px]">
                  <!-- Title -->
                  <div class="select-none">
                    <div class="bg-yellow text-black font-bold text-lg p-[4px] uppercase text-center rounded shadow shadow-black">@lang('roadmap.title_q2_23')</div>
                  </div>

                  <!-- Body -->
                  <ul class="mt-[18px]">
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q2_23_1')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q2_23_2')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q2_23_3')</span></li>
                    <li class="mb-[20px]"><span class="block text-white text-base menu_desktop:text-lg">@lang('roadmap.item_q2_23_4')</span></li>
                  </ul>
                </td>
              </tr>
            </table>
          </div>

          <!-- Roadmap Splide Mobile -->
          <div class="roadmap-splide-container splide flex flex-nowrap justify-center w-full mt-[60px] roadmap_form:hidden" id="roadmap-splide">
            <!-- Track -->
            <div class="splide__track roadmap-mobile">
              <ul class="splide__list roadmap-mobile-list">
                <!-- Item -->
                <li class="splide__slide road-item road-itemStyle">
                  <!-- Title -->
                  <div class="title-road select-none active-quarter">
                    <div class="title">@lang('roadmap.title_q2_22')</div>
                  </div>

                  <!-- Body -->
                  <ul class="body-road">
                    <li class="road-step"><span class="step">@lang('roadmap.item_q2_22_1')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q2_22_2')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q2_22_3')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q2_22_4')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q2_22_5')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q2_22_6')</span></li>
                  </ul>
                </li>

                <!-- Item -->
                <li class="splide__slide road-item road-itemStyle">
                  <!-- Title -->
                  <div class="title-road select-none">
                    <div class="title">@lang('roadmap.title_q3_22')</div>
                  </div>

                  <!-- Body -->
                  <ul class="body-road">
                    <li class="road-step"><span class="step">@lang('roadmap.item_q3_22_1')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q3_22_2')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q3_22_3')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q3_22_4')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q3_22_5')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q3_22_6')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q3_22_6_2')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q3_22_7')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q3_22_8')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q3_22_9')</span></li>
                  </ul>
                </li>

                <!-- Item -->
                <li class="splide__slide road-item road-itemStyle">
                  <!-- Title -->
                  <div class="title-road select-none">
                    <div class="title">@lang('roadmap.title_q4_22')</div>
                  </div>

                  <!-- Body -->
                  <ul class="body-road">
                    <li class="road-step"><span class="step">@lang('roadmap.item_q4_22_1')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q4_22_2')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q4_22_3')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q4_22_4')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q4_22_5')</span></li>
                  </ul>
                </li>

                <!-- Item -->
                <li class="splide__slide road-item road-itemStyle"> 
                  <!-- Title -->
                  <div class="title-road select-none">
                    <div class="title">@lang('roadmap.title_q1_23')</div>
                  </div>

                  <!-- Body -->
                  <ul class="body-road">
                    <li class="road-step"><span class="step">@lang('roadmap.item_q3_22_1')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q3_22_2')</span></li>
                  </ul>
                </li>

                <!-- Item -->
                <li class="splide__slide road-item road-itemStyle">
                  <!-- Title -->
                  <div class="title-road select-none">
                    <div class="title">@lang('roadmap.title_q2_23')</div>
                  </div>

                  <!-- Body -->
                  <ul class="body-road">
                    <li class="road-step"><span class="step">@lang('roadmap.item_q2_23_1')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q2_23_2')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q2_23_3')</span></li>
                    <li class="road-step"><span class="step">@lang('roadmap.item_q2_23_4')</span></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Tokenomics -->
      <section class="padding-sections shadow-divider new-section-dv" id="tokenomics-section">
        <!-- Title -->
        <div>
          <h2 class="text-center text-yellow text-4xl sm:text-5xl font-bold uppercase shadow-text">@lang('tokenomics.title_tokenomics')</h2>
        </div>

        <!-- Body Tokenomics -->
        <div class="flex flex-col items-center mt-[30px]">
          <!-- Description -->
          <div class="max-w-[550px]">
            <p class="text-white text-base sm:text-lg text-center shadow-text">@lang('tokenomics.description_tokenomics') <a target="_blank" href="https://whitepaper.getschiffy.com/economy/tokenomics" class="text-telegram">@lang('extra.moreDetails')</a></p>
          </div>
          
          <!-- Pie Chart  -->
          <div class="w-[290px] h-[290px] sm:w-[360px] sm:h-[360px] md:w-[500px] md:h-[500px] max-w-[600px] max-h-[600px] mt-[30px] select-none">
            <canvas id="pieChart-tokenomics">Your browser does not support the canvas element.</canvas>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- Team And News -->
  <div class="background-one-image-four">
    <div class="bg-[#130a0673] h-full">
      <!-- Team -->
      <section class="new-section-dv padding-sections" id="team-section">
        <!-- Title -->
        <div>
          <h2 class="text-center text-white text-4xl sm:text-5xl font-bold uppercase shadow-text">@lang('team.title_team')</h2>
        </div>

        <div class="divider mt-[5px] bg-yellow"></div>

        <!-- Description -->
        <div class="mt-[20px]">
          <p class="w-[60%] min-w-[250px] max-w-[650px] text-center text-base sm:text-lg m-auto text-white">@lang('team.description_team')</p>
        </div>

        <!-- Splide -->
        <div id="splide-team" class="splide splide-team select-none">
          <!-- Track -->
          <div class="splide__track team-track">
            <ul class="splide__list">
              <!-- Item --> 
              <li class="splide__slide splide-team-item">
                <div class="item-container">
                  <!-- Photo -->
                  <div class="item-photo">
                    <img src="/static/resources/images/team/getschiffy-matt.webp" alt="Matt Edward Founder-Ceo GetSchiffy" class="photo photo-matt">
                  </div>

                  <!-- Title -->
                  <div class="item-title">
                    <h4 class="title shadow-text">Matt Edward<br><span class="style-title">@lang('team.position_matt_team')</span></h4>
                  </div>
                </div>
              </li>

              <!-- Item -->
              <li class="splide__slide splide-team-item">
                <div class="item-container">
                  <!-- Photo -->
                  <div class="item-photo">
                    <img src="/static/resources/images/team/getschiffy-grabriel.webp" alt="Gabriel Navarro Business Relations GetSchiffy" class="photo">
                  </div>

                  <!-- Title -->
                  <div class="item-title">
                    <h4 class="title shadow-text">Gabriel Navarro<br><span class="style-title">@lang('team.position_gabriel_team')</span></h4>
                  </div>
                </div>
              </li>

              <!-- Item -->
              <li class="splide__slide splide-team-item">
                <div class="item-container">
                  <!-- Photo -->
                  <div class="item-photo">
                    <img src="/static/resources/images/team/getschiffy-Hasnain.webp" alt="Hasnain Fareed Lead Game Developer GetSchiffy" class="photo">
                  </div>

                  <!-- Title -->
                  <div class="item-title">
                    <h4 class="title shadow-text">Hasnain Fareed<br><span class="style-title">@lang('team.position_hasnain_team')</span></h4>
                  </div>
                </div>
              </li>

              <!-- Item -->
              <li class="splide__slide splide-team-item">
                <div class="item-container">
                  <!-- Photo -->
                  <div class="item-photo">
                    <img src="/static/resources/images/team/getschiffy-Safi-Kahn.webp" alt="Safi Kahn Blockchain Developer GetSchiffy" class="photo">
                  </div>

                  <!-- Title -->
                  <div class="item-title">
                    <h4 class="title shadow-text">Safi Kahn<br><span class="style-title">@lang('team.position_safi_team')</span></h4>
                  </div>
                </div>
              </li>

              <!-- Item -->
              <li class="splide__slide splide-team-item">
                <div class="item-container">
                  <!-- Photo -->
                  <div class="item-photo">
                    <img src="/static/resources/images/team/getschiffy-Jonathan-urdaneta.webp" alt="Jonathan Urdaneta Web developer GetSchiffy" class="photo">
                  </div>

                  <!-- Title -->
                  <div class="item-title">
                    <h4 class="title shadow-text">Jonathan Urdaneta<br><span class="style-title">@lang('team.position_jonathan_team')</span></h4>
                  </div>
                </div>
              </li>

              <!-- Item -->
              <li class="splide__slide splide-team-item">
                <div class="item-container">
                  <!-- Photo -->
                  <div class="item-photo">
                    <img src="/static/resources/images/team/getschiffy-Jeffrey.webp" alt="Jeffrey Mateo Inhouse Illustrator GetSchiffy" class="photo">
                  </div>

                  <!-- Title -->
                  <div class="item-title">
                    <h4 class="title shadow-text">Jeffrey Mateo<br><span class="style-title">@lang('team.position_jeffrey_team')</span></h4>
                  </div>
                </div>
              </li>

              <!-- Item -->
              <li class="splide__slide splide-team-item">
                <div class="item-container">
                  <!-- Photo -->
                  <div class="item-photo">
                    <img src="/static/resources/images/team/getschiffy-Chris.webp" alt="Chris Burns position GetSchiffy" class="photo">
                  </div>

                  <!-- Title -->
                  <div class="item-title">
                    <h4 class="title shadow-text">Chris Burns<br><span class="style-title">@lang('team.position_chris_team')</span></h4>
                  </div>
                </div>
              </li>

              <!-- Item --> 
              <li class="splide__slide splide-team-item">
                <div class="item-container">
                  <!-- Photo -->
                  <div class="item-photo">
                    <img src="/static/resources/images/team/getschiffy-renmark.webp" alt="Renmark Quinto Researcher GetSchiffy" class="photo">
                  </div>

                  <!-- Title -->
                  <div class="item-title">
                    <h4 class="title shadow-text">Renmark Quinto<br><span class="style-title">@lang('team.position_renmark_team')</span></h4>
                  </div>
                </div>
              </li>

              <!-- Item --> 
              <li class="splide__slide splide-team-item">
                <div class="item-container">
                  <!-- Photo -->
                  <div class="item-photo">
                    <img src="/static/resources/images/team/getschiffy-giorgi.webp" alt="Giorgi Kurtsikidze Legal representative GetSchiffy" class="photo">
                  </div>

                  <!-- Title -->
                  <div class="item-title">
                    <h4 class="title shadow-text">Giorgi Kurtsikidze<br><span class="style-title">@lang('team.position_giorgi_team')</span></h4>
                  </div>
                </div>
              </li>
            </ul>
          </div>

          <!-- Arrows -->
          <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev arrow-prev">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg>
            </button>
            <button class="splide__arrow splide__arrow--next">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg>
            </button>
          </div>
        </div>
      </section>

      <!-- News -->
      <section class="new-section-dv" id="news-section">
        <!-- Title -->
        <div class="flex justify-center items-center relative news-title">
          <h2 class="text-yellow z-[550] text-center text-4xl sm:text-5xl font-bold uppercase shadow-text">@lang('extra.news_title')</h2>
        </div>

        <!-- News List -->
        <div class="flex flex-wrap justify-center items-center padding-sections select-none text-white text-center">
          <div class="m-[20px]">
            <a href="https://www.benzinga.com/pressreleases/22/04/ab26681353/get-schiffy-set-to-launch-their-pre-ido-a-blockchain-play-to-earn-game-the-main-character-is-name" target="_blank">
              <div class="overflow-hidden benzinga-picture">
                <img src="/static/resources/images/news/benzinga-news-getschiffy.webp" class="w-full h-full align-top" alt="Benzinga News Getschiffy">
              </div>

              <div>
                <span class="title">Get Schiffy Set To Launch...</span><span class="inline-block py-[4px] px-[6px] rounded bg-[#0088cc]">More.</span>
              </div>
            </a>
          </div>

          <div class="m-[20px]">
            <a href="https://www.digitaljournal.com/pr/get-schiffy-set-to-launch-their-pre-ido-a-blockchain-play-to-earn-game-the-main-character-is-named-mr-schiffy-schiffy-doesnt-like-bitcoin-he-only-likes-the-game" target="_blank">
              <div class="overflow-hidden journal-picture">
                <img src="/static/resources/images/news/Digital-Journal-news-getschiffy.webp" class="w-full h-full align-top" alt="Journal News Getschiffy">
              </div>

              <div>
                <span class="title">A Blockchain Play-To-Earn Game The... </span><span class="inline-block py-[4px] px-[6px] rounded bg-[#0088cc]">More.</span>
              </div>
            </a>
          </div>
        </div>
      </section>
    </div>
  </div>

  <!-- Footer And Partnerships -->
  <div class="background-one-image-two">
    <div class="opacityDown-brownToLight">
      <!-- Partnerships -->
      <section class="w-full bg-transparent padding-sections new-section-dv" id="partners-section">
        <div>
          <!-- Title -->
          <div>
            <h2 class="text-center text-yellow text-4xl sm:text-5xl font-bold uppercase shadow-text">@lang('partnerships.title_partnerships')</h2>
          </div>
  
          <!-- Content -->
          <div class="mt-[70px] flex flex-wrap justify-center select-none">
            <!-- Item -->
            <div class="m-[20px] text-center">
              <a href="https://unity.com/" target="_blank" class="w-[200px] h-[100px] bg-transparent flex flex-col justify-center items-center overflow-hidden p-[10px]">
                <span class="text-white text-xs mb-[8px]">@lang('partnerships.developed_in_unity')</span>
                <img src="/static/resources/images/partnerships/U_Logo_White_RGB_1C.webp" alt="Partner Unity" class="align-middle brand-unity">
            </a>
            </div>

            <!-- Item -->
            <!-- <div class="m-[20px]">
              <a href="https://prosperitytoken.io/" target="_blank" class="w-[200px] h-[100px] bg-transparent flex justify-center items-center overflow-hidden p-[10px]"><img src="/static/resources/images/partnerships/prosperity-partner.webp" alt="Partner Prosperity" class="align-middle brand-prosperity"></a>
            </div> -->

            <!-- Item -->
            <!-- <div class="m-[20px]">
              <a href="https://safewages.co.uk/" target="_blank" class="w-[200px] h-[100px] bg-transparent flex justify-center items-center overflow-hidden p-[10px]"><img src="/static/resources/images/partnerships/SafeWages-partner.webp" alt="Partner SafeWages" class="align-middle brand-safeWages"></a>
            </div> -->

            <!-- Item -->
            <!-- <div class="m-[20px]">
              <a href="https://www.andotoken.com/" target="_blank" class="w-[200px] h-[100px] bg-transparent flex justify-center items-center overflow-hidden p-[10px]"><img src="/static/resources/images/partnerships/ando_token-partner.webp" alt="Partner Ando Token" class="align-middle brand-andoToken"></a>
            </div> -->
          </div>
        </div>
      </section>
  
      <!-- Footer -->
      <section class="bg-transparent">
        <div class="flex flex-col-reverse items-center roadmap_form:flex-row roadmap_form:items-start roadmap_form:justify-between padding-sections shadow-divider">
          <!-- Lef content -->
          <div class="flex flex-col items-center">
            <!-- Link Home -->
            <div class="w-[230px] overflow-hidden select-none">
              <a href="#home-section" class="block scrollTo">
                <img class="w-full" src="/static/resources/images/GetSchiffy-Logo.webp" alt="Get Schiffy Logo">
              </a>
            </div>
  
            <!-- Social links -->
            <div>
              <!-- Title Links -->
              <div>
                <h4 class="m-0 text-center font-bold uppercase text-white text-xl">@lang('footer.title_social')</h4>
              </div>
  
              <!-- Link -->
              <div class="flex flex-nowrap mt-[8px]">
                <div class="w-[36px] h-[36px] p-[2px] mx-[5px] rounded-md facebook-color opacity-80 hover:opacity-100 transition-all duration-300">
                  <a href="https://bit.ly/3nIGhq0" target="_blank" class="flex justify-center items-center h-full"><img class="social social-facebook" src="/static/resources/images/social/facebook.webp" alt="Facebook Social GetSchiffy"></a>
                </div>
  
                <div class="w-[36px] h-[36px] p-[2px] mx-[5px] rounded-md instagram-color opacity-80 hover:opacity-100 transition-all duration-300">
                  <a href="https://bit.ly/3afQAPg" target="_blank" class="flex justify-center items-center h-full"><img class="social social-instagram" src="/static/resources/images/social/instagram.webp" alt="Instagram Social GetSchiffy"></a>
                </div>
  
                <div class="w-[36px] h-[36px] p-[2px] mx-[5px] rounded-md twitter-color opacity-80 hover:opacity-100 transition-all duration-300">
                  <a href="https://bit.ly/3NPdevk" target="_blank" class="flex justify-center items-center h-full"><img class="social social-twitter" src="/static/resources/images/social/twitter.webp" alt="Twitter Social GetSchiffy"></a>
                </div>
  
                <div class="w-[36px] h-[36px] p-[2px] mx-[5px] rounded-md telegram-color opacity-80 hover:opacity-100 transition-all duration-300">
                  <a href="https://bit.ly/3quHZfB" target="_blank" class="flex justify-center items-center h-full"><img class="social social-telegram" src="/static/resources/images/social/telegram.webp" alt="Telegram Social GetSchiffy"></a>
                </div>

                <div class="w-[36px] h-[36px] p-[2px] mx-[5px] rounded-md discord-color opacity-80 hover:opacity-100 transition-all duration-300">
                  <a href="https://bit.ly/get-schiffy-discord" target="_blank" class="flex justify-center items-center h-full"><img class="social social-discord" src="/static/resources/images/social/discord.webp" alt="Discord Social GetSchiffy"></a>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Center content -->
          <div class="my-[50px] roadmap_form:my-0 flex flex-nowrap select-none">
            <!-- Menu One -->
            <ul class="pl-[10px] border-l-[4px] border-l-yellow m-[20px]">
              <li class="item-menu"><a href="#home-section" class="block text-lg font-bold py-[5px] px-[6px] text-white rounded hover:bg-[#ffffff09] transition-all duration-300 scrollTo">@lang('header_home.home')</a></li>
              <li class="item-menu"><a href="#promo-section" class="block text-lg font-bold py-[5px] px-[6px] text-white rounded hover:bg-[#ffffff09] transition-all duration-300 scrollTo">@lang('header_home.promo')</a></li>
              <li class="item-menu"><a href="#gameplay-section" class="block text-lg font-bold py-[5px] px-[6px] text-white rounded hover:bg-[#ffffff09] transition-all duration-300 scrollTo">@lang('header_home.gameplay')</a></li>
              <li class="item-menu"><a href="#nfts-section" class="block text-lg font-bold py-[5px] px-[6px] text-white rounded hover:bg-[#ffffff09] transition-all duration-300 scrollTo">@lang('header_home.nfts')</a></li>
              <li class="item-menu"><a href="#motherumbrella-section" class="block text-lg font-bold py-[5px] px-[6px] text-white rounded hover:bg-[#ffffff09] transition-all duration-300 scrollTo">@lang('header_home.motherumbrella')</a></li>
            </ul>
  
            <!-- Menu two -->
            <ul class="pl-[10px] border-l-[4px] border-l-yellow m-[20px]">
              <li class="item-menu"><a href="#roadmap-section" class="block text-lg font-bold py-[5px] px-[6px] text-white rounded hover:bg-[#ffffff09] transition-all duration-300 scrollTo">@lang('header_home.roadmap')</a></li>
              <li class="item-menu"><a href="#tokenomics-section" class="block text-lg font-bold py-[5px] px-[6px] text-white rounded hover:bg-[#ffffff09] transition-all duration-300 scrollTo">@lang('header_home.tokenomics')</a></li>
              <li class="item-menu"><a href="#team-section" class="block text-lg font-bold py-[5px] px-[6px] text-white rounded hover:bg-[#ffffff09] transition-all duration-300 scrollTo">@lang('header_home.team')</a></li>
              <li class="item-menu"><a href="https://whitepaper.getschiffy.com/" target="_blank" class="block text-lg font-bold py-[5px] px-[6px] text-white rounded hover:bg-[#ffffff09] transition-all duration-300">@lang('header_home.whitepaper')</a></li>
              <li class="item-menu"><a href="https://whitepaper.getschiffy.com/faqs" target="_blank" class="block text-lg font-bold py-[5px] px-[6px] text-white rounded hover:bg-[#ffffff09] transition-all duration-300">@lang('footer.terms_and_policies')</a></li>
            </ul>
          </div>
  
          <!-- Right content -->
          <div class="select-none">
            <div>
              <!-- Title -->
              <div>
                <h4 class="m-0 text-center uppercase text-xl font-bold text-white">@lang('footer.title_subscribe')</h4>
              </div>
  
              <!-- Form -->
              <form action="/in-newsletter" method="POST" id="form-add-newsletter" class="flex flex-nowrap rounded overflow-hidden mt-[10px] bg-black">
                <input type="text" class="bg-transparent text-white border border-transparent border-r-0 m-0 h-auto py-[10px] px-[8px] text-base w-[80%]" id="input-email-subscription" placeholder="@lang('footer.placeholder_subscribe')">
                <input type="submit" class="font-bold text-base py-[1px] px-[8px] cursor-pointer bg-yellow opacity-90 hover:opacity-100 transition-all duration-300" id="input-send-subscription" value="@lang('footer.button_submit')">
              </form>

              <!-- E-email -->
              <div class="flex justify-center font-bold flex-col text-center text-white mt-[12px]">
                <span class="text-base uppercase">@lang('footer.placeholder_subscribe')</span>
                <span class="mt-[6px] inline-block bg-yellow text-black py-[4px] px-[8px] rounded select-text">mail@getschiffy.com</span>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Copyright -->
        <footer class="bg-transparent shadow-divider">
          <p class="text-center text-yellow font-bold py-[30px] px-[20px] m-0 uppercase text-base">© 2022, GetSchiffy, @lang('footer.copyright')</p>
        </footer>
      </section>
    </div>
  </div>

  <!-- Up Button -->
  <div class="animate-animate-bounce-slow fixed right-[15px] md:right-[20px] bottom-[25px] cursor-pointer z-[820] select-none">
    <div class="upButton animate__animated animate__zoomIn" id="buttonUp">
      <a href="#home-section" class="bg-yellow transition-all duration-300 opacity-80 hover:opacity-100 scrollTo w-[40px] md:w-[45px] h-[40px] md:h-[45px] flex justify-center items-center rounded-full">
        <i class="material-icons text-black font-bold text-3xl">keyboard_arrow_up</i>
      </a>
    </div>
  </div>

  <!-- Social networks pinned -->
  <div class="fixed right-0 top-[45%] z-[799] flex flex-nowrap items-center select-none transition-all duration-500" id="socialsPinned">
    <div class="cursor-pointer h-[50px] w-[20px] flex justify-center items-center rounded-tl rounded-bl transition-all duration-500" id="closeSocials">
      <i class="material-icons flex items-center justify-center text-4xl">more_vert</i>
    </div>

    <div class="flex flex-col p-[8px] bg-[#25415775] rounded-tl rounded-bl">
      <div class="w-[36px] h-[36px] md:w-[38px] md:h-[38px] mb-2 rounded-md facebook-color opacity-80 hover:opacity-100 transition-all duration-300">
        <a href="https://bit.ly/3nIGhq0" target="_blank" class="flex justify-center items-center h-full"><img class="social social-facebook" src="/static/resources/images/social/facebook.webp" alt="Facebook Social GetSchiffy"></a>
      </div>

      <div class="w-[36px] h-[36px] md:w-[38px] md:h-[38px] mb-2 rounded-md instagram-color opacity-80 hover:opacity-100 transition-all duration-300">
        <a href="https://bit.ly/3afQAPg" target="_blank" class="flex justify-center items-center h-full"><img class="social social-instagram" src="/static/resources/images/social/instagram.webp" alt="Instagram Social GetSchiffy"></a>
      </div>

      <div class="w-[36px] h-[36px] md:w-[38px] md:h-[38px] mb-2 rounded-md twitter-color opacity-80 hover:opacity-100 transition-all duration-300">
        <a href="https://bit.ly/3NPdevk" target="_blank" class="flex justify-center items-center h-full"><img class="social social-twitter" src="/static/resources/images/social/twitter.webp" alt="Twitter Social GetSchiffy"></a>
      </div>

      <div class="w-[36px] h-[36px] md:w-[38px] md:h-[38px] mb-2 rounded-md telegram-color opacity-80 hover:opacity-100 transition-all duration-300">
        <a href="https://bit.ly/3quHZfB" target="_blank" class="flex justify-center items-center h-full"><img class="social social-telegram" src="/static/resources/images/social/telegram.webp" alt="Telegram Social GetSchiffy"></a>
      </div>

      <div class="w-[36px] h-[36px] md:w-[38px] md:h-[38px] rounded-md discord-color opacity-80 hover:opacity-100 transition-all duration-300">
        <a href="https://bit.ly/get-schiffy-discord" target="_blank" class="flex justify-center items-center h-full"><img class="social social-discord" src="/static/resources/images/social/discord.webp" alt="Discord Social GetSchiffy"></a>
      </div>
    </div>
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

  <!-- Js -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/react@18/umd/react.production.min.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js" crossorigin></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/js/splide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-grid@0.4.1/dist/js/splide-extension-grid.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.3.6/dist/js/splide-extension-auto-scroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js" integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="/static/js/assets/confettiFalling.min.js"></script>
  <script src="/static/js/assets/cookies_v1.0.0.min.js"></script>
  <script src="/static/js/home/setting_v1.2.2.min.js"></script>
  <script src="/static/js/home/utilities_v1.2.4.min.js"></script>
</body> 
</html>