let mouseCursor;
const cursor = e => {
  mouseCursor.style.top = `${e.pageY }px`;
  mouseCursor.style.left = `${e.pageX }px`;
};

export const cursorInit = () =>
{
  mouseCursor = document.querySelector('.cursor');
  window.addEventListener('mousemove', cursor);
};
