let boutonMenuB = document.getElementById("boutonMenuB");
let menuVertical = document.getElementById("menuVertical");
let corpSite = document.getElementById("corpSite");
boutonMenuB.addEventListener("click", () => {
  if(getComputedStyle(menuVertical).display != "none"){
    menuVertical.style.width="0px";
    corpSite.style.width="100%";
    corpSite.style.left="0%";
    setTimeout(function() {
        menuVertical.style.display = "none";
      }, 1000)
  } 
  else {
    menuVertical.style.display = "block";
    setTimeout(function() {
        corpSite.style.width="86.2%";
        menuVertical.style.width="300px";
        corpSite.style.left="15%";
      }, 1)
  }
})
