function Inserir(){

   var txtNome = document.getElementById('txtNome').value;
       var txtUsuario = document.getElementById('txtUsuario').value;
          var txtSenha = document.getElementById('txtSenha').value;
           var  txtId = document.getElementById('txtId').value;
             var txtCpf = document.getElementById('txtCpf').value;

             var json = {};
             json.acao = "insert";
             json.id = txtId;
             json.Nome = txtNome;
             json.Usuario = txtUsuario;
             json.Cpf = txtCpf;
             json.Senha = txtSenha;
             

             $.ajax({
                 url: "usuario_dao.php",
                 data: json,
                 type: "GET",
                 sucess: function(resp){
                     var j = JSON.parse(resp);
                     alert(j.resultado);
                 }
             });


                

             
            
}