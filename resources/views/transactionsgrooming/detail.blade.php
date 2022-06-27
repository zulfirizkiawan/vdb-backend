<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Transaction &raquo; Grooming By {{ $item->user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                <table class="table-auto w-full">
                    <tbody>
                        <tr>
                            <th class="border px-6 py-4 text-left">Foto Pemesan</th>
                            <td class="border px-6 py-4"><img src="{{ $item->user->profile_photo_url }}" style="height: 100px; width: 100px; border-radius: 20px;"></td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Nama Pemesan</th>
                            <td class="border px-6 py-4">{{ $item->user->name }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Alamat</th>
                            <td class="border px-6 py-4">{{ $item->user->address }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">No. Hp</th>
                            <td class="border px-6 py-4">{{ $item->user->phoneNumber }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Foto Hewan</th>
                            <td class="border px-6 py-4"><img src="{{ $item->grooming_photo_path }}" style="height: 100px; width: 100px; border-radius: 20px;"></td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Nama Hewan</th>
                            <td class="border px-6 py-4">{{ $item->animal_name }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Jenis Hewan</th>
                            <td class="border px-6 py-4">{{ $item->animal_type }}</td>
                        </tr>
                       
                        <tr>
                            <th class="border px-6 py-4 text-left">Keturunan</th>
                            <td class="border px-6 py-4">{{ $item->descendants }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Jenis Kelamin Hewan</th>
                            <td class="border px-6 py-4">{{ $item->animal_gender }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Catatan</th>
                            <td class="border px-6 py-4">{{ $item->note }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Paket Grooming</th>
                            <td class="border px-6 py-4">{{ $item->packet_grooming }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Payment Url</th>
                            <td class="border px-6 py-4">
                                <a href="{{ $item->payment_url }}">{{ $item->payment_url }}</a>
                            </td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Status</th>
                            <td class="border px-6 py-4">{{ $item->status }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Sub Total</th>
                            <td class="border px-6 py-4">{{ number_format($item->sub_total) }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Ongkos Kirim</th>
                            <td class="border px-6 py-4">{{ number_format($item->shipping_cost) }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Diskon</th>
                            <td class="border px-6 py-4">{{ number_format($item->discount) }}</td>
                        </tr>
                        <tr>
                            <th class="border px-6 py-4 text-left">Total</th>
                            <td class="border px-6 py-4">{{ number_format($item->total) }}</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        
            {{-- <div class="w-full rounded overflow-hidden shadow-lg px-6 py-6 bg-white">
                <div class="-mx-4 -mb-4 md:mb-0" style=" display:flex; align-items:center; justify-content: space-evenly;">
                    <div class="md:w-1/6 ">
                        <img src="{{ $item->grooming_photo_path }}" alt="" class="w-100 rounded">
                    </div>
                    <div class="w-full md:w-5/6 px-4 mb-4 md:mb-0">
                        <div class="flex-wrap mb-3" style="display:flex; margin-bottom: 5%">
                            <div class="w-2/6" style="margin-right: 0%;">
                                <div class="text-sm">Product Name</div>
                                <div class="text-xl font-bold">{{ $item->user->name }}</div>
                            </div>
                            <div class="w-1/6" style="margin-right: 0%;">
                                <div class="text-sm">Quantity</div>
                                <div class="text-xl font-bold">{{ number_format($item->quantity) }}</div>
                            </div>
                            <div class="w-2/6" style="margin-right: 0%;">
                                <div class="text-sm">Total</div>
                                <div class="text-xl font-bold">{{ number_format($item->total) }}</div>
                            </div>
                            <div class="w-1/6" style="margin-right: 0%;">
                                <div class="text-sm">Status</div>
                                <div class="text-xl font-bold">{{ $item->status }}</div>
                            </div>
                        </div>
                        <div class="w-full flex-wrap mb-3" style="display:flex; margin-bottom: 2%;">
                            <div class="w-2/6" style="margin-right: 0%;">
                                <div class="text-sm">User Name</div>
                                <div class="text-xl font-bold">{{ $item->user->name }}</div>
                            </div>
                           
                            <div class="w-2/6" style="margin-right: 0%;">
                                <div class="text-sm">City</div>
                                <div class="text-xl font-bold">{{ $item->user->city }}</div>
                            </div>
                            <div class="w-1/6" style="margin-right: 0%;">
                                <div class="text-sm">Address</div>
                                <div class="text-xl font-bold">{{ $item->user->address }}</div>
                            </div>
                            <div class="w-1/6" >
                                <div class="text-sm">Email</div>
                                <div class="text-xl font-bold">{{ $item->user->email }}</div>
                            </div>
                        </div>
                        <div class="flex-wrap mb-1" style="display:flex; justify-content: flex-start; margin-bottom: 2%;">
                           
                          
                            <div class="w-1/6">
                                <div class="text-sm">Phone</div>
                                <div class="text-xl font-bold">{{ $item->user->phoneNumber }}</div>
                            </div>
                        </div>
                        <div class="mb-1" style="display:flex; margin-bottom: 2%;">
                            <div class="w-5/6">
                                <div class="text-sm">Payment URL</div>
                                <div class="text-lg">
                                    <a href="{{ $item->payment_url }}">{{ $item->payment_url }}</a>
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
