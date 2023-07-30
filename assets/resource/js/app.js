// product galary

const mainImg = document.getElementById("main-img");
const smImg = document.getElementsByClassName("sm-img");

smImg[0].onclick = function () {
  mainImg.src = smImg[0].src;
};
smImg[1].onclick = function () {
  mainImg.src = smImg[1].src;
};
smImg[2].onclick = function () {
  mainImg.src = smImg[2].src;
};
smImg[3].onclick = function () {
  mainImg.src = smImg[3].src;
};
smImg[4].onclick = function () {
  mainImg.src = smImg[4].src;
};

// product page order submit

const orderButton = document.getElementById("our-prodcut");
const ProductQuaryForm = document.querySelector(".product-quary");

orderButton.addEventListener("click", () => {
  if (ProductQuaryForm.style.display === "block") {
    ProductQuaryForm.style.display = "none";
  } else {
    ProductQuaryForm.style.display = "block";
  }
});
