@extends('frame.main')
@section('content')
    <h1 class="mb-3">Daftar Produk <a href="/products/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
    </h1>
    <table class="table text-center" id="products">
        <thead>
            <tr>
                <th class="text-center" scope="col">#</th>
                <th class="text-center" scope="col">Nama</th>
                <th class="text-center" scope="col">Deskripsi</th>
                <th class="text-center" scope="col">Harga</th>
                <th class="text-center" scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ Str::limit($product->description, 20) ?? '-' }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="/products/{{ $product->id }}/edit" class="badge btn bg-info">Ubah</a>
                        <a href="#" class="badge btn bg-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @push('script')
        <script>
            $("#products").DataTable({
                columnDefs: [{
                    orderable: false,
                    targets: 4
                }],
                paging: true,
                lengthMenu: [5, 10, 20, {
                    label: "Semua",
                    value: -1
                }],
                pageLength: 5,
                language: {
                    decimal: "",
                    searchPlaceholder: "Cari Data",
                    emptyTable: "Tabel kosong",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
                    infoFiltered: "(filtered from _MAX_ total entries)",
                    infoPostFix: "",
                    thousands: ",",
                    lengthMenu: "Tampilkan _MENU_ data",
                    loadingRecords: "Loading...",
                    processing: "",
                    search: "Cari:",
                    zeroRecords: "Data tidak ditemukan",
                    paginate: {
                        first: "<<",
                        last: ">>",
                        next: ">",
                        previous: "<",
                    },
                    aria: {
                        orderable: "Order by this column",
                        orderableReverse: "Reverse order this column",
                    },
                },
            });
        </script>
    @endpush
    @if (session('success'))
        @push('script')
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 2500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: {!! json_encode(session('success')) !!}
                });
            </script>
        @endpush
    @endif
@endsection
