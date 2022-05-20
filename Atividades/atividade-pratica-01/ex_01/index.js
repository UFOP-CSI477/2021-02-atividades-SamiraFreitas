/*document.getElementById("myBtn").addEventListener("click", myFunction);

function myFunction() {
  alert ("Hello World!");
} teste addevent lister para saldo*/

var valor = 0

function cadDados (valor, data, chave, valordachave, banco,transacao){
    var tb = document.getElementById("table");
    var qtdLinhas = tb.rows.length;
    var linha = tb.insertRow(qtdLinhas);

    var cellCodigo = linha.insertCell(0);
    var cellValor = linha.insertCell(1);
    var cellData = linha.insertCell(2);
    var cellChave = linha.insertCell(3);
    var cellValorCh = linha.insertCell(4);
    var cellBanco = linha.insertCell(5);

    cellCodigo.innerHTML = qtdLinhas;
    cellValor.innerHTML = valor;
    cellData.innerHTML = data;
    cellChave.innerHTML = chave;
    cellValorCh.innerHTML = valordachave;
    cellBanco.innerHTML = banco;
    atualizaSaldo(transacao)
}
function atualizaSaldo(transacao){
  let val = document.getElementById("valor").value
  valor = parseFloat(valor)
  val = parseFloat(val)

  if (transacao == 'enviar'){
    
    valor = valor - val

  }else{
    valor = valor + val

  }

  let saldo = document.getElementById("saldo")
  saldo.innerHTML = ''
  saldo.innerHTML = valor
  

}
