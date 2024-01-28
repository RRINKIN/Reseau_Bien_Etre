'use client';
import React from 'react';
import Link from "next/link";
import LoginButton from "./login";
import { usePathname } from "next/navigation";
import Categories from './categories';

function Menu() {
    const pathname = usePathname();

    return (
    <nav className='pl-2 md:pl-0'>
        <ul className="flex flex-col md:flex-row md:items-center gap-x-6 text-white uppercase">
            <li className='mx-4 my-2 md:my-6 md:my-0 hover:text-violet-900 duration-500'>
                <Link href="/" className={pathname === "/" ? "text-violet-900" : "text-white"}>Accueil</Link>
                <p className='border md:border-0'></p>
            </li>
            <li className='mx-4 my-2 md:my-6 md:my-0 hover:text-violet-900 duration-500'>
                <Link href="/apropos" className={pathname === "/apropos" ? "text-violet-900" : "text-white"}>A propos</Link>
                <p className='border md:border-0'></p>
            </li>
            <li className='group mx-4 my-2 md:my-6 md:my-0 hover:text-violet-900 duration-500 relative inline-block'>
                <Link href="/service" className={pathname === "/service" ? "text-violet-900" : "text-white"}>Services</Link>
                <p className='border md:border-0'></p>
                <div className="w-auto capitalize md:bg-zinc-300 p-2 rounded-lg md:hidden md:absolute md:group-hover:block">
                    <Categories />
                </div>
            </li>
            <li className='mx-4 my-2 md:my-0 hover:text-violet-900 duration-500'>
                <Link href="/contact" className={pathname === "/contact" ? "text-violet-900" : "text-white"}>Contact</Link>
                <p className='border md:border-0'></p>
            </li>
            <li className="mx-4 py-4">
                <LoginButton />
            </li>
        </ul>    
    </nav>    
    )}
export default Menu;