<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dokter &raquo; {{ $item->name }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                <table class="table-auto w-full">
                    <tbody>
                        <tr>
                            <th class="border px-6 py-4 text-left">Foto Dokter</th>
                            <td class="border px-6 py-4"><img src="{{ asset("storage/$item->doctor_photo_path ") }}" style="height: 100px; width: 100px; border-radius: 20px;"></td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Nama Lengkap</th>
                            <td class="border px-6 py-4">{{ $item->name}}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Tempat Kerja</th>
                            <td class="border px-6 py-4">{{ $item->workplace }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Dokter Spesialis</th>
                            <td class="border px-6 py-4">{{ $item->doctor_specialist }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Jenis kelamin</th>
                            <td class="border px-6 py-4">{{ $item->gender }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">No. Hp</th>
                            <td class="border px-6 py-4">{{ $item->phoneNumber }}</td>
                        </tr>
                     
                        <tr>
                            <th class="border px-6 py-4 text-left">Harga Konsultasi</th>
                            <td class="border px-6 py-4">{{ number_format($item->price) }}</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            {{-- // --}}
            {{-- <div class="w-full rounded overflow-hidden shadow-lg px-6 py-6 bg-white">
                <div class="-mx-4 -mb-4 md:mb-0" style=" display:flex; align-items:center; justify-content: space-evenly;">
                    <div class="md:w-1/6 ">
                        <img src="{{ asset("storage/$item->doctor_photo_path ") }}" alt="" class="w-100 rounded" >
                    </div>
                    <div class="w-full md:w-5/6 px-4 mb-4 md:mb-0">
                        <div class="flex-wrap mb-3" style="display:flex; margin-bottom: 5%">
                            <div class="w-2/6" style="margin-right: 0%;">
                                <div class="text-sm">Name</div>
                                <div class="text-xl font-bold">{{ $item->name }}</div>
                            </div>
                            <div class="w-1/6" style="margin-right: 15%;">
                                <div class="text-sm">Workplace</div>
                                <div class="text-xl font-bold">{{ $item->workplace }}</div>
                            </div>
                            <div class="w-1/6" style="margin-right: 15%;">
                                <div class="text-sm">Doctor Specialist</div>
                                <div class="text-xl font-bold">{{ $item->doctor_specialist }}</div>
                            </div>
                           
                        </div>
                        <div class="w-full flex-wrap mb-3" style="display:flex; margin-bottom: 2%;">
                            <div class="w-2/6" style="margin-right: 0%;">
                                <div class="text-sm">Gender</div>
                                <div class="text-xl font-bold">{{ $item->gender }}</div>
                            </div>

                            <div class="w-2/6" style="margin-right: 0%;">
                                <div class="text-sm">Phone Number</div>
                                <div class="text-xl font-bold">{{ $item->phoneNumber }}</div>
                            </div>
                           
                            <div class="w-2/6" style="margin-left: -1.5%;">
                                <div class="text-sm">Price</div>
                                <div class="text-xl font-bold">{{ $item->price }}</div>
                            </div>
                          
                        </div>
                    
                       
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
