function soundResponse(event) {
  event.preventDefault();
  let inputValue = document.querySelector("#sound-bath-input");
  console.log(inputValue.value);
}

let submitSound = document.querySelector("#sound-bath");
submitSound.addEventListener("submit", soundResponse);
