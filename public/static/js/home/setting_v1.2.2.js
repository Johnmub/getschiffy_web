// Sections Vars
var elements_section = document.querySelectorAll('.new-section-dv');
var section_position_list = [];
const MARGIN_END_SECTION = 100;

// Menu Mobile Vars
var shadow_menuMobile = document.querySelector('#shadowMenu_mobile');
var navbar_mobile = document.querySelector('#navbarMobile');
var button_deployMobile = document.querySelector('#deploy_menuMobile');

var stateMenu_mobile = false;

button_deployMobile.addEventListener('click', (e)=> {
  e.stopPropagation();
  e.preventDefault();

  return(stateMenu_mobile ? menuMobile_hidden(): menuMobile_show());
});

function menuMobile_show()
{
  if(stateMenu_mobile)
    return;

  stateMenu_mobile = true;
  navbar_mobile.style.transform = ("translateX(0px)");
  shadow_menuMobile.style.display = "block";
}

function menuMobile_hidden()
{
  if(!stateMenu_mobile)
    return;

  languageMobile_hidden();
  let width_element = navbar_mobile.clientWidth;

  stateMenu_mobile = false;
  navbar_mobile.style.transform = ("translateX(-"+width_element+"px)");
  shadow_menuMobile.style.display = "none";
}

// Language Mobile Menu
var menu_languageMobile = document.querySelector('#languageMobile_menu');
var button_deployLanguage_m = document.querySelector('#deployLanguage_mobile');
var arrow_languageMobile = document.querySelector('#arrow_languageMobile');

var stateLanguage_mobile = false;

button_deployLanguage_m.addEventListener('click', (e)=> {
  e.stopPropagation();
  e.preventDefault();

  return(stateLanguage_mobile ? languageMobile_hidden(): languageMobile_show());
});

function languageMobile_show()
{
  if(stateLanguage_mobile)
    return;

  stateLanguage_mobile = true;
  arrow_languageMobile.style.transform = "rotate(-180deg)";
  menu_languageMobile.style.height = "164px";
}

function languageMobile_hidden()
{
  if(!stateLanguage_mobile)
    return;

  stateLanguage_mobile = false;
  arrow_languageMobile.style.transform = "rotate(0deg)";
  menu_languageMobile.style.height = "0px";
}

// Language Menu
var menu_language = document.querySelector('#language_menu');
var button_deployLanguage = document.querySelector('#deployLanguage');
var arrow_language = document.querySelector('#arrow_language');

var stateLanguage = false;

button_deployLanguage.addEventListener('click', (e)=> {
  e.stopPropagation();
  e.preventDefault();

  return(stateLanguage ? language_hidden(): language_show());
});

function language_show()
{
  if(stateLanguage)
    return;

  stateLanguage = true;
  arrow_language.style.transform = "rotate(-180deg)";
  menu_language.style.height = "150px";
}

function language_hidden()
{
  if(!stateLanguage)
    return;

  stateLanguage = false;
  arrow_language.style.transform = "rotate(0deg)";
  menu_language.style.height = "0px";
}

// Run Structure
launch_structure();

// Scroll Event
window.addEventListener('scroll', function() { calculate_position_scroll(); });

// Scroll To
var buttons_scrolllTo = document.querySelectorAll('a.scrollTo');
buttons_scrolllTo.forEach((button) => 
{
  button.addEventListener('click', (e) => 
  {
    e.preventDefault();
    e.stopPropagation();

    let target = e.currentTarget.getAttribute('href');

    menuMobile_hidden();
    language_hidden();

    document.querySelector(target).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  });
});

// Resize Window
window.addEventListener('resize', function(event) 
{
  menuMobile_hidden();
  language_hidden();
}, true);

// Click
document.addEventListener('click', (ev) => 
{
  if(ev.target.id !== 'navbarMobile' && stateMenu_mobile)
    menuMobile_hidden();
  
  if(ev.target.id !== 'language_menu' && stateLanguage)
    language_hidden();
});

// Functions
function launch_structure() 
{
  window.onload = () => 
  {
    elements_section.forEach(element => {
      var object = {
        'id': element.id,
        'position': element.offsetTop
      };
    
      section_position_list.push(object);
    });
  }
  
  $(document).ready(function()
  {
    // Execute Splide
    var splide_gameplay = new Splide('#gameplay-splide', {
      type: 'loop',
      perMove: 1,
      perPage: 1
    });
    splide_gameplay.mount();

    var splide_roadmap = new Splide('#roadmap-splide', {
      type: 'loop',
      direction: 'ttb',
      height   : '350px',
      arrows   : false
    });
    splide_roadmap.mount();

    var splide_team = new Splide( '#splide-team', {
      type   : 'loop',
      perPage: 3,
      perMove: 1,
      breakpoints: {
        900: {
          perPage: 2
        },
        650: {
          perPage: 1
        }
      }
    } );
    splide_team.mount();

    // Splides NFTs
    var options = {
      type: 'loop',
      drag: true,
      arrows: false,
      autoplay: true,
      pagination: false,
      perMove: 1,
      perPage: 1,
      autoScroll: {
        speed: 3,
      },
    }

    var splides_nfts_1 = new Splide('#nfts-splide_1', options);
    splides_nfts_1.mount();

    var splides_nfts_2 = new Splide('#nfts-splide_2', options);
    splides_nfts_2.mount();

    var splides_nfts_3 = new Splide('#nfts-splide_3', options);
    splides_nfts_3.mount();
  });
}

function calculate_position_scroll()
{
  var body_position = (document.body.getBoundingClientRect()).top;
  
  // Section Positions
  viewport_position = (body_position*-1);

  for (let index = 0; index < section_position_list.length; index++) 
  {
    const element = section_position_list[index];
    next_element = (index+1);
    
    try 
    {
      if((element.position-MARGIN_END_SECTION) <= viewport_position && viewport_position < (section_position_list[next_element].position-MARGIN_END_SECTION)) {
        position_actions(element.id, viewport_position);
        break;
      }
    } 
    catch (error) 
    {
      position_actions(element.id, viewport_position);
      break;
    }
  }
}

function position_actions(elementShow) 
{
  // Hidden Button Up
  visibility_buttonUp(elementShow);

  // Hidden Social Networks
  visibility_buttonSocial(elementShow);

  return;
}

// Up button
var element_buttonUp = document.querySelector('#buttonUp');
element_buttonUp.style.visibility = 'hidden ';

function visibility_buttonUp(elementShow)
{
  if(elementShow == 'home-section' && element_buttonUp.style.visibility != 'hidden')
  {
    element_buttonUp.classList.remove('animate__zoomIn');
    element_buttonUp.classList.add('animate__zoomOut');
    setTimeout(function (){element_buttonUp.style.visibility = 'hidden';}, 200)
  } else if(elementShow != 'home-section' && element_buttonUp.style.visibility == 'hidden')
  {
    element_buttonUp.classList.remove('animate__zoomOut');
    element_buttonUp.classList.add('animate__zoomIn');
    element_buttonUp.style.visibility = 'visible ';
  }
}

// Social Networks
var socials_element = document.querySelector('#socialsPinned');
var socialClosed_element = document.querySelector('#closeSocials');
var socials_show = true;
var social_blocked = false;

socialNetworks_hidden();

socialClosed_element.addEventListener('click', (e) => 
{
  e.preventDefault();
  e.stopPropagation();

  
  social_blocked = socials_show;

  (socials_show ? socialNetworks_hidden(): socialNetworks_show())
});

function socialNetworks_show()
{
  socials_show = true;
  socials_element.style.transform = ("translateX(0px)");
  check_status_social();
}

function socialNetworks_hidden()
{
  let width_element = socials_element.clientWidth;
  let width_button_toggle = socialClosed_element.clientWidth;
  socials_show = false;
  socials_element.style.transform = ("translateX("+(width_element-width_button_toggle)+"px)");
  check_status_social();
}

function check_status_social()
{
  (socials_show ? (socialClosed_element.style.background = "#25415775", socialClosed_element.style.color = "#fff"):(socialClosed_element.style.background = "#F2CB05", socialClosed_element.style.color = "#000"));
}

function visibility_buttonSocial(elementShow)
{
  if(social_blocked)
    return;

  if((elementShow == 'home-section' || elementShow == 'partners-section') && socials_show) {
    socialNetworks_hidden();
  } else if((elementShow != 'home-section' && elementShow != 'partners-section') && !socials_show) {
    socialNetworks_show();
  }
}

// Newsletters
var object_form_subscription = document.querySelector('#form-add-newsletter');
var input_send_subscription = document.querySelector('#input-send-subscription');
var block_send_subscription = false;
var lang_page = document.documentElement.lang.toLowerCase();

input_send_subscription.addEventListener('click', (e)=> 
{
  e.stopPropagation();
  e.preventDefault();

  if(block_send_subscription) {
    return;
  }

  block_send_subscription = true;
  getSend_data_subscription();
});

$.ajaxSetup({
  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
});

function getSend_data_subscription()
{
  $.ajax(
  {
    method: 'POST',
    dataType: "json",
    url: ('/'+lang_page+'/newsletter_member'),
    data: {
      email_subs: $('#input-email-subscription').val()
    },
    success: function(response) 
    {
      toastr.options.onHidden = ()=> {block_send_subscription = false;}
      toastr.options.closeButton = true;
      toastr.options.progressBar = true;
      toastr.options.timeOut = 2000;

      if(response.status) 
      {
        toastr.success(response.message);
        object_form_subscription.reset();

      } else {
        toastr.error(response.message);
      }
    }
  });
}