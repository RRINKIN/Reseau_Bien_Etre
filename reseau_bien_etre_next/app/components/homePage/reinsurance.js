import React from 'react';

function Reinsurance() {
    return (
        <section className="bg-gradient-to-b from-[#c3bef0] to-zinc-400 h-auto md:m-h-96 text-white">
            <h2 className="text-center md:text-4xl font-extrabold py-7">Le bien-être en toute confiance</h2>
            <div className="flex flex-col md:flex-row justify-center align-items">
                <div className="text-center basis-1/3 md:px-12 py-4">
                    <div className="flex flex-col align-items items-center md:text-4xl font-extrabold fill-white">
                    <svg className="h-10 w-10 md:h-28 md:w-28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm-80-216c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm4 72.6c-20.8 25-51.5 39.4-84 39.4s-63.2-14.3-84-39.4c-8.5-10.2-23.7-11.5-33.8-3.1-10.2 8.5-11.5 23.6-3.1 33.8 30 36 74.1 56.6 120.9 56.6s90.9-20.6 120.9-56.6c8.5-10.2 7.1-25.3-3.1-33.8-10.1-8.4-25.3-7.1-33.8 3.1z"/></svg>
                    <p className="py-4">Facile</p>
                    </div>
                    <p className="md:text-xl">Trouvez et recommandez facilement les meilleurs professionnels</p>
                </div>
                <div className="basis-1/3 text-center md:px-12 py-4">
                    <div className="flex flex-col align-items items-center md:text-4xl font-extrabold fill-white">
                    <svg className="h-10 w-10 md:h-28 md:w-28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 256H152V152.9c0-39.6 31.7-72.5 71.3-72.9 40-.4 72.7 32.1 72.7 72v16c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24v-16C376 68 307.5-.3 223.5 0 139.5 .3 72 69.5 72 153.5V256H48c-26.5 0-48 21.5-48 48v160c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zM264 408c0 22.1-17.9 40-40 40s-40-17.9-40-40v-48c0-22.1 17.9-40 40-40s40 17.9 40 40v48z"/></svg>
                    <p className="py-4">Sécurisé</p>
                    </div>
                    <p className="md:text-xl fill-white">Payez en toute sécurité</p>
                </div>
                <div className="basis-1/3 text-center md:px-12 py-4">
                    <div className="flex flex-col align-items items-center md:text-4xl font-extrabold fill-white">
                    <svg className="h-10 w-10 md:h-28 md:w-28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.3 501.7C27 291 0 269.4 0 192 0 86 86 0 192 0s192 86 192 192c0 77.4-27 99-172.3 309.7-9.5 13.8-29.9 13.8-39.5 0zM192 272c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80 80 80z"/></svg>
                    <p className="py-4">Local</p>
                    </div>
                    <p className="md:text-xl fill-white">Préférez des professionnels à côté de chez vous</p>
                </div>
            </div>
        </section>
    )
}
export default Reinsurance;