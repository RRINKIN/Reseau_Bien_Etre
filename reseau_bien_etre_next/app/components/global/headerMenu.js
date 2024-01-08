import React from 'react';
import Logo from "./logo";
import Menu from "./menu";

// use to determine the path which is used below in the ternary function
function HeaderMenu() {

    return (
        <div className='bg-[#c3bef0] flex flex-row justify-between items-center md:w-auto'>
            <div className="flex flex-row flex-wrap items-center text-2xl pl-7">
                <Logo />
            </div>
            <div className='pr-7'>
                <span className="burgerMenu cursor-pointer md:hidden block">
                    <svg
                    xmlns="http://www.w3.org/2000/svg" height="30" width="30" className="fill-current text-white hover:text-violet-900" viewBox="0 0 448 512">
                    <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
                    </svg>
                </span>
            </div>
            <Menu />
          </div>
    )
}
export default HeaderMenu;