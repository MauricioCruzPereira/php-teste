const clearForm = (address) => {
    document.getElementById('street').value = ''
    document.getElementById('district').value = ''
    document.getElementById('city').value = ''
    document.getElementById('state').value = ''

}

const fillForm = (address) => {
    document.getElementById('street').value = address.logradouro
    document.getElementById('district').value = address.bairro
    document.getElementById('city').value = address.localidade
    document.getElementById('state').value = address.uf

}

const isNumber = (cep) => /^[0-9]+$/.test(cep)
const cepValido = (cep) => cep.length == 8 && isNumber(cep);



const searchCep = async () => {
    clearForm()
    //pegando a variavel do front end
    const cep = document.getElementById('cep').value;
    //alocando a variavel para buscar na api
    const url = `http://viacep.com.br/ws/${cep}/json/`;
    //retorna uma promessa, retorno assincrono
    //fetch(url).then(res => res.json()).then(console.log);

    if (cepValido(cep)) {
        const dados = await fetch(url)
        const address = await dados.json()
        if (address.hasOwnProperty('erro')) {
            document.getElementById('street').value = 'CEP não encontrado'
        }
        else {
            fillForm(address)
        }
    }
    else {
        document.getElementById('street').value = 'CEP incorreto'
    }

}


document.getElementById('cep')
    .addEventListener('focusout', searchCep)