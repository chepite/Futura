import {gsap} from "gsap"
import {Draggable} from "gsap/Draggable";
let canvas;

// const downloadImage = () => {
//   console.log("echo")
//   let dataUri = document.querySelector("canvas").toDataURL("image/jpeg");
//   console.log(dataUri);
//   let canvasImage= document.querySelector(".canvasImage");
//   canvasImage.src= dataUri;
// }

export const posterInit = () => {
  // ctx = canvas.getContext("2d");
gsap.registerPlugin(Draggable)
  // const download = document.querySelector(".download");
  // download.addEventListener("click", downloadImage);

  Draggable.create('.test', {
    bounds: ".poster__canvas",
  });

};
