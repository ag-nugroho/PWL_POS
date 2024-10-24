@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <button onclick="modalAction('{{ url('/supplier/import') }}')" class="btn btn-info"><i class="bi bi-file-earmark-excel"></i>  Import XLSX</button>
                <a href="{{ url('/supplier/export_excel') }}" class="btn btn-primary"><i class="bi bi-file-earmark-excel"></i>  Export XLSX</a>
                <a href="{{ url('/supplier/export_pdf') }}" class="btn btn-warning"><i class="bi bi-file-earmark-pdf"></i>  Export PDF</a>
                <button onclick="modalAction('{{ url('/barang/create_ajax') }}')" class="btn btn-success"><i class="bi bi-truck-flatbed"></i>  Tambah Data</button>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success">{{ session('success')}}</div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger">{{ session('error')}}</div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Filter:</label>
                        <div class="col-3">
                            <select class="form-control" name="supplier_id" id="supplier_id" required>
                                <option value="">- Semua -</option>
                                @foreach ($supplier as $item)
                                <option value="{{ $item->supplier_id }}">{{ $item->supplier_nama }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Supplier</small>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped table-hover table-sm" id="table_supplier">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Alamat Supplier</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" data-width="75%" aria-hidden="true"></div>
@endsection

@push('css')
@endpush

@push('js')
    <script>
        function modalAction(url = ''){
            $('#myModal').load(url,function(){
                $('#myModal').modal('show');
            });
        }

            var dataSupplier;
            $(document).ready(function() {
                dataSupplier = $('#table_supplier').DataTable({
                    serverSide: true,
                    ajax: {
                        "url": "{{ url('supplier/list' )}}",
                        "dataType": "json",
                        "type": "POST",
                        "data": function(d) {
                            d.supplier_id = $('#supplier_id').val();
                        }
                    },
                    columns: [
                        {
                            data: "DT_RowIndex",
                            className: "text-center",
                            orderable: false,
                            searchable: false
                        }, {
                            data: "supplier_kode",
                            className: "text-center",
                            orderable: true,
                            searchable: true
                        }, {
                            data: "supplier_nama",
                            className: "text-center",
                            orderable: true,
                            searchable: true
                        }, {
                            data: "supplier_alamat",
                            className: "text-center",
                            orderable: true,
                            searchable: true
                        }, {
                            data: "aksi",
                            className: "text-center",
                            orderable: false,
                            searchable: false
                        }
                    ]
                });

                $('#supplier_id').on('change', function() {
                    dataSupplier.ajax.reload();
                });
            });
    </script>
@endpush