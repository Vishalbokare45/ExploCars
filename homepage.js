//step 1: get DOM
let nextDom = document.getElementById("next");
let prevDom = document.getElementById("prev");

let carouselDom = document.querySelector(".carousel");
let SliderDom = carouselDom.querySelector(".carousel .list");
let thumbnailBorderDom = document.querySelector(".carousel .thumbnail");
let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll(".item");
let timeDom = document.querySelector(".carousel .time");

thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
let timeRunning = 1000;
let timeAutoNext = 4000;

nextDom.onclick = function () {
  showSlider("next");
};

prevDom.onclick = function () {
  showSlider("prev");
};
let runTimeOut;
let runNextAuto = setTimeout(() => {
  next.click();
}, timeAutoNext);
function showSlider(type) {
  let SliderItemsDom = SliderDom.querySelectorAll(".carousel .list .item");
  let thumbnailItemsDom = document.querySelectorAll(
    ".carousel .thumbnail .item"
  );

  if (type === "next") {
    SliderDom.appendChild(SliderItemsDom[0]);
    thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
    carouselDom.classList.add("next");
  } else {
    SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
    thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
    carouselDom.classList.add("prev");
  }
  clearTimeout(runTimeOut);
  runTimeOut = setTimeout(() => {
    carouselDom.classList.remove("next");
    carouselDom.classList.remove("prev");
  }, timeRunning);

  clearTimeout(runNextAuto);
  runNextAuto = setTimeout(() => {
    next.click();
  }, timeAutoNext);
}

document
  .getElementById("discoverRollsRoyce")
  .addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default action of the link
    fetch("carDetails.json")
      .then((response) => response.json())
      .then((data) => {
        const rollsRoyceDetails = data.cars.find(
          (car) => car.name === "Rolls Royce"
        );
        // Redirect to car_company.html with the Rolls Royce details
        window.location.href = `car_company.html?name=${encodeURIComponent(
          rollsRoyceDetails.name
        )}&description=${encodeURIComponent(
          rollsRoyceDetails.description
        )}&image=${encodeURIComponent(
          rollsRoyceDetails.image
        )}&link=${encodeURIComponent(rollsRoyceDetails.link)}`;
      })
      .catch((error) => console.error("Error fetching car details:", error));
  });
