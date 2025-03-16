const profileBtn = document.getElementById("profile-btn");
profileBtn.addEventListener("click", showModal);

function test(){
    alert("Helo");
}

const userModal = document.getElementById("user-modal");

function showModal(){
    userModal.showModal();
}