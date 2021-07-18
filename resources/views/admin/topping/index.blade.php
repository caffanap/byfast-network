@extends('layouts.admin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Topping</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.kategori-paket.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Topping</li>
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
                                <label for="name" class="col-sm-12 control-label">Nama</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="name" name="name" value="" required>
                                </div>
                                <span class="text-danger" id="nameError"></span>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Deskripsi</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="desc" id="desc" required></textarea>
                                </div>
                                <span class="text-danger" id="descError"></span>

                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-12 control-label">Harga</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" id="harga" name="harga" value="" required>
                                </div>
                                <span class="text-danger" id="hargaError"></span>

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
                        <h3 class="card-title">Data Topping</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <a href="javascript:void(0)" class="btn btn-primary" id="tombol-tambah">Tambah</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

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

@section('script')
<!-- jquery validated -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>

<!-- iziToast -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js" integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>


<script>
    // csrf token
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    // button tambah
    $('#tombol-tambah').click(function() {
        $('#button-simpan').val("create-post");
        $('#id').val('');
        $('#form-tambah-edit').trigger("reset");
        $('#modal-judul').html("Tambah Topping");
        $('#tambah-edit-modal').modal('show');
    })

    // form tambah
    if ($("#form-tambah-edit").length > 0) {
        // $("#form-tambah-edit").validate({
            // submitHandler: function(form) {
                var actionType = $('#tombol-simpan').val();
                $('#tombol-simpan').html('Sending..');
                $.ajax({
                    data: $('#form-tambah-edit').serialize(),
                    url: "{{ route('admin.kategori-paket.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        $('#form-tambah-edit').trigger("reset");
                        $('#tambah-edit-modal').modal('hide');
                        $('#tombol-simpan').html('Simpan');
                        var oTable = $('#example1').dataTable();
                        oTable.fnDraw(false);
                        iziToast.success({
                            title: 'Data Berhasil Disimpan',
                            position: 'bottomRight'
                        });
                    },
                    error: function(data) {
                        console.log('Error:', data);
                        $('#nameError').text(response.responseJSON.errors.name);
                        $('#descError').text(response.responseJSON.errors.desc);
                        $('#hargaError').text(response.responseJSON.errors.harga);
                        $('#tombol-simpan').html('Simpan');
                    }
                });
            // }
        // })
    }

    // data edit
    $(document).on('click', '.edit-post', function() {
        var data_id = $(this).data('id');
        $.get('kategori-paket/' + data_id + '/edit', function(data) {
            $('#modal-judul').html("Edit Topping");
            $('#tombol-simpan').val("edit-post");
            $('#tambah-edit-modal').modal('show');
            //set value                
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#desc').val(data.desc);
        })
    });

    //delete
    $(document).on('click', '.delete', function() {
        dataId = $(this).attr('id');
        $('#konfirmasi-modal').modal('show');
    });
    
    $('#tombol-hapus').click(function() {
        $.ajax({
            url: "kategori-paket/" + dataId, 
            type: 'delete',
            beforeSend: function() {
                $('#tombol-hapus').text('Hapus Data'); 
            },
            success: function(data) { 
                setTimeout(function() {
                    $('#konfirmasi-modal').modal('hide'); 
                    var oTable = $('#example1').dataTable();
                    oTable.fnDraw(false); 
                });
                iziToast.warning({ 
                    title: 'Data Berhasil Dihapus',
                    position: 'bottomRight'
                });
            }
        })
    });


    // datatables
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            // buttons: ["copy", "excel", "pdf"],

            processing: true,
            serverSide: true,
            ajax: {
                url: "{{route('admin.topping.index')}}",
                type: 'GET',
            },
            columns: [{
                    data: "id",
                    name: "id"
                },
                {
                    data: "name",
                    name: "name"
                },
                {
                    data: "desc",
                    name: "desc"
                },
                {
                    data: "harga",
                    name: "harga"
                },
                {
                    data: "created_at",
                    name: "created_at"
                },
                {
                    data: "updated_at",
                    name: "updated_at"
                },
                {
                    data: "action",
                    name: "action"
                },
            ],
            order: [
                [0, 'asc']
            ]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>

@endsection