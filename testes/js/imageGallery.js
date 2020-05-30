// Uma galeria de imagens é um conjunto de imagens com botões de remoção correspondentes.
// Este é o código HTML de uma galeria com duas imagens:

// <div class="image">
//   <img src="https://goo.gl/kjzfbE" alt="First">
//   <button class="remove">X</button>
// </div>
// <div class="image">
//   <img src="https://goo.gl/d2JncW" alt="Second">
//   <button class="remove">X</button>
// </div>

// Implemente uma função de configuração que ao receber um evento de click implementa a seguinte lógica:
// * Quando o botão da classe "remove" é clicado, seu elemento div pai deve ser removido da galeria

// Por exemplo, depois que a primeira imagem da galeria acima foi removida, o código HTML ficaria assim:

// <div class="image">
//   <img src="https://goo.gl/d2JncW" alt="Second">
//   <button class="remove">X</button>
// </div>

function setup() {
  // Write your code here.
  document.getElementById(div).remove();
}

// Example case.
document.body.innerHTML = `
<div class="image" id="image1">
  <img src="https://goo.gl/kjzfbE" alt="First">
  <button class="remove" onclick="setup('image1');">X</button>
</div>
<div class="image" id="image1">
  <img src="https://goo.gl/d2JncW" alt="Second">
  <button class="remove" onclick="setup('image2');">X</button>
</div>`;

console.log(document.body.innerHTML);
