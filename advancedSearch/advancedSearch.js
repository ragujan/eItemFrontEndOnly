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

  const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
  let priceGap = 1000;
  
  priceInput.forEach(input =>{
      input.addEventListener("input", e =>{
          let minPrice = parseInt(priceInput[0].value),
          maxPrice = parseInt(priceInput[1].value);
          
          if((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max){
              if(e.target.className === "input-min"){
                  rangeInput[0].value = minPrice;
                  range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
              }else{
                  rangeInput[1].value = maxPrice;
                  range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
              }
          }
      });
  });
  
  rangeInput.forEach(input =>{
      input.addEventListener("input", e =>{
          let minVal = parseInt(rangeInput[0].value),
          maxVal = parseInt(rangeInput[1].value);
  
          if((maxVal - minVal) < priceGap){
              if(e.target.className === "range-min"){
                  rangeInput[0].value = maxVal - priceGap
              }else{
                  rangeInput[1].value = minVal + priceGap;
              }
          }else{
              priceInput[0].value = minVal;
              priceInput[1].value = maxVal;
              range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
              range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
          }
      });
  });