function selectTipo(select) {
  var tipo;
  tipo = select.selectedIndex;
  if (select.selectedIndex==1) {
    document.getElementById('email').style.display = 'block';
    document.getElementById('telefone').style.display = 'none';
    document.getElementById('aniversario').style.display = 'none';
    document.getElementById('endereco').style.display = 'none ';
  }else if (select.selectedIndex==2) {
    document.getElementById('email').style.display = 'none';
    document.getElementById('telefone').style.display = 'block';
    document.getElementById('aniversario').style.display = 'none';
    document.getElementById('endereco').style.display = 'none ';
  }else if (select.selectedIndex==3){
    document.getElementById('email').style.display = 'none';
    document.getElementById('telefone').style.display = 'none';
    document.getElementById('aniversario').style.display = 'block';
    document.getElementById('endereco').style.display = 'none ';
  }else if (select.selectedIndex==4) {
    document.getElementById('email').style.display = 'none';
    document.getElementById('telefone').style.display = 'none';
    document.getElementById('aniversario').style.display = 'none';
    document.getElementById('endereco').style.display = 'block ';
  }


}

function ativaFormBusClient() {
  console.log("teste");
  document.getElementById('buscaContatos').style.display = 'block';
}
