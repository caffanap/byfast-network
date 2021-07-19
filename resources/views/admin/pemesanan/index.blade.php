@extends('layouts.admin')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pemesanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.pemesanan.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Pemesanan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- modal add update -->
    <div class="modal fade" id="view-more" aria-hidden="true">
        <div class="modal-dialog modal-lg">
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

                                <table class="table">
                                    <tr>
                                        <td>Nomor Pemesanan</td>
                                        <td id="no_pemesanan_view"></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Paket</td>
                                        <td id="nama_paket_view"></td>
                                    </tr>
                                    <tr id="topping">
                                        <td>Nama Topping</td>
                                        <td id="nama_topping_view"></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pemesan</td>
                                        <td id="nama_lengkap_view"></td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Identitas</td>
                                        <td id="nomor_identitas_view"></td>
                                    </tr>
                                    <tr>
                                        <td>No HP</td>
                                        <td id="no_hp_view"></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td id="alamat_view"></td>
                                    </tr>
                                    <tr>
                                        <td>Total Harga</td>
                                        <td id="total_harga_view"></td>
                                    </tr>
                                    <tr>
                                        <td>Dipesan pada</td>
                                        <td id="created_at_view"></td>
                                    </tr>
                                    <tr>
                                        <td>Status Pemesanan</td>
                                        <td>
                                            <select name="status_pemesanan" id="status_pemesanan" class="form-control">
                                                <option value="pending">Belum Dikonfirmasi</option>
                                                <option value="proses">Sudah Dikonfirmasi</option>
                                                <option value="done">Selesai Pemasangan</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>

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
                            <h3 class="card-title">Data Pemesanan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>No Pemesanan</th>
                                        <th>Nama Paket</th>
                                        <th>Nama</th>
                                        <th>No HP</th>
                                        <th>Status Pemesanan</th>
                                        <th>Dipesan</th>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
        integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>

    <!-- iziToast -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
        integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>


    <script>
        var id_detail = null
        // csrf token
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $('#status_pemesanan').on('change', function() {
            $.ajax({
                data: {
                    'id': id_detail,
                    'status_pemesanan': this.value
                },
                url: "{{ route('admin.pemesanan.store') }}",
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    var oTable = $('#example1').dataTable();
                    oTable.fnDraw(false);
                    iziToast.success({
                        title: 'Berhasil memperbarui status pemesanan',
                        position: 'bottomRight'
                    });
                    var nomor_pemesanan = $('#no_pemesanan_view').html()
                    var nama = $('#nama_lengkap_view').html()
                    var no_telpon = $('#no_hp_view').html()
                    var no_telp_wa = no_telpon.replace("0", "62")
                    if (data.status_pemesanan == 'proses') {
                        var text_wa = "Halo " + nama + ".\nNomor Pemesanan : " + nomor_pemesanan +
                            "\nPemesanan anda telah kami konfirmasi dan kami akan segera mengirimkan tim untuk melakukan pemasangan.\n\nSalam Hangat, Admin Byfast Network"
                        window.open('https://wa.me/' + no_telp_wa + '?text=' + encodeURI(text_wa),
                            '_blank');
                            console.log("open wa");
                    } else if (data.status_pemesanan == 'done') {
                        var text_wa = "Halo " + nama + ".\nNomor Pemesanan : " + nomor_pemesanan +
                            "\nPemesanan anda telah terpasang silakan nikmati layanan dari kami :).\n\nSalam Hangat, Admin Byfast Network"
                        window.open('https://wa.me/' + no_telp_wa + '?text=' + encodeURI(text_wa),
                            '_blank');
                            console.log("open wa");
                    }
                },
                error: function(data) {
                    iziToast.error({
                        title: 'Gagal memperbarui status pemesanan',
                        position: 'bottomRight'
                    });
                }
            });
        })

        // data edit
        $(document).on('click', '.view', function() {
            var data_id = $(this).attr('id');
            id_detail = data_id
            $.get('pemesanan/' + data_id + '/edit?id=' + data_id, function(data) {
                $('#modal-judul').html("Detail Pemesanan");
                $('#tombol-simpan').val("edit-post");
                $('#view-more').modal('show');
                //set value                
                $('#id').val(data.id);
                $('#no_pemesanan_view').html(data.no_pemesanan);
                $('#nama_lengkap_view').html(data.nama_lengkap);
                $('#no_hp_view').html(data.no_hp);
                $('#alamat_view').html(data.alamat);
                $('#nomor_identitas_view').html(data.nomor_identitas);
                $('#nama_paket_view').html(data.pakets.name);
                if (data.topping_pakets) {
                    $('#nama_topping_view').html(data.topping_pakets.name);
                } else {
                    $('#topping').hide()
                }
                var rupiah = new Intl.NumberFormat("id-ID", {
                    style: "currency",
                    currency: "IDR",
                }).format(data.total_harga)
                $('#total_harga_view').html(rupiah);
                var date = new Date(data.created_at)
                $('#created_at_view').html(date);
                $('#status_pemesanan').val(data.status_pemesanan);
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
                    url: "{{ route('admin.pemesanan.index') }}",
                    type: 'GET',
                },
                columns: [{
                        data: "id",
                        name: "id"
                    },
                    {
                        data: "no_pemesanan",
                        name: "no_pemesanan"
                    },
                    {
                        data: "pakets.name",
                        name: "pakets.name"
                    },
                    {
                        data: "nama_lengkap",
                        name: "nama_lengkap"
                    },
                    {
                        data: "no_hp",
                        name: "no_hp"
                    },
                    {
                        data: "status_pemesanan",
                        name: "status_pemesanan"
                    },
                    {
                        data: "created_at",
                        name: "created_at",
                        render: (data) => {
                            return new Date(data).toISOString().slice(0, 19).replace('T', ' ')
                        }
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
