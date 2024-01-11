'use client';
import React from 'react';
import Link from "next/link";
import LoginButton from "./login";
import { usePathname } from "next/navigation";
import Categories from './categories';

function Menu() {
    const pathname = usePathname()

    return (
    <ul className="hidden md:flex md:items-center gap-x-6 text-white uppercase">
        <li className='mx-4 my-6 md:my-0 hover:text-violet-900 duration-500'>
            <Link href="/" className={pathname === "/" ? "text-violet-900" : "text-white"}><p>Accueil</p></Link>
        </li>
        <li className='mx-4 my-6 md:my-0 hover:text-violet-900 duration-500'>
            <Link href="/apropos" className={pathname === "/apropos" ? "text-violet-900" : "text-white"}><p>A propos</p></Link>
        </li>
        <li className='group mx-4 my-6 md:my-0 hover:text-violet-900 duration-500 relative inline-block'>
            <Link href="/service" className={pathname === "/service" ? "text-violet-900" : "text-white"}>Services</Link>
            <div className="w-auto capitalize bg-zinc-300 p-2 rounded-lg hidden absolute group-hover:block">
                <ul className="pt-2 text-white h-fit">
                    <Categories />
                </ul>
            </div>
        </li>
        <li className='mx-4 my-6 md:my-0 hover:text-violet-900 duration-500'>
            <Link href="/contact" className={pathname === "/contact" ? "text-violet-900" : "text-white"}>Contact</Link>
        </li>
        <div className= "mx-4">
            <LoginButton />
        </div>
    </ul>)}
export default Menu;