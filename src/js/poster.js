import {gsap} from 'gsap';
import Draggable from 'gsap/Draggable';
import html2canvas from 'html2canvas';
gsap.registerPlugin(Draggable);

const download = () => {
  const canvas = document.getElementById('posterCanvas');
  const target = document.querySelector('.downloadLink');
  const image = canvas.toDataURL('image/jpg');
  target.href = image;
};

const change = () => {
  const target = document.querySelector(".testdownload");
  target.innerHTML = "";
  html2canvas(document.querySelector('.poster__div')).then(canvas => {
    canvas.id = 'posterCanvas';
    target.appendChild(canvas);
    //console.log(canvas);
  });
};

const colorChange = e => {
  e.preventDefault();
  const color = e.target.value;
  //console.log(color);
  const poster = document.querySelector('.poster__div');
  poster.style.backgroundColor = color;
  change();
};

export const posterInit = async() => {
  const downloadbutton = document.querySelector('.downloadLink');
  downloadbutton.addEventListener('click', download);
  const color = document.querySelector('.color__input');
  color.addEventListener('change', colorChange);
  Draggable.create('.poster_img', {
    type: 'x,y',
    edgeResistance: 0.1,
    bounds: '.poster',
    throwProps: true,
    onDragEnd: change
  });
};
