window.addEventListener("resize", () => {
    console.log(window.outerWidth);
  });
  window.addEventListener("load", () => {
    secondNavbar.classList.toggle("d-none");
  });
  const dgebi = (id) => {
    const selectedelement = document.querySelector("#" + id);
    return selectedelement;
  };
  const dgebCName = (cname) => {
    const selectedelement = document.querySelectorAll("." + cname);
    return selectedelement;
  };
  const secondNavbar = dgebCName("secondNavbar")[0];
  const burgerMenuIcon = dgebi("burgerMenuIcon");
  burgerMenuIcon.addEventListener("click", () => {
    secondNavbar.classList.toggle("secondNavbar");
    secondNavbar.classList.toggle("d-none");
  });
  const mainHoldingDiv = dgebi("mainHoldingDiv");
  window.addEventListener("scroll", () => {
    const headerDiv = dgebi("headerDiv");
  
    changeNavColor("someProductDiv", "blackBlue", "darkBlue");
    changeNavColor("newArrivalsProductDiv", "darkBlue", "blackBlue");
  });
  let changeNavColor = (id, addColor, removeColor) => {
    const spd = dgebi(id);
    const headerDiv = dgebi("headerDiv");
  
    if (spd.getBoundingClientRect().y <= -1 + headerDiv.clientHeight) {
      headerDiv.classList.add(addColor);
      headerDiv.classList.remove(removeColor);
      if (
        spd.getBoundingClientRect().y <
        -(spd.offsetHeight - headerDiv.clientHeight)
      ) {
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
  const navbarDropDownItemsDiv = dgebCName("navbarDropDownItemsDiv");
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

  const chooseSizeBy = dgebi("chooseSizeBy");
  const chooseOptionsCB = dgebi("chooseOptionsCB");
  const chooseOptionsType = dgebi("chooseOptionsType");
  chooseSizeBy.addEventListener('change',()=>{
     
     if(chooseSizeBy.value==1){
        chooseOptionsType.classList.remove("d-none")
        chooseOptionsCB.classList.add("d-none")
    }
     if(chooseSizeBy.value==2){
        chooseOptionsCB.classList.remove("d-none")
        chooseOptionsType.classList.add("d-none")
     }

  })