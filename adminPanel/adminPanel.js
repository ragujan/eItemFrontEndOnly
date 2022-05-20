const dgebi = (id) => {
  const selectedelement = document.querySelector("#" + id);
  return selectedelement;
};
const dgebCName = (cname) => {
  const selectedelement = document.querySelectorAll("." + cname);
  return selectedelement;
};
const manageP = dgebi("manageP");
manageP.addEventListener('click',()=>{
  window.location ="../adminManageProducts/adminManageProducts.php";
})

const manageU = dgebi("manageU");
manageU.addEventListener('click',()=>{
  window.location ="../adminManageUsers/adminManageUsers.php";
})
const mainHoldingDiv = dgebi("mainHoldingDiv");
window.addEventListener("scroll", () => {
  const headerDiv = dgebi("headerDiv");
});

//to set the same height for each slider's in the admin panel
let heightArray = [];
const sliderItemDivs = [...dgebCName("owlCaroItem")];
sliderItemDivs.forEach((slider, id) => {
  let c =
    slider.getBoundingClientRect().bottom - slider.getBoundingClientRect().y;
  console.log(c);
  heightArray.push(c);
});
console.log(heightArray);
let arrayMax = (arr) => {
  // return arr.reduce(function (p, v) {
  //   return p > v ? p : v;
  // });
  return arr.reduce((p, v) => {
    if (p > v) {
      v = p;
    } else {
      v = v;
    }
    return v;
  },0);
};
console.log(arrayMax(heightArray));
sliderItemDivs.forEach((slider, id) => {
  const singleSlider = slider;
  singleSlider.style.height = arrayMax(heightArray) + "px";
});
let max = Math.max(...heightArray);
console.log(max);
//////////////
