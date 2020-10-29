var main = document.querySelector("#main")
var botao = document.querySelector("#adici")
var modal = document.querySelector(".modal")
botao.addEventListener("click", function(){
    modal.style = "display: flex;"
})
var nome = document.querySelector("#nome")
var criar = document.getElementById("criar")
criar.addEventListener("click", function(){
    let conteudo = nome.value
    let div = document.createElement("div")
    div.innerHTML = `<p>${conteudo}</p>`+`<input type="checkbox" name="concluida" class="check">`
    main.appendChild(div)
    div.classList.add("adicionar")
    modal.style = "display: none;"
})