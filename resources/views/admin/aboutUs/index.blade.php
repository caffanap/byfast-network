@extends('layouts.admin')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>About Us</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.about.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- modal add update -->
<div class="modal fade" id="tambah-edit-modal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-judul"></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                    <div class="row">
                        <div class="col-sm-12">

                            <input type="hidden" name="id" id="id">

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Deskripsi 1</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="desc1" id="desc1" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Deskripsi 2</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="desc2" id="desc2" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Deskripsi 3</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="desc3" id="desc3" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Deskripsi 4</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="desc4" id="desc4" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Deskripsi 5</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="desc5" id="desc5" required></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-offset-2 col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan" value="create">Simpan
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- modal delete -->
<div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin menghapus data tersebut?</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus</button>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data About Us</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <form class="form-horizontal" action="{{route('admin.about.update', $aboutUs->id)}}" method="POST">
                            @method('PUT')
                            @csrf
                                    <div class="form-group">
                                        <label for="name" class="col-sm-12 control-label">Deskripsi 1</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="desc1" id="desc1" required>{{$aboutUs->desc1}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-12 control-label">Deskripsi 2</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="desc2" id="desc2" required>{{$aboutUs->desc2}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-12 control-label">Deskripsi 3</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="desc3" id="desc3" required>{{$aboutUs->desc3}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-12 control-label">Deskripsi 4</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="desc4" id="desc4" required>{{$aboutUs->desc4}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-12 control-label">Deskripsi 5</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="desc5" id="desc5" required>{{$aboutUs->desc5}}</textarea>
                                        </div>
                                    </div>


                                <div class="col-sm-offset-2 col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan" value="create">Simpan
                                    </button>
                                </div>

                        </form>
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

@section('script')

@endsection