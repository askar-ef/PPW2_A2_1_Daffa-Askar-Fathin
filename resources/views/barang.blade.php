@extends('main.layouts')

@section("container")
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto p-4">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-indigo-200">No</th>
                    <th class="px-4 py-2 bg-indigo-200">Barang</th>
                    <th class="px-4 py-2 bg-indigo-200">Harga</th>
                    <th class="px-4 py-2 bg-indigo-200">Stok</th>
                    <th class="px-4 py-2 bg-indigo-200">ID Supplier</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_barang as $barang)
                <tr>
                    <td class="px-4 py-2 border border-indigo-300">{{ ++$no }}</td>
                    <td class="px-4 py-2 border border-indigo-300">{{ $barang->nama_barang }}</td>
                    <td class="px-4 py-2 border border-indigo-300">{{ $barang->harga }}</td>
                    <td class="px-4 py-2 border border-indigo-300">{{ $barang->stok }}</td>
                    <td class="px-4 py-2 border border-indigo-300">{{ $barang->id_supplier }}</td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('main.watermark')
</body>
</html>
@endsection