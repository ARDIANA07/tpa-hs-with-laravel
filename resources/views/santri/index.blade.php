@extends('layout.master')
@section('title', 'Santri')

@section('content')
    <div class="div main-content">
        <section class="section">
            <div class="section-header">
                <h2>{{ $title }}</h2>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Santri TKA, TPA, TQA Hidayatus Shibyan Karangkunti</h4>
                    <div class="card-header-form">
                        <div class="card-header-form">
                            <button class="btn btn-sm btn-primary" type="button" data-target="#modal-tambah-santri"
                                data-toggle="modal">Tambah Data Santri</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Foto</th>
                                <th scope="col-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($santri as $sn)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $sn->name }}</td>
                                    <td>{{ $sn->kelas }}</td>
                                    <td>{{ $sn->tempat_lahir }}</td>
                                    <td>{{ $sn->tanggal_lahir }}</td>
                                    <td>{{ $sn->alamat }}</td>
                                    <td>{{ $sn->foto }}</td>
                                    <td>
                                        <form action="/santri/{{ $sn->id }}" id="delete-form{{ $sn->id }}">
                                            @method('delete')
                                            <a href="/santri/{{ $sn->id }}/edit"class="btn btn-sm btn-success"><i
                                                    class="fa fa-edit"></i></a>
                                            <button onclick="confirmDelete('delete-form{{ $sn->id }}')"
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
    @include('santri.form')
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
