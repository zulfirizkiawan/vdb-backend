<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Transaksi &raquo; Grooming Dari {{ $item->customer_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                <table class="table-auto w-full">
                    <tbody>
                       
                        <tr>
                            <th class="border px-6 py-4 text-left">Nama Pelanggan</th>
                            <td class="border px-6 py-4">{{ $item->customer_name }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Jenis Hewan</th>
                            <td class="border px-6 py-4">{{ $item->animal_type }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Jenis Kelamin Hewan</th>
                            <td class="border px-6 py-4">{{ $item->animal_gender }}</td>
                        </tr>
                    
                        <tr>
                            <th class="border px-6 py-4 text-left">Warna Hewan</th>
                            <td class="border px-6 py-4">{{ $item->animal_color }}</td>
                        </tr>
                    
                        <tr>
                            <th class="border px-6 py-4 text-left">Paket Grooming</th>
                            <td class="border px-6 py-4">{{ $item->packet_grooming }}</td>
                        </tr>
                            
                        <tr>
                            <th class="border px-6 py-4 text-left">Catatan</th>
                            <td class="border px-6 py-4">{{ $item->note }}</td>
                        </tr>
                       
                        <tr>
                            <th class="border px-6 py-4 text-left">Total</th>
                            <td class="border px-6 py-4">{{ number_format($item->price) }}</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        
        </div>
    </div>
</x-app-layout>
