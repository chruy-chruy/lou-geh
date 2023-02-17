const ctx = document.getElementById("myChart");

$(document).ready(function () {
  $.ajax({
    url: "bargraph.php",
    type: "GET",
    success: function (result) {
      let value = JSON.parse(result);
      //   console.log(value[0].year)
      let year = [];
      let month = [];
      let total = [];
      for (let index = 0; index < value.length; index++) {
        year.push(value[index].year);
        month.push(value[index].month);
        total.push(value[index].total);
      }
      new Chart(ctx, {
        type: "bar",
        data: {
          labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
          ],
          datasets: [
            {
              label: "Total Sales",
              data: total,
              borderWidth: 1,
              backgroundColor: "rgba(62, 180, 137,.55)",
              borderColor: "#3EB489",
            },
          ],
        },
        options: {
          scales: {
            y: {
              beginAtZero: true,
            },
          },
        },
      });
    },
    error: function (error) {
      console.log("error: ", error);
    },
  });
});
