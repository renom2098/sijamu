    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Home</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Penetapan
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <!-- Kick start -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-text">
                            <section id="ajax-datatable">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header border-bottom">
                                                <h4 class="card-title">Penetapan</h4>
                                            </div>
                                            <div class="card-datatable">
                                                <table class="dataTables_wrapper dt-bootstrap5 no-footer" id="table">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Pengaturan</th>
                                                            <th>Jenis Pengaturan</th>
                                                            <th>Tanggal Ditetapkan</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <!--/ Kick start -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- Modal Tambah User -->
    <div class="modal fade text-start" id="addData" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true" data-bs-focus="false">
        <div class="modal-dialog modal-dialog-centered">
            <div id="formAdd"></div>
        </div>
    </div>

    <!-- Modal Edit User -->
    <div class="modal fade text-start" id="editData" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" data-bs-focus="false">
        <div class="modal-dialog modal-dialog-centered">
            <div id="formEdit"></div>
        </div>
    </div>

<script>
    $(document).ready(function(){
        $('#table').DataTable({
            "processing": false,
            "serverSide": false,
            "paging": true,
            "ajax": "<?= site_url('auditor/getData_penetapan'); ?>"
        })
    });
</script>

<script>
// function add()
// {
// 	$.post("<?= site_url("auditor/viewAddDataPenetapan"); ?>",{},function(data){
// 		$("#formAdd").html(data);
// 		$("#modal_edit").attr(
//             "url",
//             "<?= site_url("auditor/insert_dataPenetapan"); ?>"
//         );
// 		$("#defaultModalLabel").html("Tambah");
// 		$("#addModal").modal();
// 	}); 
// }

// function edit(id)
// {
// 	$.post("<?= site_url("auditor/viewEditDataPenetapan"); ?>",{id:id},function(data){
// 		$("#formEdit").html(data);
// 		$("#modal_edit").attr(
//             "url",
//             "<?= site_url("auditor/update_dataPenetapan"); ?>"
//         );
// 		$("#defaultModalLabel").html("Edit");
// 		$("#editModal").modal();
// 	});
// }

function download(id)
{
    var url = "<?= site_url("auditor/downloadPenetapan/"); ?>" + id;
	$.post(url);
}

// function hapus(id,akun)
// {
// 	swal({
// 		title: 'Hapus ?',
// 		type: 'warning',
//         icon: 'warning',
// 		buttons:{
// 			cancel: {
// 				visible: true,
// 				text : 'Batal',
// 				className: 'btn btn-danger'
// 			},
// 			confirm: {
// 				text : 'Ya',
// 				className : 'btn btn-success'
// 			}
// 		}
// 	}).then((willDelete) => {
// 		if (willDelete) {
// 			swal("data telah dihapus", {
// 				icon: "success",
// 				buttons : {
// 					confirm : {
// 						className: 'btn btn-success'
// 					}
// 				}
// 			});
			
// 			$.post("<?= site_url("auditor/delete_dataPenetapan"); ?>",{id:id},function(){
// 			reload_data();
// 			});
			
// 		}
// 	});
// };

// function reload_data ()
// {
// 	window.location.reload();	
// };
</script>