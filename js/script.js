function mostra_senha(id) {
  let input = document.getElementById(id);
  let icon = document.getElementsByClassName('bi')[0];
  icon.classList.toggle('bi-eye-fill');
  icon.classList.toggle('bi-eye-slash');
  console.log(input);
  console.log(icon);
  if (input.getAttribute('type') === 'password') {
    input.setAttribute('type', 'text');
  } else {
    input.setAttribute('type', 'password');
  }
}