const dgebi = (id) => {
  const selectedelement = document.getElementById(id);
  return selectedelement;
};
const dgebCName = (cname) => {
  const selectedelement = document.getElementsByClassName(cname);
  return selectedelement;
};

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
    
    clickCount = (sliderImagelist.length-1);
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
  if (popuClickCount <= -(popuSliderImages.length-1)) {
    console.log("REACHED MAX");
    popuClickCount = 1;
  }
  popuClickCount--;
  let totalSliderLength = imageDiv.clientWidth * popuSliderImages.length;
  let transferLength = popuClickCount * 100;
  console.log("CLICKED RIGHT");
  console.log(transferLength);
  console.log(popuClickCount);
  imageDiv.style.transform = "translateX(" + transferLength + "%)";
  imageDiv.style.transition = "all 1s linear";
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
