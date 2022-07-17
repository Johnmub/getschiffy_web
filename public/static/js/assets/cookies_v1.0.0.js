var cookies_element = document.querySelector('#termsPolities');
var sign_element = document.querySelector('#signCookies')
var client_info = undefined;

getClient_ip();

async function getClient_ip()
{
  client_info = await $.getJSON('https://api.ipify.org?format=json');
  verifyClient_ip(client_info.ip);
}

function verifyClient_ip(ip_user)
{
  $.ajax({
    method: 'POST',
    dataType: "json",
    url: ('https://getschiffy.com/api/check_clientip'),
    data: { client_ip: ip_user},
    success: function(response) 
    {
      if(!response.success)
        return;

      if(!response.sign) {
        termsPolities_show();
      }
    }
  });
}

function termsPolities_show()
{
  // let height_element = cookies_element.clientHeight;
  cookies_element.style.transform = ("translateY(0px)");
}

sign_element.addEventListener('click', (e) => 
{
  e.preventDefault();
  e.stopPropagation();

  verifyClient_sign(client_info.ip);
});


function verifyClient_sign(ip_user)
{
  $.ajax({
    method: 'POST',
    dataType: "json",
    url: ('https://getschiffy.com/api/check_ipsign'),
    data: { client_ip: ip_user},
    success: function(response) 
    {
      if(!response.success || !response.sign)
        return;

      if(response.sign) {
        termsPolities_hidden();
      }
    }
  });
}

function termsPolities_hidden()
{
  let height_element = cookies_element.clientHeight;
  cookies_element.style.transform = ("translateY("+height_element+"px)");
}