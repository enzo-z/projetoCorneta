const cadastroElement = document.querySelector("form#cadastro");
const atributosUsuarioObrig = ['nome', 'sobrenome', 'idade', 'sexo', 'login', 'password'];
console.log(cadastroElement);

createInputs();

//Text, radio, password, number

function createInputs(){
    for (let i = 0; i <atributosUsuarioObrig.length; i++){

    var input = document.createElement('input');
    input.setAttribute('name', atributosUsuarioObrig[i]);
    input.setAttribute('required', "");
    // Se for o nome, sobrenome ou login: type = text
    if(input.getAttribute('name') == atributosUsuarioObrig[0] || input.getAttribute('name') == atributosUsuarioObrig[1] || input.getAttribute("name") == atributosUsuarioObrig[4]){
        input.setAttribute('type', 'text');
    }
    //Se for idade, type = number
    if (input.getAttribute("name") == atributosUsuarioObrig[2]){
        input.setAttribute('type', 'number');
    }
    //Se for sexo, type = radio
    if (input.getAttribute("name") == atributosUsuarioObrig[3]){
        //Masculino
        let genderElement1 = document.createElement('input');
        genderElement1.setAttribute('type', 'radio');
        genderElement1.setAttribute('name', 'sexo');
        genderElement1.setAttribute('value', 'M');
        cadastroElement.appendChild(genderElement1);
        //Feminino
        let genderElement2 = document.createElement('input');
        genderElement2.setAttribute('type', 'radio');
        genderElement2.setAttribute('name', 'sexo');
        genderElement2.setAttribute('value', 'F');
        cadastroElement.appendChild;
        //Outro
        input.setAttribute('type', 'radio');
        input.setAttribute('value', 'O');
    }
    if (input.getAttribute("name") == atributosUsuarioObrig[5]){
        input.setAttribute('type', 'password');
    }
    cadastroElement.appendChild(input);
    }
}