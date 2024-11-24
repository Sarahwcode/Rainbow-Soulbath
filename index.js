function soundResponse(event) {
  event.preventDefault();
  alert("hello");
}

let submitSound = document.querySelector("#sound-bath");
submitSound.addEventListener("submit", soundResponse);
