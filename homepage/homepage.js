const dgebi = (id) => {
  const selectedelement = document.getElementById(id);
  return selectedelement;
};
const dgebCName = (cname) => {
  const selectedelement = document.getElementsByClassName(cname);
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

const rightArrow = dgebi("rightArrow");
const leftArrow = dgebi("leftArrow");
const sliderImagelist = dgebCName("sliderImages");
let clickCount = 1;
rightArrow.addEventListener("click", () => {
  let otherImageArray = [];
  for (let i = 0; i < sliderImagelist.length; i++) {
    otherImageArray.push(sliderImagelist[i]);
  }

  let checkImageArray = otherImageArray.find((a, i) => {
    if (clickCount == i) {
      sliderImagelist[i].classList.remove("hideTransistion");

      sliderImagelist[i].classList.add("showTransistion");
    } else {
      sliderImagelist[i].classList.add("hideTransistion");

      sliderImagelist[i].classList.remove("showTransistion");
    }
  });

  if (clickCount >= 3) {
    clickCount = 0;
  } else {
    clickCount++;
  }
  console.log(clickCount);
});

leftArrow.addEventListener("click", () => {
  let otherImageArray = [];
  for (let i = 0; i < sliderImagelist.length; i++) {
    otherImageArray.push(sliderImagelist[i]);
  }

  let checkImageArray = otherImageArray.find((a, i) => {
    if (clickCount == i) {
      sliderImagelist[i].classList.remove("hideTransistion");

      sliderImagelist[i].classList.add("showTransistion");
    } else {
      sliderImagelist[i].classList.add("hideTransistion");

      sliderImagelist[i].classList.remove("showTransistion");
    }
  });
  console.log(clickCount);
  if (clickCount == 0) {
    clickCount = sliderImagelist.length - 1;
  } else {
  }
  clickCount--;
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

coldHotSliderRightArrow = dgebi("coldHotSliderItemsRightArrow");
coldHotSliderLeftArrow = dgebi("coldHotSliderItemsLeftArrow");
coldHotSliderImages = dgebCName("coldHotSliderItemsImages");
let coldHotClickCount = 0;
const coldHotimageDiv = dgebCName("coldHotSliderItemsImagesDiv")[0];

coldHotSliderRightArrow.addEventListener("click", () => {
  if (coldHotClickCount <= -(coldHotSliderImages.length - 1)) {
    console.log("REACHED MAX");
    coldHotClickCount = 1;
  }
  coldHotClickCount--;
  let totalSliderLength =
    coldHotimageDiv.clientWidth * coldHotSliderImages.length;
  let transferLength = coldHotClickCount * 100;
  console.log("CLICKED RIGHT");
  console.log(transferLength);
  console.log(coldHotClickCount);
  coldHotimageDiv.style.transform = "translateX(" + transferLength + "%)";
  coldHotimageDiv.style.transition = "all 1s linear";
});

coldHotSliderLeftArrow.addEventListener("click", () => {
  if (coldHotClickCount == 0) {
    console.log("ZIMMEN SHIT");
    coldHotClickCount = -1;
  }
  coldHotClickCount++;

  let transferLength = coldHotClickCount * 100;
  console.log("CLICKED LEFT");
  console.log(transferLength);
  console.log(coldHotClickCount);
  coldHotimageDiv.style.transform = "translateX(" + transferLength + "%)";
  coldHotimageDiv.style.transition = "all 1s linear";
});

const popCircleRight = dgebi("popNavigateCircleRight");
const popCircleLeft = dgebi("popNavigateCircleLeft");
const popImagesContainer = dgebCName("popHotSliderImageContainer")[0];

const popImages = dgebCName("popHotSliderImage");
let popCount = 0;

popCircleRight.addEventListener("click", () => {

    popCount++;
 
  console.log(popCount);

  let popImageLength = popImages[0].clientWidth;
  console.log(popImageLength);
  let transferLength = popCount * popImageLength * 1;
  let totalSliderLength = popImageLength * popImages.length;
  console.log(transferLength);

  console.log(totalSliderLength);

  popImagesContainer.style.transform = "translateX(-" + transferLength + "px)";
  popImagesContainer.style.transition = "transform 0.5s linear"
});

popCircleLeft.addEventListener("click", () => {
  if(popCount==0){
    popCount=1;
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
});
