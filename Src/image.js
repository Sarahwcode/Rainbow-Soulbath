function imageClicked(){
   clickImage.style.backgroundColor = "red";
}


let clickImage = document.getElementById("firstImage");
clickImage.addEventListener("change", imageClicked);