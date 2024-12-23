document.getElementById("edit-button").onclick = function () {
  const inputs = document.querySelectorAll(
    "#user-form input, #user-form textarea"
  );
  inputs.forEach((input) => {
    input.removeAttribute("readonly");
  });
  document.getElementById("edit-button").style.display = "none";
  document.getElementById("submit-button").style.display = "block";
};

atualizarperfil(){
document.getElementById("user-form").onsubmit = function (event) {
  event.preventDefault();
  alert("Perfil atualizado com sucesso!");
  // Aqui você pode adicionar a lógica para enviar os dados do formulário para o servidor.
};
}

function previewImage(event) {
  const imagePreview = document.getElementById("image-preview");
  const file = event.target.files[0];

  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      imagePreview.src = e.target.result;
      imagePreview.style.display = "block"; // Exibe a imagem
    };
    reader.readAsDataURL(file);
  }
}
