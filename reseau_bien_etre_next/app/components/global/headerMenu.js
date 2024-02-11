'use client'
import React from 'react';
import Logo from "./logo";
import Menu from "./menu";
import Burger from "./burger";
import { useState } from 'react';

// use to determine the path which is used below in the ternary function
function HeaderMenu() {
    const [isOpen, setIsOpen] = useState(true);
    const toggleBurger = () => {
        setIsOpen(!isOpen);
    };
    const baseMenuClass = 'hidden w-full md:w-auto md:flex menu-wrapper';

    return (
        <div className='bg-[#c3bef0] flex-wrap flex flex-row justify-between items-center md:w-auto'>
            <div className="flex flex-row flex-wrap items-center text-2xl pl-7">
                <Logo />
            </div>
            <div className='pr-7 md:hidden block'>
                <Burger onBurgerClick={toggleBurger}/>
            </div>
            <div className={isOpen ? baseMenuClass : baseMenuClass + ' open'}>
                <Menu />
            </div>
          </div>
    )
}
export default HeaderMenu;