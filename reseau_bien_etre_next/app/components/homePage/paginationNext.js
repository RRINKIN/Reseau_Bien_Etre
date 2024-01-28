import React from "react"

function PaginationNext({onPaginationNextClick}) {
    return(
        <div className="flex flex-row justify-center bg-zinc-200 hover:text-white w-40 md:hover:bg-zinc-600 rounded-full h-10 md:h-12 w-1/3 border-none mt-10 mb-10">
            <button 
                type="input" 
                id="more" 
                name="more" 
                className="text-center bg-transparent px-4 outline-none flex flex-row items-center"
                onClick={e => {onPaginationNextClick(e)}}
                >
                Suivant
                <svg className="w-5 ml-5 fill-zinc-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/></svg>
            </button>
        </div>
    )
} 
export default PaginationNext