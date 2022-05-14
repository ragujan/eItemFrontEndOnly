

const dgebi = (id) => {
  const selectedelement = document.querySelector("#" + id);
  return selectedelement;
};
const dgebCName = (cname) => {
  const selectedelement = document.querySelectorAll("." + cname);
  return selectedelement;
};

//1
const popCircleRight = dgebi("popNavigateCircleRight");
const popCircleLeft = dgebi("popNavigateCircleLeft");
const popImagesContainer = dgebCName("popHotSliderImageContainer")[0];

const popImages = dgebCName("popHotSliderImage");
let popCount = 0;
let oglength = popImages.length;
console.log(oglength);

popCircleRight.addEventListener("click", () => {
  popCount++;
  console.log(popCount); //123

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
        document.getElementsByClassName("popHotSliderImage").length - oglength
      ].cloneNode(true);
    popImagesContainer.appendChild(copy);
  }, 500);
});

popCircleLeft.addEventListener("click", () => {
  if (popCount == 0) {
    popCount = 1;
  }
  popCount--;

  console.log(popCount);

  let popImageLength = popImages[0].clientWidth;
  console.log(popImageLength);
  let transferLength = popCount * popImageLength * 1;
  let totalSliderLength = popImageLength * popImages.length;
  console.log(transferLength);

  console.log(totalSliderLength);

  popImagesContainer.style.transform = "translateX(-" + transferLength + "px)";
  popImagesContainer.style.transition = "transform 0.5s linear";
  popImagesContainer.insertBefore(
    popImages[popImages.length - 1],
    popImagesContainer.firstChild
  );
});
