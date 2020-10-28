var main = document.querySelector("#main")
var botao = document.querySelector("#adici")
botao.addEventListener("click", function(){
    let div = document.createElement("div")
    main.appendChild(div)
    div.classList.add("adicionar")
})