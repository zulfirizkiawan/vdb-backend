<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div class="text-lg leading-7 font-semibold ">
                        <h3>Transaksi Dari Mobile</h3>
                    </div>
                    <div class="flex flex-row justify-between mt-4">
                        <div class="mt-2">
                            <div class="bg-blue-500 overflow-hidden shadow shadow-lg sm:rounded-lg" style="background-color: #F4E06D">
                                <div class="ml-2 bg-white overflow-hidden  sm:rounded-lg" >
                                    <div class="flex items-center px-4 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                            <mask id="svgIDa">
                                                <g fill="none" stroke-linejoin="round" stroke-width="4">
                                                    <rect width="30" height="36" x="9" y="8" fill="#fff" stroke="#fff" rx="2"/>
                                                    <path stroke="#fff" stroke-linecap="round" d="M18 4v6m12-6v6"/>
                                                    <path stroke="#000" stroke-linecap="round" d="M16 19h16m-16 8h12m-12 8h8"/>
                                                </g>
                                            </mask><path fill="#F4E06D" d="M0 0h48v48H0z" mask="url(#svgIDa)"/>
                                        </svg>
    
                                        <div class="ml-4 text-lg leading-7 font-semibold " >
                                            <h5>Transaksi Grooming</h5>
                                        </div>
                                    </div>
    
                                    <div class="ml-20 mb-5 flex justify-center">
                                        <div class="mt-2 text-gray-600 font-bold text-2xl">
                                            <h1>{{ $grooming }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-2">
                            <div class="bg-blue-500  overflow-hidden shadow sm:rounded-lg"  style="background-color: #FF7396">
                                <div class="ml-2 bg-white overflow-hidden sm:rounded-lg" >
                                    <div class="flex items-center px-4 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                            <mask id="svgIDa">
                                                <g fill="none" stroke-linejoin="round" stroke-width="4">
                                                    <rect width="30" height="36" x="9" y="8" fill="#fff" stroke="#fff" rx="2"/>
                                                    <path stroke="#fff" stroke-linecap="round" d="M18 4v6m12-6v6"/>
                                                    <path stroke="#000" stroke-linecap="round" d="M16 19h16m-16 8h12m-12 8h8"/>
                                                </g>
                                            </mask><path fill="#FF7396" d="M0 0h48v48H0z" mask="url(#svgIDa)"/>
                                        </svg>
    
                                        <div class="ml-4 text-lg leading-7 font-semibold flex justify-center ...">
                                            <div class="text-center">
                                                <h5>Transaksi Penitipan</h5>
                                            </div>
                                            
                                        </div>
                                    </div>
    
                                    <div class="ml-20 mb-5 flex justify-center">
                                        <div class="mt-2 text-gray-600 font-bold text-2xl">
                                            <h1>{{ $penitipan }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-2">
                            <div class="bg-blue-500  overflow-hidden shadow sm:rounded-lg" style="background-color: #6875F5">
                                <div class="ml-2 bg-white overflow-hidden sm:rounded-lg" >
                                    <div class="flex items-center px-4 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                            <mask id="svgIDa">
                                                <g fill="none" stroke-linejoin="round" stroke-width="4">
                                                    <rect width="30" height="36" x="9" y="8" fill="#fff" stroke="#fff" rx="2"/>
                                                    <path stroke="#fff" stroke-linecap="round" d="M18 4v6m12-6v6"/>
                                                    <path stroke="#000" stroke-linecap="round" d="M16 19h16m-16 8h12m-12 8h8"/>
                                                </g>
                                            </mask><path fill="#6875F5" d="M0 0h48v48H0z" mask="url(#svgIDa)"/>
                                        </svg>
    
                                        <div class="ml-4 text-lg leading-7 font-semibold">
                                            <h5>Transaksi Praktik</h5>
                                        </div>
                                    </div>
    
                                    <div class="ml-20 mb-5 flex justify-center">
                                        <div class="mt-2 text-gray-600 font-bold text-2xl">
                                            <h1>{{ $praktik }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        {{-- space --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-10">
                <div class="p-6">
                    <div class="text-lg leading-7 font-semibold ">
                        <h3>Transaksi Dari Toko</h3>
                    </div>
                    <div class="flex flex-row justify-between mt-4">
                        <div class="mt-2">
                            <div class="bg-blue-500 overflow-hidden shadow shadow-lg sm:rounded-lg" style="background-color: #F4E06D">
                                <div class="ml-2 bg-white overflow-hidden  sm:rounded-lg" >
                                    <div class="flex items-center px-4 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                            <mask id="svgIDa">
                                                <g fill="none" stroke-linejoin="round" stroke-width="4">
                                                    <rect width="30" height="36" x="9" y="8" fill="#fff" stroke="#fff" rx="2"/>
                                                    <path stroke="#fff" stroke-linecap="round" d="M18 4v6m12-6v6"/>
                                                    <path stroke="#000" stroke-linecap="round" d="M16 19h16m-16 8h12m-12 8h8"/>
                                                </g>
                                            </mask><path fill="#F4E06D" d="M0 0h48v48H0z" mask="url(#svgIDa)"/>
                                        </svg>
    
                                        <div class="ml-4 text-lg leading-7 font-semibold " >
                                            <h5>Transaksi Grooming</h5>
                                        </div>
                                    </div>
    
                                    <div class="ml-20 mb-5 flex justify-center">
                                        <div class="mt-2 text-gray-600 font-bold text-2xl">
                                            <h1>{{ $manualgrooming }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-2">
                            <div class="bg-blue-500  overflow-hidden shadow sm:rounded-lg"  style="background-color: #FF7396">
                                <div class="ml-2 bg-white overflow-hidden sm:rounded-lg" >
                                    <div class="flex items-center px-4 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                            <mask id="svgIDa">
                                                <g fill="none" stroke-linejoin="round" stroke-width="4">
                                                    <rect width="30" height="36" x="9" y="8" fill="#fff" stroke="#fff" rx="2"/>
                                                    <path stroke="#fff" stroke-linecap="round" d="M18 4v6m12-6v6"/>
                                                    <path stroke="#000" stroke-linecap="round" d="M16 19h16m-16 8h12m-12 8h8"/>
                                                </g>
                                            </mask><path fill="#FF7396" d="M0 0h48v48H0z" mask="url(#svgIDa)"/>
                                        </svg>
    
                                        <div class="ml-4 text-lg leading-7 font-semibold flex justify-center ...">
                                            <div class="text-center">
                                                <h5>Transaksi Penitipan</h5>
                                            </div>
                                            
                                        </div>
                                    </div>
    
                                    <div class="ml-20 mb-5 flex justify-center">
                                        <div class="mt-2 text-gray-600 font-bold text-2xl">
                                            <h1>{{ $manualpenitipan }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-2">
                            <div class="bg-blue-500  overflow-hidden shadow sm:rounded-lg" style="background-color: #6875F5">
                                <div class="ml-2 bg-white overflow-hidden sm:rounded-lg" >
                                    <div class="flex items-center px-4 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                            <mask id="svgIDa">
                                                <g fill="none" stroke-linejoin="round" stroke-width="4">
                                                    <rect width="30" height="36" x="9" y="8" fill="#fff" stroke="#fff" rx="2"/>
                                                    <path stroke="#fff" stroke-linecap="round" d="M18 4v6m12-6v6"/>
                                                    <path stroke="#000" stroke-linecap="round" d="M16 19h16m-16 8h12m-12 8h8"/>
                                                </g>
                                            </mask><path fill="#6875F5" d="M0 0h48v48H0z" mask="url(#svgIDa)"/>
                                        </svg>
    
                                        <div class="ml-4 text-lg leading-7 font-semibold">
                                            <h5>Transaksi Praktik</h5>
                                        </div>
                                    </div>
    
                                    <div class="ml-20 mb-5 flex justify-center">
                                        <div class="mt-2 text-gray-600 font-bold text-2xl">
                                            <h1>{{ $manualpraktik }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
