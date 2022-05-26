function preencherSelectMds(data){   
    let de = document.getElementById('converter-de');

    for (let index in data){
        const code = index
        const name = data[index]
        
        let option = document.createElement("option");
        option.value = code;
        option.innerHTML = `${name}`;
        de.appendChild(option);
    }
    let para = document.getElementById('converter-para');
    for (let index in data){
        const code = index
        const name = data[index]
        
        let option = document.createElement("option");
        option.value = code;
        option.innerHTML = `${name}`;
        para.appendChild(option);
    }
}


function Moedas(){
    fetch('https://economia.awesomeapi.com.br/json/available/uniq')
        .then(response => response.json())
        .then(data => preencherSelectMds(data))
        .catch(error => console.error(error.message))
}
