// Filteret
var filterBtn = document.querySelector(".filteret");
var filterMobilBtn = document.querySelector(".filteretMobil");
var filterAaben = document.querySelector(".filterAaben");
var filterLuk = document.querySelector(".filterLuk");
var filterAabenMobil = document.querySelector(".filterAabenMobil");

filterBtn.addEventListener("click", function(event){
  filterAaben.style.display = "block";
  filterLuk.style.display = "none";
});

filterMobilBtn.addEventListener("click", function(event){
  filterAabenMobil.style.display = "block";
  filterLuk.style.display = "none";
});

// Søgefunktion
var soegBtn = document.querySelector(".soeg");
var soegAaben = document.querySelector(".soegAaben");

soegBtn.addEventListener("click", function(event){
  soegAaben.style.display = "block";
  filterLuk.style.display = "none";
  filterAaben.style.display = "none";
});

// Søgefunktion luk
var soegLuk = document.querySelector(".soegLuk");

soegLuk.addEventListener("click", function(event){
  soegAaben.style.display = "none";
  filterLuk.style.display = "block";
  filterAaben.style.display = "none";
});
