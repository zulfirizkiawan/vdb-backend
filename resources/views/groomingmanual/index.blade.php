<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaksi Grooming Toko') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="mb-18">
                <a href="{{ route('groomingmanual.create') }}" class="text-white font-bold py-2 px-4 rounded" style="background-color: #22b43a;">
                    + Tambah Transaksi Grooming
                </a>
           </div>
           <div class="bg-white mt-8">
            <table class="table-auto w-full">
                <thead>
                <tr>
                    <th class="border px-6 py-4">ID</th>
                    <th class="border px-6 py-4">Nama pelanggan</th>
                    <th class="border px-6 py-4">Jenis Hewan</th>
                    <th class="border px-6 py-4">Paket Grooming</th>
                    <th class="border px-6 py-4 ">Harga</th>
                    <th class="border px-6 py-4">Action</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($groomingmanual as $item)
                        <tr>
                            <td class="border px-6 py-4 text-center">{{ $item->id }}</td>
                            <td class="border px-6 py-4 ">{{ $item->customer_name }}</td>
                            <td class="border px-6 py-4">{{ $item->animal_type }}</td>
                            <td class="border px-6 py-4">{{ $item->packet_grooming }}</td>
                            <td class="border px-6 py-4 text-center">{{ number_format($item->price) }}</td>
                            <td class="border px-6 py-3" style=" display:flex; align-items:center; justify-content: space-evenly;">
                                <a href="{{ route('groomingmanual.show', $item->id) }}" class="text-white font-bold py-2 px-4 rounded" style="background-color: #d2d43c;">
                                    View
                                </a>
                                    <a href="{{ route('groomingmanual.edit', $item->id) }}" class="text-white font-bold py-2 px-4 rounded" style="background-color: #2666CF;">
                                        Edit
                                    </a>
                                    <form action="{{ route('groomingmanual.destroy', $item->id) }}" method="POST" class="inline-block">
                                        {!! method_field('delete') . csrf_field() !!}
                                        <button type="submit" class="text-white font-bold py-2 px-4 rounded inline-block" style="background-color: #DD4A48;">
                                            Hapus
                                        </button>
                                    </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                           <td colspan="6" class="border text-center p-5">
                               Data Tidak Ditemukan
                           </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="text-center mt-5">
            {{ $groomingmanual->links() }}
        </div>
        </div>
    </div>
</x-app-layout>
