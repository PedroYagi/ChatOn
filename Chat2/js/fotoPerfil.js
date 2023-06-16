let foto=document.querySelector("#foto");
let fotoPerfil=document.querySelector("#fotoPerfil");
foto.addEventListener('change', function() {
  fotoPerfil.src=foto.value;
});
