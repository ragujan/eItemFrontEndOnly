const dgebi = (id) => {
  const selectedelement = document.querySelector("#" + id);
  return selectedelement;
};
const dgebCName = (cname) => {
  const selectedelement = document.querySelectorAll("." + cname);
  return selectedelement;
};

const userIcon = dgebi("userIconId");
userIcon.addEventListener("click", () => {
  window.location = "../userRegLog/userRegLog.php";
});

const nbarItems = dgebCName("navbarMainItemsDiv");
nbarItems[0].addEventListener("mouseover", () => {
  dgebCName("navbarDropDownItemsDiv")[0].classList.toggle("d-none");
});
nbarItems[0].addEventListener("mouseout", () => {
  dgebCName("navbarDropDownItemsDiv")[0].classList.toggle("d-none");
});

nbarItems[1].addEventListener("mouseover", () => {
  dgebCName("navbarDropDownItemsDiv")[1].classList.toggle("d-none");
});
nbarItems[1].addEventListener("mouseout", () => {
  dgebCName("navbarDropDownItemsDiv")[1].classList.toggle("d-none");
});


popuSliderRightArrow = dgebi("popularSliderItemsRightArrow");
popuSliderLeftArrow = dgebi("popularSliderItemsLeftArrow");
popuSliderImages = dgebCName("popularSliderItemsImages");
let popuClickCount = 0;
const imageDiv = dgebCName("popularSliderItemsImagesDiv")[0];

popuSliderRightArrow.addEventListener("click", () => {
  if (popuClickCount <= -(popuSliderImages.length - 1)) {
    imageDiv.style.transition = "none";
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
      popImagesContainer.children[document.getElementsByClassName("popHotSliderImage").length - oglength].cloneNode(true);
        popImagesContainer.appendChild(copy);
  }, 500);
});
