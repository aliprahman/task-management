<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }
        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }
        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }
        .menu {
            padding: .4rem 2rem;
        }
        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }
        header li {
            display: inline-block;
        }
        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }
        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }
        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }
        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }
        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }
        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }
        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }
        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }
        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }
        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
        section h1 {
            margin-bottom: 2.5rem;
        }
        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }
        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }
        section code {
            display: block;
        }
        section a {
            color: rgba(221, 72, 20, 1);
        }
        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }
        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }
        .further h2:first-of-type {
            padding-top: 0;
        }
        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }
        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }
        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }
        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }
            header .menu-toggle {
                padding: 0 1rem;
            }
            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }
            header .menu-toggle {
                display: block;
            }
            header .hidden {
                display: none;
            }
            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

    <div class="heroe">

        <h1>Daftar Tugas</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">
            Buat Tugas Baru
        </button>

    </div>

</header>

<!-- CONTENT -->

<section>

    <table id="datatable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tugas</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- data load here -->
        </tbody>
    </table>

</section>

    <!-- Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="form-create">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="createModalLabel">Form Tugas Baru</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Nama Tugas</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="alert alert-success" role="alert" style="display: none" id="alert-form-create">
                            Tugas Berhasil Disimpan
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="form-edit">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel">Form Update Tugas</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="form-control" id="id-tugas" name="id-tugas" required>
                        <div class="mb-3">
                            <label for="title-edit" class="form-label">Nama Tugas</label>
                            <input type="text" class="form-control" id="title-edit" name="title-edit" required>
                        </div>
                        <div class="mb-3">
                            <label for="status-edit" class="form-label">Status</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status-done" value="1">
                                <label class="form-check-label" for="status-done">Selesai</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="status-undone" value="0">
                                <label class="form-check-label" for="status-undone">Belum Selesai</label>
                            </div>
                        </div>
                        <div class="alert alert-success" role="alert" style="display: none" id="alert-form-edit">
                            Tugas Berhasil Diperbaharui
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="form-delete">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel">Konfirmasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="form-control" id="id-tugas-delete" name="id-tugas-delete" required>
                        <div class="mb-3">
                            <h4 class="modal-title fs-5">Apakah Anda Yakin Akan Menghapus Data Ini ?</h4>
                        </div>
                        <div class="alert alert-success" role="alert" style="display: none" id="alert-form-delete">
                            Tugas Berhasil Dihapus
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- SCRIPTS -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
    var table = $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "<?php echo base_url('data'); ?>",
            type: 'POST',
        },
        order: [[1, 'asc']],
        columnDefs: [
            {
                targets: 0,
                searchable: false,
                orderable: false,
            },
            {
                // The `data` parameter refers to the data for the cell (defined by the
                // `data` option, which defaults to the column being worked with, in
                // this case `data: 0`.
                render: function (data, type, row) {
                    return row["judul"];
                },
                targets: 1,
            },
            {
                // The `data` parameter refers to the data for the cell (defined by the
                // `data` option, which defaults to the column being worked with, in
                // this case `data: 0`.
                render: function (data, type, row) {
                    return row["status"] === "1" ? "Selesai" : "Belum Selesai";
                },
                targets: 2,
            },
            {
                // The `data` parameter refers to the data for the cell (defined by the
                // `data` option, which defaults to the column being worked with, in
                // this case `data: 0`.
                render: function (data, type, row) {
                    return `
                        <button type="button" class="btn btn-info btn-sm mr-1" onclick="editTask(${row['id']}, '${row['judul']}', ${row['status']})">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm ml-1" onclick="deleteTask(${row['id']})">Hapus</button>
                    `;
                },
                orderable: false,
                targets: 3,
            },
            {
                defaultContent: "-",
                targets: "_all"
            }
        ],
    });

    table
        .on('order.dt search.dt', function () {
            var i = 1;
            console.log('trigger');
            table.cells(null, 0, { search: 'applied', order: 'applied' }).every(function (cell) {
                console.log(cell);
                this.data(i++);
            });
        })
        .draw();

    $('#form-create').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('create'); ?>",
            data: {
                title: $('#title').val()
            },
            success: function(result){
                $('#alert-form-create').show();
                setTimeout(function () {
                    $("#createModal").modal("hide");
                    $('#alert-form-create').hide();
                    $('#title').val("");
                }, 2000);
            }
        })
    });


    function editTask(id, title, status) {
        $('#id-tugas').val(id);
        $('#title-edit').val(title);
        if (Number(status) === 1) {
            $('#status-done').prop('checked', true)
        } else {
            $('#status-undone').prop('checked', true)
        }
        $("#editModal").modal("show");
    }

    function deleteTask(id) {
        $('#id-tugas-delete').val(id);
        $("#deleteModal").modal("show");
    }

    $('#form-edit').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('update'); ?>/" + $('#id-tugas').val(),
            data: {
                title: $('#title-edit').val(),
                status: $('#status-done').is(':checked') ? 1 : 0,
            },
            success: function(result){
                $('#alert-form-edit').show();
                setTimeout(function () {
                    $("#editModal").modal("hide");
                    $('#alert-form-edit').hide();
                    $('#title-edit').val("");
                }, 2000);
                table.ajax.reload();
            }
        })
    });

    $('#form-delete').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('delete'); ?>/" + $('#id-tugas-delete').val(),
            success: function(result){
                $('#alert-form-delete').show();
                setTimeout(function () {
                    $("#deleteModal").modal("hide");
                    $('#alert-form-delete').hide();
                }, 2000);
                table.ajax.reload();
            }
        })
    });
</script>

<!-- -->

</body>
</html>
