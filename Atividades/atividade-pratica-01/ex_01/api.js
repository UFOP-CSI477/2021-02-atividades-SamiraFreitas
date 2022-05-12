function preencherSelectBancos(data){
    let bancos= document.getElementById("bancos")
    for (let index in data) {
       const nome = data[index].name;

       let option = document.createElement("option");
       option.value = nome;
       option.innerHTML = nome;

       bancos.appendChild(option);
    }
}

function carregarBancos() {
    fetch('https://brasilapi.com.br/api/banks/v1')
    .then(response => response.json())
    .then(data=> preencherSelectBancos(data))
    .catch(error => console.error(error))
}
