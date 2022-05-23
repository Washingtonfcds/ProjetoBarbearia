<?php 

$Conexao = null;

try{
    require('conecxao.php');

    mysqli_set_charset($Conexao,"utf8");
 $acao = mysqli_real_escape_string($Conexao,$_GET['acao']);
 $id = mysqli_real_escape_string($Conexao, $_GET['id']);
 $Nome = mysqli_real_escape_string($Conexao, $_GET['nome']);
 $Usuario = mysqli_real_escape_string($Conexao,$_GET['Usuario']);
 $Senha = mysqli_real_escape_string($Conexao,$_GET['Senha']);     
 $Cpf = mysqli_real_escape_string($Conexao, $_GET['Cpf']);
     
   if($acao=="select"){
       $sql = "Select * from Usuario where id={$id}";
         
        $resultadoSelect = mysqli_query($Conexao, $sql);

        $vetorLinhasBanco = array();
        while($dados = mysqli_fetch_assoc($resultadoSelect)){
            $vetorLinhasBanco = array();
             $vetorLinha["id"] = $dados["id"];
             $vetorLinha["nome"] = $dados["nome"];
             $vetorLinha["Usuario"] = $dados["Usuario"];
             $vetorLinha["Senha"] = $dados["Senha"];
             $vetorLinha["Cpf"] = $dados["Cpf"];

             $vetorLinhasBanco = $vetorLinha;

        }
        $vetorResposta  = array();

        if(cont($vetorLinhasBanco) > 0){
            $vetorResposta["resultado"] = $vetorLinhasBanco;
        }else{
            $vetorResposta["resultado"] = "nenhum registro foi encontrado";
        }
        echo json_encode($vetorResposta);

   }else if ($acao == "insert"){
       $sql="insert into Usuario(nome,Usuario,Senha,Cpf) VALUES ('$nome', $Usuario,'$Senha','$Cpf')";
       
       mysqli_query($Conexao, $sql);
       $linhas_afetadas = mysqli_affected_rows($Conexao);
       $vetorResposta = array();
        if($linhas_afetadas > 0){
            $vetorResposta["resultado"] = "Dados inseridos com sucesso";
            $vetorResposta["idGerado"] =  mysqli_insert_id($Conexao);
        }else{
            $vetorResposta["resultado"] = "impossivel inseir dados";
            $vetorResposta["idGerado"] = "";
        }
        echo json_encode($vetorResposta);
      

   }
    

}