import {gsap} from 'gsap';
import Draggable from 'gsap/Draggable';
import domtoimage from 'dom-to-image';
import html2canvas from 'html2canvas';
gsap.registerPlugin(Draggable);

const download = e => {
  const canvas = document.getElementById('posterCanvas');
  const target = document.querySelector('.downloadLink');
  const image = canvas.toDataURL('image/jpg');
  target.href = image;
};

const change = () => {
  html2canvas(document.querySelector('.poster__div')).then(canvas => {
    const target = document.querySelector('.testdownload');
    canvas.id = 'posterCanvas';
    target.appendChild(canvas);
    console.log(canvas);
  });
};

export const posterInit = async() => {
  const downloadbutton = document.querySelector('.downloadLink');
  downloadbutton.addEventListener('click', download);
  Draggable.create('.poster_img', {
    type: 'x,y',
    edgeResistance: 0.1,
    bounds: '.poster',
    throwProps: true,
    onDragEnd: change
  });
};
