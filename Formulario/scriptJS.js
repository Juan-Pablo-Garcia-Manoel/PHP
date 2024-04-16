document.addEventListener('DOMContentLoaded', function() {

    const select = document.getElementById('genero');
    const divInput = document.createElement('div');

    select.addEventListener('change', function() {

      if (select.value === 'Outro (Qual ?)') {

        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'outro';
        input.placeholder = 'Digite o seu gênero';

        divInput.appendChild(input);
        select.parentNode.insertBefore(divInput, select.nextSibling);
      } else {
        divInput.innerHTML = '';
      }
    });
  });

  
  function uncheck(clickedCheckbox) {
    var checkboxes = document.getElementsByName("promocao[]");
    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i] !== clickedCheckbox) {
        checkboxes[i].checked = false;
      }
    }
  }
  

  function validarFormulario() {
    var nome = document.getElementsByName("nome")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var endereco = document.getElementsByName("endereco")[0].value;
    var profissao = document.getElementsByName("profissao")[0].value;
    var genero = document.getElementsByName("genero")[0].value;
    var areas = document.getElementsByName("area[]");
    var faleConosco = document.getElementsByName("faleconosco")[0].value;
    var promocao = document.getElementsByName("promocao[]");
    var senha = document.getElementsByName("senha")[0].value;
    var senhaConf = document.getElementsByName("senha_Conf")[0].value;
  
    if (nome == "" || email == "" || endereco == "" || profissao == "" || genero == "" || faleConosco == "" || senha == "" || senhaConf == "") {
      alert("Por favor, preencha todos os campos obrigatórios.");
      return false;
    }
  
    var areasSelecionadas = false;
    for (var i = 0; i < areas.length; i++) {
      if (areas[i].checked) {
        areasSelecionadas = true;
        break;
      }
    }

    if (!areasSelecionadas) {
      alert("Por favor, selecione ao menos uma área de interesse.");
      return false;
    }
  
    var promocaoSelecionada = false;
    for (var i = 0; i < promocao.length; i++) {
      if (promocao[i].checked) {
        promocaoSelecionada = true;
        break;
      }
    }

    if (!promocaoSelecionada) {
      alert("Por favor, selecione se deseja receber nossas promoções.");
      return false;
    }
  
    if (senha.length < 6 || senhaConf.length < 6) {
      alert("É recomendado uma senha com mais de 6 caracteres!");
      return false;
    }
  
    if (senha != senhaConf) {
      alert("A senha digitada está diferente!");
      return false;
    }
  
    return true;
  }
  