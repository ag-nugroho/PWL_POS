@extends('layouts.template')

@section('content')

<div class="container-fluid">
    <!-- Row 1: Kartu Statistik -->
    <div class="row">
        <!-- Kartu Total Pengguna -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalUser }}</h3>
                    <p>Total Pengguna</p>
                </div>
                <div class="icon">
                    <i class="bi bi-people"></i>
                </div>
                <a href="{{ url('/user') }}" class="small-box-footer">
                    Lihat Detail <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
        </div>
        <!-- Kartu Total Barang -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $totalBarang }}</h3>
                    <p>Total Barang</p>
                </div>
                <div class="icon">
                    <i class="bi bi-box-seam"></i>
                </div>
                <a href="{{ url('/barang') }}" class="small-box-footer">
                    Lihat Detail <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
        </div>
        <!-- Kartu Penjualan -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-blue">
                <div class="inner">
                    <h3>{{ $totalPenjualan }}</h3>
                    <p>Total Penjualan</p>
                </div>
                <div class="icon">
                    <i class="bi bi-cart"></i>
                </div>
                <a href="{{ url('/penjualan') }}" class="small-box-footer">
                    Lihat Detail <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
        </div>
        <!-- Kartu Total Supplier -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $totalSupplier }}</h3>
                    <p>Total Supplier</p>
                </div>
                <div class="icon">
                    <i class="bi bi-truck"></i>
                </div>
                <a href="{{ url('/supplier') }}" class="small-box-footer">
                    Lihat Detail <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- Row 1: Kartu Statistik -->
        <div class="row">
            <!-- Kartu statistik bisa tetap seperti yang sebelumnya -->
        </div>

        <!-- Row 2: Chart Penjualan, Pengguna, Barang, Supplier dan Kalender -->
        <div class="row">
            <!-- Kolom Chart -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Statistik Penjualan, Pengguna, Barang, dan Supplier</h3>
                    </div>
                    <div class="card-body">
                        <!-- Pie Chart Canvas -->
                        <div class="chart">
                            <canvas id="pieChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kalender -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kalender</h3>
                    </div>
                    <div class="card-body">
                        <!-- Kalender -->
                        <div id="calender" style="width: 100%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<!-- Chart.js -->
<script>
    // Pie Chart
    var ctx = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctx, {
        type: 'pie', // Tipe chart Pie
        data: {
            labels: ['Penjualan', 'Pengguna', 'Barang', 'Supplier'], // Label data
            datasets: [{
                data: [{{ $totalPenjualan }}, {{ $totalUser }}, {{ $totalBarang }}, {{ $totalSupplier }}], // Data untuk chart
                backgroundColor: [
                    '#f56954',  // Merah
                    '#00a65a',  // Hijau
                    '#f39c12',  // Kuning
                    '#00c0ef',  // Biru
                ]
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
        }
    });

</script>
<script>
    $(function () {
        //Initialize the calendar
        $('#calendar').datetimepicker({
            format: 'L',
            inline: true
        });
    });
</script>
@endpush
