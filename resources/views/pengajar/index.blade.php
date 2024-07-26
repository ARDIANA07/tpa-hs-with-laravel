@extends('layout.master')
@section('title', 'Pengajar')

@section('content')
    <div class="div main-content">
        <section class="section">
            <div class="section-header">
                <h2>{{ $title }}</h2>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Ustadz dan Ustadzah TPA Hidayatus Shibyan Karangkunti</h4>
                    <div class="card-header-form">
                        <div class="card-header-form">
                            <button class="btn btn-sm btn-primary" type="button" data-target="#modal-tambah"
                                data-toggle="modal">Tambah Data</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Foto</th>
                                <th scope="col-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengajar as $p)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>{{ $p->foto }}</td>
                                    <td>
                                        <form action="/pengajar/{{ $p->id }}" id="delete-form{{ $p->id }}">
                                            @method('delete')
                                            <a href="/pengajar/{{ $p->id }}/edit"class="btn btn-sm btn-success"><i
                                                    class="fa fa-edit"></i></a>
                                            <button onclick="confirmDelete('delete-form{{ $p->id }}')"
                                                class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    @include('pengajar.form')
@endsection

@push('script')
    <script>
        function confirmDelete(formId) {
            event.preventDefault()
            swal({
                    title: "Apakah anda yakin?",
                    text: "ketika anda menekan ok maka data anda akan dihapus!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true
                })
                .then((willdelete) => {
                    if (willdelete) {
                        document.getElementById(formId).submit();
                    }
                })
        }

        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endpush
