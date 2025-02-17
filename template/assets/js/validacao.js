function ValidarMeusDados(){
        
    if($("#nome").val().trim() == ''){
        alert("Preencher o campo NOME");
        $("#nome").focus();
        return false;
    }
    if($("#email").val().trim() == ''){
        alert("Preencher o campo E-MAIL");
        $("#email").focus();
        return false;
    }
}

function ValidarCategoria(){

    if($("#nomecategoria").val().trim() == ''){
        alert("Preencher o campo NOME DA CATEGORIA");
        $("#nomecategoria").focus();
        return false;
    }
}

function ValidarEmpresa(){

    if($("#nomeempresa").val().trim() == ''){
        alert("Preencher o campo NOME EMPRESA");
        $("#nomeempresa").focus();
        return false;
    }
}

function ValidarConta(){
    if($("#banco").val().trim() == ''){
        alert("Preencher o campo BANCO");
        $("#banco").focus();
        return false;
    }
    if($("#agencia").val().trim() == ''){
        alert("Preencher o campo AGÊNCIA");
        $("#agencia").focus();
        return false;
    }
    if($("#conta").val().trim() == ''){
        alert("Preencher o campo CONTA");
        $("#conta").focus();
        return false;
    }   
    if($("#saldo").val().trim() == ''){
        alert("Preencher o campo SALDO");
        $("#saldo").focus();
        return false;
    }         
}

function ValidarMovimento(){

    if($("#tipo").val() == ''){
        alert("Selecione o TIPO");
        $("#tipo").focus();
        return false;
    }
    if($("#data").val().trim() == ''){
        alert("Preencher o campo DATA");
        $("#data").focus();
        return false;
    }
    if($("#valor").val().trim() == ''){
        alert("Preencher o campo VALOR");
        $("#valor").focus();
        return false;
    }
    if($("#categoria").val() == ''){
        alert("Selecione a CATEGORIA");
        $("#categoria").focus();
        return false;
    }
    if($("#empresa").val() == ''){
        alert("Selecione a EMPRESA");
        $("#empresa").focus();
        return false;
    }
    if($("#conta").val() == ''){
        alert("Selecione a CONTA");
        $("#conta").focus();
        return false;
    }
}

function ValidarConsultaPeriodo(){

    if($("#data_inicial").val().trim() == ''){
        alert("Preencher o campo DATA INICIAL");
        $("#data_inicial").focus();
        return false;
    }
    if($("#data_final").val().trim() == ''){
        alert("Preencher o campo DATA FINAL");
        $("#data_final").focus();
        return false;
    }
}

function ValidarLogin(){

    if($("#email").val().trim() == ''){
        alert("Preencher o campo E-MAIL");
        $("#email").focus();
        return false;
    }
    if($("#senha").val().trim() == ''){
        alert("Preencher o campo SENHA");
        $("#senha").focus();
        return false;
    }
}

function ValidarCadastro(){

    if($("#nome").val().trim() == ''){
        alert("Preencher o campo NOME");
        $("#nome").focus();
        return false;
    }
    if($("#email").val().trim() == ''){
        alert("Preencher o campo E-MAIL");
        $("#email").focus();
        return false;
    }
    if($("#senha").val().trim() == ''){
        alert("Preencher o campo SENHA");
        $("#senha").focus();
        return false;
    }
    if($("#senha").val().trim().length <6){
        alert("A senha deverá conter no mínimo 6 caracteres");
        $("#senha").focus();
        return false;
    }
    if($("#senha").val().trim() != $("#rsenha").val().trim()){
        alert("O campo SENHA e REPETIR SENHA deverão ser iguais");
        $("#rsenha").focus();
        return false;
    }
}