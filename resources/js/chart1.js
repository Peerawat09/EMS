const ctx = document.getElementById('barchart').getContext('2d');

const barchart = new Chart(ctx,{
  type:'bar',
  data: {
    labels: ['Red', 'Blue', 'Yello', 'Green', 'Perple', 'Orange'],
    datasets:[{
      label:'# of Votes',
      data: [12,19,3,5,2,3],
      backgroundColor: [
        'rgba(255,99,132,0.2)',
        'rgba(54,99,132,0.2)',
        'rgba(255,99,132,0.2)',
        'rgba(255,99,132,0.2)',
        'rgba(255,99,132,0.2)',
        'rgba(255,99,132,0.2)',
      ]

    }]
  }
})
