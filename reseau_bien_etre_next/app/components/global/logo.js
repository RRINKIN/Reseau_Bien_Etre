'use client';
import React from 'react';
import Image from 'next/image';

function Logo() {
    return (
        <>
            <a href="/">
            <Image src="/images/logo-bien-etre-no-text.png" alt="Logo du réseau bien-être" width={80} height={80} className='h-25 mr-7'/>
            </a>
            <div className="max-w-20">Réseau Bien-Être</div>
        </>
        
    )
}
export default Logo