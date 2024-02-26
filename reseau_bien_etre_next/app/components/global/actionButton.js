'use client';
import React from 'react';
import Link from 'next/link';

function ActionButton() {
    return(
        <>
            <Link 
            href="/auth/fichePrestataire">
                <span>Profil</span>
            </Link>
        </>
    )
}
export default ActionButton;