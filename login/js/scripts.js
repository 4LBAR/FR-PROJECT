function toggleMenu() {
  const navLinks = document.querySelector('.nav-links');
  navLinks.classList.toggle('active'); // Toggle kelas untuk menunjukkan/menyembunyikan menu
}
function toggleProfileMenu() {
  const dropdown = document.getElementById('profileDropdown');
  dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
}
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll('.counter');

  counters.forEach(counter => {
      const updateCount = () => {
          const target = +counter.getAttribute('data-target');
          const count = +counter.innerText;

          // Determine the increment value
          const increment = target / 200; // Adjust the divisor for speed

          if (count < target) {
              // Update the counter
              counter.innerText = Math.ceil(count + increment);
              setTimeout(updateCount, 1); // Call the function again
          } else {
              counter.innerText = target; // Set to target if overshoot
          }
      };

      updateCount(); // Start the counting
  });
});

function generateDayWiseTimeSeries(baseDate, count, { min, max }) {
  let series = [];
  for (let i = 0; i < count; i++) {
    const date = new Date(baseDate);
    date.setDate(date.getDate() + i);
    const value = Math.floor(Math.random() * (max - min + 1)) + min;
    series.push([date.getTime(), value]);
  }
  return series;
}

var options = {
  series: [
  {
    name: 'South',
    data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
      min: 10,
      max: 60
    })
  },
  {
    name: 'North',
    data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
      min: 10,
      max: 20
    })
  },
  {
    name: 'Central',
    data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
      min: 10,
      max: 15
    })
  }
],
  chart: {
  type: 'area',
  height: 350,
  stacked: true,
  events: {
    selection: function (chart, e) {
      console.log(new Date(e.xaxis.min))
    }
  },
},
colors: ['#008FFB', '#00E396', '#CED4DC'],
dataLabels: {
  enabled: false
},
stroke: {
  curve: 'monotoneCubic'
},
fill: {
  type: 'gradient',
  gradient: {
    opacityFrom: 0.6,
    opacityTo: 0.8,
  }
},
legend: {
  position: 'top',
  horizontalAlign: 'left'
},
xaxis: {
  type: 'datetime'
},
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();


