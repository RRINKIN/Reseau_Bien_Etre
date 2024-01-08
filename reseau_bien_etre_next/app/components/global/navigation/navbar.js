import React from "react";
import Link from "next/link";
import Logo from "../logo";

const Navbar = () => {
  return (
      <div className="w-full h-20 bg-[#c3bef0] text-transform: uppercase md:flex md:items-start z-[-1] md:z-auto md:static absolute left-0 md:w-auto md:py-0 py-4 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <div className="container mx-auto px-4 h-full">
          <div className="flex justify-between items-center h-full">
            <div className="flex flex-row flex-wrap items-center text-2xl">
                <Logo />
                <div className="max-w-20 pl-7">Reseau Bien-Être</div>
            </div>
            <ul className="hidden md:flex md:items-center gap-x-6 text-white">
                <li className='mx-4 my-6 md:my-0 hover:text-violet-900 duration-500'>
                    <Link href="/"><p>Accueil</p></Link>
                </li>
                <li className='mx-4 my-6 md:my-0 hover:text-violet-900 duration-500'>
                    <Link href="/apropos"><p>A propos</p></Link>
                </li>
                <li className='mx-4 my-6 md:my-0 hover:text-violet-900 duration-500'>
                    <Link href="/services">Services</Link>
                </li>
                <li className='mx-4 my-6 md:my-0 hover:text-violet-900 duration-500'>
                    <Link href="/contact">Contact</Link>
                </li>
                <li className='mx-4 flex flex-row items-center bg-white text-violet-700 fill-violet-700 px-6 rounded py-2 hover:text-white hover:fill-white hover:bg-violet-900 duration-500'>
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"/></svg>
                    <Link href="/contact" className='px-2'>
                        Login
                    </Link>
                </li>
            </ul>
          </div>
        </div>
      </div>
  );
};
export default Navbar;