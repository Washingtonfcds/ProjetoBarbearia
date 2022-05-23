var btnEntrar = document.getElementById('btnEntra');
var txtUsuario = document.getElementById('txtUsuario');
var txtSenha = document.getElementById('txtSenha');
var fpopup = document.getElementById('fundopopup');
var popup= document.getElementById('pop-up');
var cadastro_Lk = document.getElementById('cadastro_Lk')
var link = document.getElementById('link');

function Entrar(){
 
    if(txtUsuario.value == "guinho" && txtSenha.value == "guinho0204"){
        window.location.href = link;
    }
    else{
        fpopup.style.display="block";
        fpopup.style.justifyContent ="center";
        fpopup.style.alignItems = "center"
        fpopup.style.flexDirection= "row";
        fpopup.style.display ="flex";
        popup.style.marginLeft ="-4%";
        
    }
    
}
function Cadastro(){

    var cadastro_Lk = document.getElementById('cadastro_Lk');
    window.location.href = cadastro_Lk;
}

var btnCadastrar = document.getElementById('btnCadastra');
btnCadastrar.addEventListener('click',Cadastro);
btnEntrar.addEventListener('click',Entrar);