function showTime() {
  let date = new Date();

  let dayList = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
  let monthNames = [
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
  ];
  let dayName = dayList[date.getDay()];
  let monthName = monthNames[date.getMonth()];
  let today = `${dayName}, ${monthName} ${date.getDate()}, ${date.getFullYear()}`;

  let h = date.getHours(); // 0 - 23
  let m = date.getMinutes(); // 0 - 59
  let s = date.getSeconds(); // 0 - 59
  let session = "AM";

  if (h == 0) {
    h = 12;
  }

  if (h == 12) {
    session = "PM";
  }

  if (h > 12) {
    h = h - 12;
    session = "PM";
  }

  h = h < 10 ? "0" + h : h;
  m = m < 10 ? "0" + m : m;
  s = s < 10 ? "0" + s : s;

  let time = h + ":" + m + ":" + s + " " + session;
  document.getElementById("datetime").textContent = today + " | " + time;

  setTimeout(showTime, 1000);
}

showTime();
