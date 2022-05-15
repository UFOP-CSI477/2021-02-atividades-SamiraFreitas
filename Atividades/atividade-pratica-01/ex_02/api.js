function Moedas(){
    fetch('https://economia.awesomeapi.com.br/json/available/uniq')
        .then(response => response.json())
        .then(data => preencherSelectMoedas(data))
        .catch(error => console.error(error.message))
}