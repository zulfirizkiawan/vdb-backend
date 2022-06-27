<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaksi Praktik Mobile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white mt-8">
            <table class="table-auto w-full">
                <thead>
                <tr>
                    <th class="border px-6 py-4">ID</th>
                    <th class="border px-6 py-4">Nama Pemesan</th>
                    <th class="border px-6 py-4">Jenis Hewan</th>
                    <th class="border px-6 py-4">Gejala Pertama</th>
                    <th class="border px-6 py-4">Gejala Kedua</th>
                    <th class="border px-6 py-4">Status</th>
                    <th class="border px-6 py-4">Total</th>
                    <th class="border px-6 py-4">Action</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($transactionspraktik as $item)
                        <tr>
                            <td class="border px-6 py-4 text-center">{{ $item->id }}</td>
                            <td class="border px-6 py-4 ">{{ $item->user->name }}</td>
                            <td class="border px-6 py-4 text-center">{{ $item->animal_type }}</td>
                            <td class="border px-6 py-4 text-center">{{ $item->first_symptom }}</td>
                            <td class="border px-6 py-4 text-center">{{ $item->second_symptom }}</td>
                            <td class="border px-6 py-4 text-center">{{ $item->status }}</td>
                            <td class="border px-6 py-4 text-center">{{ number_format($item->total) }}</td>
                           
                            <td class="px-6 py-3" style=" display:flex; align-items:center; justify-content: space-evenly;">
                                    <a href="{{ route('transactionspraktik.show', $item->id) }}" class="text-white font-bold py-2 px-4 rounded mr-2" style="background-color: #d2d43c;">
                                        View
                                    </a>
                                    <form action="{{ route('transactionspraktik.destroy', $item->id) }}" method="POST" class="inline-block">
                                        {!! method_field('delete') . csrf_field() !!}
                                        <button type="submit" class="text-white font-bold py-2 px-4 rounded inline-block" style="background-color: #DD4A48;">
                                            Delete
                                        </button>
                                    </form>
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
            {{ $transactionspraktik->links() }}
        </div>
        </div>
    </div>
</x-app-layout>
