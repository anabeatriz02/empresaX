function showModal(){
    console.log('AAAA');
    document.querySelector(".modal-form").style.display = "flex";
}

function deletar(idFuncionario){
    //pede confirmação para o usuario
    let confirmacao = confirm("Deseja deletar o funcionário?");

    //se confirmar que quer apagar, redirecionamos para o  arquivo de ação com o id do parâmetro
    if(confirmacao){
        window.location = "acaoDeletar.php?id=" + idFuncionario;

    }
}

document.getElementById("btnAddFuncionario").addEventListener("click", showModal);