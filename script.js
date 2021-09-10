function showModal(){
    console.log('AAAA');
    document.querySelector(".modal-form").style.display = "flex";
}

document.getElementById("btnAddFuncionario").addEventListener("click", showModal);