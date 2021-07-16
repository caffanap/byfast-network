@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Subscriber</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Subscriber</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Subscriber</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Nama Panggilan</th>
                                        <th>Email</th>
                                        <th>No Telpon</th>
                                        <th>Umur Kehamilan</th>
                                        <th>Tertarik Untuk</th>
                                        <th>Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subscriber as $item)
                                        
                                    <tr>
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td>
                                            {{ $item->nama_panggilan }}
                                        </td>
                                        <td>{{ $item->email }}</td>
                                        <td><a href="https://wa.me/{{ $item->no_telpon }}"> {{ $item->no_telpon }} </a></td>
                                        <td>{{ $item->umur_kehamilan }}</td>
                                        <td>{{ $item->tertarik }}</td>
                                        <td>{{ $item->alamat }}</td>
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Nama Panggilan</th>
                                        <th>Email</th>
                                        <th>No Telpon</th>
                                        <th>Umur Kehamilan</th>
                                        <th>Tertarik Untuk</th>
                                        <th>Alamat</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>


@endsection
