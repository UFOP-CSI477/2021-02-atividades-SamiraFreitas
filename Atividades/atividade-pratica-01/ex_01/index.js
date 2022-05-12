function enviarDados(){
   
    const val = document.getElementById("valor").value;
    const date = document.getElementById("data").value;
    const ch = document.getElementById("chave").value;
    const vch = document.getElementById("vchave").value;
    const bc = document.getElementById("bancos").value;
    
    const table = document.getElementById("table");
    const row = document.createElement("row");
    row.innerHTML=  `<tr>
    <td>${val}</td>
    <td>${date}</td>
    <td>${ch}</td>
    <td>${vch}</td>
    <td>${bc}</td>
    `
    table.appendChild(row);
    
}


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