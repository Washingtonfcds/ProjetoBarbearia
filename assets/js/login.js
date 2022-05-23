var btnEntrar = document.getElementById('btnEntra');
var txtUsuario = document.getElementById('txtUsuario');
var txtSenha = document.getElementById('txtSenha');
var fpopup = document.getElementById('modal');
var escuro = document.getElementById('escuro');
var cadastro_Lk = document.getElementById('cadastro_Lk');
var link = document.getElementById('links');

function Entrar(){
 
    if(txtUsuario.value == "guinho" && txtSenha.value == "guinho0204"){
        window.location.href = link;
        
    }
    else{
        fpopup.style.display="block";
        
    }
    
}
function Cadastro(){

    var cadastro_Lk = document.getElementById('cadastro_Lk');
    window.location.href = cadastro_Lk;
}

var btnCadastrar = document.getElementById('btnCadastra');
btnCadastrar.addEventListener('click',Cadastro);
btnEntrar.addEventListener('click',Entrar);