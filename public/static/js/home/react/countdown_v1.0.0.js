'use strict';

const e = React.createElement;

class Countdown extends React.Component 
{
  constructor()
  {
    super();
    this.state = 
    {
      days: 0,
      hours: 0,
      minutes: 0,
      seconds: 0
    };
  }

  componentDidMount() 
  {
    this.date_target = new Date(Date.UTC(2022, 6, 7, 19, 30));

    this.milli_of_second = 1000;
    this.milli_of_minute = this.milli_of_second * 60;
    this.milli_of_hour = this.milli_of_minute * 60;
    this.milli_of_day = this.milli_of_hour * 24

    this.invertal_countDown = setInterval(this.execute_countDown, this.milli_of_second);
  }

  execute_countDown = () => 
  {
    this.now = new Date()
    this.duration = this.date_target - this.now;
    this.remaining_days = Math.floor(this.duration / this.milli_of_day);
    this.remaining_hours = Math.floor((this.duration % this.milli_of_day) / this.milli_of_hour);
    this.remaining_minutes = Math.floor((this.duration % this.milli_of_hour) / this.milli_of_minute);
    this.remaining_seconds = Math.floor((this.duration % this.milli_of_minute) / this.milli_of_second);

    if(this.remaining_seconds <= 0 && this.remaining_minutes <= 0) 
    {
      clearInterval(this.invertal_countDown);

      this.setState({
        days: 0,
        hours: 0,
        minutes: 0,
        seconds: 0
      });

      return;
    }

    this.setState({
      days: this.remaining_days,
      hours: this.remaining_hours,
      minutes: this.remaining_minutes,
      seconds: this.remaining_seconds
    });
  }
  
  render()
  {
    return e("div", {className: "flex flex-nowrap items-center select-none"}, 
    e("div", {className: "bg-[#f95192] w-[56px] h-[56px] mx-[8px] flex items-center justify-center rounded"}, e("span", {className: "text-xl font-bold text-white"}, this.state.days)),
    
    e("div", {className: "bg-[#f95192] w-[56px] h-[56px] mx-[8px] flex items-center justify-center rounded"}, e("span", {className: "text-xl font-bold text-white"}, this.state.hours)),
    
    e("div", {className: "bg-[#f95192] w-[56px] h-[56px] mx-[8px] flex items-center justify-center rounded"}, e("span", {className: "text-xl font-bold text-white"}, this.state.minutes)),
    
    e("div", {className: "bg-[#f95192] w-[56px] h-[56px] mx-[8px] flex items-center justify-center rounded"}, e("span", {className: "text-xl font-bold text-white"}, this.state.seconds)));
  }
}

const domContainer = document.querySelector('#countdown-react');
const root = ReactDOM.createRoot(domContainer);
root.render(e(Countdown));