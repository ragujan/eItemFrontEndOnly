const dgebi = (id) => {
  const selectedelement = document.querySelector("#" + id);
  return selectedelement;
};
const dgebCName = (cname) => {
  const selectedelement = document.querySelectorAll("." + cname);
  return selectedelement;
};

const mainHoldingDiv = dgebi("mainHoldingDiv");
window.addEventListener("scroll", () => {
  const headerDiv = dgebi("headerDiv");
});

popuSliderRightArrow = dgebi("popularSliderItemsRightArrow");
popuSliderLeftArrow = dgebi("popularSliderItemsLeftArrow");
popuSliderImages = dgebCName("popularSliderItemsImages");
let popuClickCount = 0;
const imageDiv = dgebCName("popularSliderItemsImagesDiv")[0];

popuSliderRightArrow.addEventListener("click", () => {
  if (popuClickCount <= -(popuSliderImages.length - 1)) {
    imageDiv.style.transition = "transform 0s linear";
    popuClickCount = 1;
  } else {
    imageDiv.style.transition = "all 1s linear";
  }
  popuClickCount--;
  let totalSliderLength = imageDiv.clientWidth * popuSliderImages.length;
  let transferLength = popuClickCount * 100;
  console.log("CLICKED RIGHT");
  console.log(transferLength);
  console.log(popuClickCount);

  imageDiv.style.transform = "translateX(" + transferLength + "%)";
});

popuSliderLeftArrow.addEventListener("click", () => {
  if (popuClickCount == 0) {
    console.log("ZIMMEN SHIT");
    popuClickCount = -1;
  }
  popuClickCount++;

  let totalSliderLength = imageDiv.clientWidth * popuSliderImages.length;
  let transferLength = popuClickCount * 100;
  console.log("CLICKED LEFT");
  console.log(transferLength);
  console.log(popuClickCount);
  imageDiv.style.transform = "translateX(" + transferLength + "%)";
  imageDiv.style.transition = "all 1s linear";
});
