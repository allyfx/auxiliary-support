let displayKeycode = document.getElementById('display_keycode');

document.body.onkeydown = (event) => {
  displayKeycode.innerHTML = `A tecla precionada foi: ${event.keyCode}`;
}