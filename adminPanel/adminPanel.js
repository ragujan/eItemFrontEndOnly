window.addEventListener("resize", () => {
    console.log(window.outerWidth);
  });
  window.addEventListener('load',()=>{
    secondNavbar.classList.toggle("d-none")
  })
  const dgebi = (id) => {
    const selectedelement = document.querySelector("#" + id);
    return selectedelement;
  };
  const dgebCName = (cname) => {
    const selectedelement = document.querySelectorAll("." + cname);
    return selectedelement;
  };
  const secondNavbar = dgebCName("secondNavbar")[0];
  const burgerMenuIcon = dgebi('burgerMenuIcon');
  burgerMenuIcon.addEventListener('click',()=>{
    
    secondNavbar.classList.toggle("secondNavbar")
    secondNavbar.classList.toggle("d-none")
  })
  const mainHoldingDiv = dgebi("mainHoldingDiv");
  window.addEventListener("scroll", () => {
    const headerDiv = dgebi("headerDiv");
  
    // const spd = dgebi("someProductDiv");
    // if (spd.getBoundingClientRect().y < -1) {
    //   headerDiv.classList.add("darkBlue");
    //   headerDiv.classList.remove("blackBlue");
    //   if (spd.getBoundingClientRect().y < -spd.offsetHeight) {
    //     headerDiv.classList.remove("darkBlue");
    //     headerDiv.classList.add("blackBlue");
    //   }
    // } else if (spd.getBoundingClientRect().y > -1) {
    //   headerDiv.classList.remove("darkBlue");
    //   headerDiv.classList.add("blackBlue");
    // }
    changeNavColor("someProductDiv", "darkBlue", "blackBlue");
    changeNavColor("newArrivalsProductDiv", "darkBlue", "blackBlue");
    //changeNavColor("highDemandProductDiv", "blackBlue", "darkBlue");
  });
  let changeNavColor = (id, addColor, removeColor) => {
    const spd = dgebi(id);
    const headerDiv = dgebi("headerDiv");
   
    if (spd.getBoundingClientRect().y <= (-1+headerDiv.clientHeight) ) {
      headerDiv.classList.add(addColor);
      headerDiv.classList.remove(removeColor);
      if (spd.getBoundingClientRect().y <-(spd.offsetHeight-headerDiv.clientHeight)) {
       
        headerDiv.classList.remove(addColor);
        headerDiv.classList.add(removeColor);
      }
    } else if (spd.getBoundingClientRect().y > -1) {
      if (headerDiv.classList.contains(addColor)) {
        headerDiv.classList.remove(addColor);
      }
    }
  
  };
  const userIcon = dgebi("userIconId");
  userIcon.addEventListener("click", () => {
    window.location = "../userRegLog/userRegLog.php";
  });
  const navbarDropDownItemsDiv =   dgebCName("navbarDropDownItemsDiv");
  const navbarDropDownItemsDivSM = dgebCName("navbarDropDownItemsDivSM");
  const nbarItems = dgebCName("navbarMainItemsDiv");
  
  nbarItems[0].addEventListener("mouseover", () => {
    navbarDropDownItemsDiv[0].classList.toggle("d-none");
  });
  nbarItems[0].addEventListener("mouseout", () => {
    navbarDropDownItemsDiv[0].classList.toggle("d-none");
  });
  
  nbarItems[1].addEventListener("mouseover", () => {
    navbarDropDownItemsDiv[1].classList.toggle("d-none");
  });
  nbarItems[1].addEventListener("mouseout", () => {
    navbarDropDownItemsDiv[1].classList.toggle("d-none");
  });
  
  
  nbarItems[2].addEventListener("click", () => {
    navbarDropDownItemsDivSM[0].classList.toggle("d-none");
  });
  
  nbarItems[3].addEventListener("click", () => {
    navbarDropDownItemsDivSM[1].classList.toggle("d-none");
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
  