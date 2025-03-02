function imageClicked(){
    let image = document.querySelectorAll("gallery-img");
    image.style.backgroundColor = "red";
}


let clickImage = document.getElementById("firstImage");
clickImage.addEventListener("click", imageClicked)