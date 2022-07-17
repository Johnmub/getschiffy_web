// Confetti
var confettiSettings = 
{ 
  target: 'dropConfetti',
  max: '100',
  size: '1',
  animate: true,
  props: ["square","triangle","line"],
  clock: '10',
  rotate: true,
  with: '1440',
  height: '1300',
  respawn: true
};
var confetti = new ConfettiGenerator(confettiSettings);
confetti.render();

// Play button
var object_playNow = document.querySelector('#playNow');
var trigger_activePlay = document.querySelectorAll('.activePlay');
var out_playNow = document.querySelector('#playNow_box');

trigger_activePlay.forEach((element) => 
{
  element.addEventListener('click', (e) => 
  {
    e.preventDefault();
    e.stopPropagation();

    if(object_playNow.style.display != 'flex')
    {
      out_playNow.classList.remove('animate__zoomOut');
      out_playNow.classList.add('animate__zoomIn');
      object_playNow.style.display = 'flex';
    }
  })
});

var button_closePlayNow = document.querySelector('#close-playNow');
button_closePlayNow.addEventListener('click', (e) => 
{
  if(object_playNow.style.display != 'none')
  {
    out_playNow.classList.remove('animate__zoomIn');
    out_playNow.classList.add('animate__zoomOut');
    setTimeout(function (){object_playNow.style.display = 'none';}, 200)
  }
});

// PieChart
deploy_pieChart_tokenomics();

function deploy_pieChart_tokenomics() 
{
  const labels = [
    'Vip pre IDO',
    'IDO',
    'Burnt so far',
    'Play to earn fund',
    'Team',
    'Liquidity',
    'Marketing'
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Tokenomics',
      data: [6, 3, 4, 60, 10, 2, 15],
      backgroundColor: [
        '#f04aff',
        '#61ff67',
        '#2dff9d',
        '#6abcff',
        '#ff5757',
        '#ffbe47',
        '#ff9249'
      ],
      borderColor: '#000',
      hoverOffset: 4
    }]
  };

  const config = {
    type: 'doughnut',
    data: data,
    options: {
      plugins: {
        legend: {
          position: 'bottom',
          labels: {
            boxWidth: 16,
            boxHeight: 16,
            color: '#ffffff',
            textAlign: 'left'
          }
        }
      }
    }
  };

  const myChart = new Chart(
    document.getElementById('pieChart-tokenomics'),
    config
  );
}