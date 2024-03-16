'use client';
import React from 'react';
import Link from 'next/link';
import getPayloadData from '../../auth/getPayloadData';

function ActionButton() {

    // get the roles from the JWT Token
    const payloadData = getPayloadData();

    const isPrestataire = payloadData.roles.find((item) => {
        return item == "ROLE_PREST";
    });
    const isInternaute = payloadData.roles.find((item) => {
        return item == "ROLE_INTER";
    });

    let route = "/auth/ficheInternaute";
    if(isPrestataire) {
        route = "/auth/fichePrestataire";
    }

    return(
        <>
            <Link 
            href={route}>
                <span>Profil</span>
            </Link>
        </>
    )
}
export default ActionButton;