function mostra_senha(id) {
  let input = document.getElementById(id);
  let icon = document.getElementsByClassName('bi')[0];
  icon.classList.toggle('bi-eye-fill');
  icon.classList.toggle('bi-eye-slash');
  input.getAttribute('type') === 'password' ? input.setAttribute('type', 'text') : input.setAttribute('type', 'password');
}

function delete_cartucho(id) {
  window.location.href = 'delete.php?id='.id;
}

function update_cartucho(id) {
  window.location.href = 'update.php?id='.id;
}