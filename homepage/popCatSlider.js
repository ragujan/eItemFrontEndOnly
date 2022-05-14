const popCatCircleRight = dgebi("popCatNavigateCircleRight");
const popCatCircleLeft = dgebi("popCatNavigateCircleLeft");
const popCatImagesContainer = dgebCName("popCatSliderImageContainer")[0];

const popCatImages = dgebCName("popCatSliderImageDivs");
let popCatCount = 0;
let popCatoglength = popCatImages.length;
console.log(popCatoglength);

popCatCircleRight.addEventListener("click", () => {
  popCatCount++;
  console.log(popCatCount); //123

  let popCatImageLength = popCatCount * popCatImages[0].clientWidth;
  console.log(popCatImageLength);
  let transferLength = popCatImageLength;
  let totalSliderLength = popCatImageLength * popCatImages.length;
  console.log(transferLength);

  console.log(totalSliderLength);

  popCatImagesContainer.style.transform = "translateX(-" + transferLength + "px)";
  popCatImagesContainer.style.transition = "transform 0.5s linear";

  setTimeout(() => {
    let copy =
      popCatImagesContainer.children[
        document.getElementsByClassName("popCatSliderImageDivs").length - popCatoglength
      ].cloneNode(true);
    popCatImagesContainer.appendChild(copy);
  }, 500);
});



popCatCircleLeft.addEventListener("click", () => {
  if (popCatCount == 0) {
    popCatCount = 1;
  }
  popCatCount--;
  console.log(popCatCount); //123

  let popImageLength = popCount * popImages[0].clientWidth;
  console.log(popImageLength);
  let transferLength = popImageLength;
  let totalSliderLength = popImageLength * popImages.length;
  console.log(transferLength);

  console.log(totalSliderLength);

  popImagesContainer.style.transform = "translateX(-" + transferLength + "px)";
  popImagesContainer.style.transition = "transform 0.5s linear";

  setTimeout(() => {
    let copy =
      popImagesContainer.children[
        document.getElementsByClassName("popCatSliderImageDivs").length - popCatoglength
      ].cloneNode(true);
    popImagesContainer.appendChild(copy);
  }, 500);
});
