// Implemente a função removeProperty, que recebe um objeto e o nome de uma propriedade.

// Faça o seguinte:

// Se o objeto obj tiver uma propriedade prop, a função removerá a propriedade do objeto e retornará true;
// em todos os outros casos, retorna falso.

function removeProperty(obj, prop) {
  if (obj.hasOwnProperty(prop)) {
    delete obj.prop;
    return true;
  } else {
    return false;
  }
}

var objeto = {
  prop123: "valor1",
  prop456: "valor2",
  prop789: "valor3",
};

removeProperty(meuObjeto, "prop789");
