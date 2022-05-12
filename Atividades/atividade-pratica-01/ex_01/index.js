
function cadDados (valor, data, chave, valordachave, banco){
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
   
}