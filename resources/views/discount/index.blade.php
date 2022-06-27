<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Diskon') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white mt-8">
            <table class="table-auto w-full">
                <thead>
                <tr>
                    <th class="border px-6 py-4">ID</th>
                    <th class="border px-6 py-4">Deskripsi</th>
                    <th class="border px-6 py-4">Potongan Diskon</th>
                    <th class="border px-6 py-4">Matikan Diskon</th>
                    <th class="border px-6 py-4">Action</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($discount as $item)
                        <tr>
                            <td class="border px-6 py-4 text-center">{{ $item->id }}</td>
                            <td class="border px-6 py-4 ">{{ $item->description }}</td>
                            <td class="border px-6 py-4 text-center">{{ $item->price_discount }}</td>
                            
                            <td class="border px-6 py-4 text-center">{{ $item->turn_off }}</td>

                            <td class="border px-6 py-3" style=" display:flex; align-items:center; justify-content: space-evenly;">
                                    <a href="{{ route('discount.edit', $item->id) }}" class="text-white font-bold py-2 px-4 rounded" style="background-color: #2666CF;">
                                        Edit
                                    </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                           <td colspan="7" class="border text-center p-5">
                               Data Tidak Ditemukan
                           </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="text-center mt-5">
            {{ $discount->links() }}
        </div>
        </div>
    </div>
</x-app-layout>
