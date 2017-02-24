function handleIn() {
  // Get current item dropdown menu
  let dropdown = this.querySelector('.dropdown');
  // const nav = document.querySelector('.desktop-nav');
  // Add display block
  dropdown.classList.add('trigger-enter');
  // Add opacity
  setTimeout(() => dropdown.classList.add('trigger-enter-active'), 150);
  // Gets Size of dropdown Menu
  let dropdownCoords = dropdown.getBoundingClientRect();
  background.classList.add('open');

  background.style.setProperty('width', `${dropdownCoords.width}px`);
  background.style.setProperty('height', `${dropdownCoords.height}px`);
  background.style.setProperty('left', `${dropdownCoords.left}px`);
  background.style.setProperty('top', `${77}px`); // HACK: <--- BIG HACK
}

function handleOut() {
  background.classList.remove('open');
  let dropdown = this.querySelector('.dropdown');
  dropdown.classList.remove('trigger-enter-active', 'trigger-enter');
}

var menuTriggers = document.querySelectorAll('.dropdown-item');
var background = document.querySelector('.dropdownBackground');

menuTriggers.forEach(trigger => trigger.addEventListener('mouseenter', handleIn));
menuTriggers.forEach(trigger => trigger.addEventListener('mouseleave', handleOut));
