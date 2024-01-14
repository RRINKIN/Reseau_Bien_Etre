'use client'
import React from "react";
import {useState} from 'react';
import Image from 'next/image';

function Slider_2() {

// list of images. To be replaced with fetch
const slideImages = [
  {url: 'https://images.unsplash.com/photo-1552196563-55cd4e45efb3?q=80&w=3126&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'},
  {url: 'https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?q=80&w=3270&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'},
  {url: 'https://images.unsplash.com/photo-1562322140-8baeececf3df?q=80&w=3269&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'},
  {url: 'https://images.unsplash.com/photo-1632345031435-8727f6897d53?q=80&w=3270&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'},
  {url: 'https://images.unsplash.com/photo-1596728325488-58c87691e9af?q=80&w=3273&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'}
]

// Code to change index of images to the previous slide
const [currentIndex, setCurrentIndex] = useState(1);
const previousSlide = () => {
  const isFirstSlide = currentIndex === 0;
  const newIndex = isFirstSlide ? slideImages.length-1 : currentIndex-1;  
  setCurrentIndex(newIndex); 
}
// Code to change index of images to the next slide
const nextSlide = () => {
  const isLastSlide = currentIndex === slideImages.length -1;
  const newIndex = isLastSlide ? 0 : currentIndex +1;
  setCurrentIndex(newIndex);
}

// display images and SVG's
 return(
  <div className="max-w-[1400px] h-[300px] w-full md:w-1/3 ml-0 py-4 px-4 relative group">
      <div 
      style={{backgroundImage: `url(${slideImages[currentIndex].url})`}} 
      className="shadow-xl main w-full h-full bg-center bg-cover rounded-xl absolute duration-500 top-0 left-20 z-10">
      </div>
      <div 
      style={{backgroundImage: `url(${slideImages[currentIndex+1].url})`}} 
      className="shadow-xl previous w-2/3 h-2/3 bg-center bg-cover rounded-xl duration-500 absolute top-[20%] left-0 z-5">
      </div>
      {/*left arrow*/}
      <svg
      className='z-20 hidden group-hover:block font-bold absolute top-[50%] -translate-x-0 translate-y[-50%] left-5 text-2xl rounded-full p-2 bg-white cursor-pointer' 
      onClick={previousSlide}
      xmlns="http://www.w3.org/2000/svg" height="30" width="30 " viewBox="0 0 384 512"><path d="M380.6 81.7c7.9 15.8 1.5 35-14.3 42.9L103.6 256 366.3 387.4c15.8 7.9 22.2 27.1 14.3 42.9s-27.1 22.2-42.9 14.3l-320-160C6.8 279.2 0 268.1 0 256s6.8-23.2 17.7-28.6l320-160c15.8-7.9 35-1.5 42.9 14.3z"/></svg>
      {/*right arrow*/}
      <svg 
      className='z-20 hidden group-hover:block font-bold absolute top-[50%] -translate-x-0 translate-y[-50%] right-5 text-2xl rounded-full p-2 bg-white cursor-pointer'
      onClick={nextSlide}
      xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 384 512"><path d="M3.4 81.7c-7.9 15.8-1.5 35 14.3 42.9L280.5 256 17.7 387.4C1.9 395.3-4.5 414.5 3.4 430.3s27.1 22.2 42.9 14.3l320-160c10.8-5.4 17.7-16.5 17.7-28.6s-6.8-23.2-17.7-28.6l-320-160c-15.8-7.9-35-1.5-42.9 14.3z"/></svg>
  </div>
 );
}
export default Slider_2