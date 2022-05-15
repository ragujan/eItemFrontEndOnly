const popCatCircleRight = dgebi("popCatNavigateCircleRight");
const popCatCircleLeft = dgebi("popCatNavigateCircleLeft");
const popCatImagesContainer = dgebCName("popCatSliderImageContainer")[0];

const popCatImages = dgebCName("popCatSliderImageDivs");
let popCatCount = 0;

let popCatoglength = popCatImages.length

popCatCircleRight.addEventListener("click", () => {
  
  popCatCount++;
  let popCatImageLength = popCatCount * popCatImages[0].clientWidth;
  let transferLength = popCatImageLength;

  popCatImagesContainer.style.transform =
    "translateX(-" + transferLength + "px)";
  popCatImagesContainer.style.transition = "transform 0.5s linear";

  setTimeout(() => {
    let copy =
      popCatImagesContainer.children[
        document.getElementsByClassName("popCatSliderImageDivs").length -
        popCatCount
      ].cloneNode(true);
    popCatImagesContainer.appendChild(copy);
    console.log(copy);
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

  let popCatoglength = popCatImages.length;
  popCatImagesContainer.style.transform =
    "translateX(-" + transferLength + "px)";
  popCatImagesContainer.style.transition = "transform 0.5s linear";

  setTimeout(() => {
    let copy =
      popCatImagesContainer.children[
        document.getElementsByClassName("popCatSliderImageDivs").length -
          popCatoglength
      ].cloneNode(true);
    popCatImagesContainer.appendChild(copy);
  }, 500);
});
