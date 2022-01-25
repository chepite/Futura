
  const navTrigger = () => {
    console.log("WORKING")
    const list = document.querySelector('.nav__list--div');
    list.classList.toggle('hidden');
  }

  export const Navinit = () => {
    const nav = document.querySelector('.nav__list--logo a');
    nav.addEventListener('click', navTrigger);
  }

