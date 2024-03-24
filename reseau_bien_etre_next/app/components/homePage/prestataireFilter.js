'use client'
import { useState } from "react";
import SearchMenuMulti from "./searchMenuMulti";

function PrestataireFilter(props) {
    const [isOpen, setIsOpen] = useState(false);
    const onFilterClick = () => {
        setIsOpen(!isOpen);
    };
    const baseFilterClass = 'hidden w-full md:w-auto menu-wrapper';
    
    const onFilterMenuClick = (filteredSearchData) => {
      props.onFilterChange(filteredSearchData);
    };

    return(
        <>
            <button className='cursor-pointer' onClick={e => {onFilterClick(e)}}>
                <svg 
                    xmlns="http://www.w3.org/2000/svg" 
                    viewBox="0 0 512 512"
                    className="fill-zinc-400 w-7 h-7"
                    >
                    <path d="M496 384H160v-16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v16H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h80v16c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-16h336c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm0-160h-80v-16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v16H16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h336v16c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-16h80c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm0-160H288V48c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v16H16C7.2 64 0 71.2 0 80v32c0 8.8 7.2 16 16 16h208v16c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-16h208c8.8 0 16-7.2 16-16V80c0-8.8-7.2-16-16-16z"/>
                </svg>
            </button>
            <div className={`${isOpen ? baseFilterClass : baseFilterClass + ' open'} text-white bg-zinc-300 rounded w-full md:w-96 h-auto shadow-lg my-4 md:m-7 absolute left-0 md:left-[220px]`}>
                <SearchMenuMulti btnFilterHandler={onFilterMenuClick}/>
            </div>
        </>
    )
}
export default PrestataireFilter