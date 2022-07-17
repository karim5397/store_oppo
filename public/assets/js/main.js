AOS.init({
  delay:500,
  duration:2000,
});


// our skill width
let ourSkills = document.querySelector(".our-skills");
let span = document.querySelectorAll(".progress span");

window.onscroll = function () {
  if (window.scrollY >= ourSkills.offsetTop - 200) {
    span.forEach((el) => {
      el.style.width = el.dataset.reach;
    });
  }
};

// event count down
let events = document.querySelector(".events");
let reachedTime = new Date("dec 31 2022 23:59:00").getTime();
let counter = setInterval(() => {
  let currentTime = new Date().getTime();
  let timeDifference = reachedTime - currentTime;

  let days = Math.floor(timeDifference / (60 * 60 * 24 * 1000));
  let hours = Math.floor(
    (timeDifference % (60 * 60 * 24 * 1000)) / (60 * 60 * 1000)
  );
  let minutes = Math.floor((timeDifference % (60 * 60 * 1000)) / (60 * 1000));
  let seconds = Math.floor((timeDifference % (60 * 1000)) / 1000);

  document.querySelector(".days").innerHTML = days < 10 ? `0${days} ` : days;
  document.querySelector(".hours").innerHTML =
    hours < 10 ? `0${hours} ` : hours;
  document.querySelector(".minutes").innerHTML =
    minutes < 10 ? `0${minutes} ` : minutes;
  document.querySelector(".seconds").innerHTML =
    seconds < 10 ? `0${seconds} ` : seconds;
}, 1000);

// awesone stats
let stats = document.querySelector(".stats");
let spanNum = document.querySelectorAll(".stats .number");
let started = false;

window.addEventListener("scroll", function () {
  if (window.scrollY >= stats.offsetTop - 500) {
    if (!started) {
      spanNum.forEach((ele) => startCount(ele));
    }
    started = true;
  }
});

function startCount(el) {
  let goal = el.dataset.num;
  let count = setInterval(() => {
    el.textContent++;
    if (el.textContent == goal) {
      clearInterval(count);
    }
  }, 2000 / goal);
}
let arrowUp = document.querySelector(".arrow-up");
let bodyScroll = document.querySelector("html , body");

window.addEventListener("scroll", () => {
  if (bodyScroll.scrollTop >= 500) {
    arrowUp.style.display = "block";
    arrowUp.onclick = function () {
      bodyScroll.scrollTo(0, 0);
    };
  } else {
    arrowUp.style.display = "none";
  }
});


//dark theme
// let sunIcon = document.querySelector(".sun-icon");
// let moonIcon = document.querySelector(".moon-icon");
// let cssStyleSheet = document.querySelector("#skin-color");

// moonIcon.addEventListener("click", () => {
//   cssStyleSheet.setAttribute("href", "css/dark-style.css");
//   moonIcon.style.display = "none";
//   sunIcon.style.display = "flex";
//   window.localStorage.setItem("darkStyle", "css/dark-style.css");
// });

// if (window.localStorage.getItem("darkStyle") == "css/dark-style.css") {
//   cssStyleSheet.setAttribute("href", window.localStorage.getItem("darkStyle"));
// } else {
//   cssStyleSheet.setAttribute("href", "css/style.css");
// }

// sunIcon.addEventListener("click", () => {
//   cssStyleSheet.setAttribute("href", "css/style.css");
//   moonIcon.style.display = "flex";
//   sunIcon.style.display = "none";
//   window.localStorage.removeItem("darkStyle");
// });



//mega menu
let otherLinks = document.querySelector("ul .other-links");
let megaMenu = document.querySelector("li .mega-menu");
otherLinks.addEventListener("click", () => {
  megaMenu.classList.toggle('flex');
});





//dark theme
let sunIcon = document.querySelector(".sun-icon");
let moonIcon = document.querySelector(".moon-icon");
let cssStyleSheet = document.querySelector("#skin-color");

moonIcon.addEventListener("click", () => {
  cssStyleSheet.setAttribute("href", "http://127.0.0.1:8000/assets/css/dark-style.css");
  moonIcon.style.display = "none";
  sunIcon.style.display = "flex";
  window.localStorage.setItem("darkStyle", "http://127.0.0.1:8000/assets/css/dark-style.css");
});

if (window.localStorage.getItem("darkStyle") == "http://127.0.0.1:8000/assets/css/dark-style.css") {
  cssStyleSheet.setAttribute("href", window.localStorage.getItem("darkStyle"));
} else {
  cssStyleSheet.setAttribute("href", "http://127.0.0.1:8000/assets/css/style.css");
}

sunIcon.addEventListener("click", () => {
  cssStyleSheet.setAttribute("href", "http://127.0.0.1:8000/assets/css/style.css");
  moonIcon.style.display = "flex";
  sunIcon.style.display = "none";
  window.localStorage.removeItem("darkStyle");
});



