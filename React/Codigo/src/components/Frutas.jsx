import React from 'react'

export default function Frutas({frutas}) {
  return (
    <div class="container mx-auto flex flex-row justify-center">
        
        <ul class="mt-4 w-1/2 flex flex-col justify-center items-center">
            <h2 className='text-5xl text-black font-bold'>Array de frutas</h2>
            {frutas.map(( fruta )=>{
                return <li class="text-4xl flex items-center justify-between px-4 py-2 border-b border-gray-200">{fruta}</li>;
            })}
        </ul>
    </div>
  )
}
