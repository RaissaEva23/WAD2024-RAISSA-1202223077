@extends('layouts.app')
@section('content')
    {{-- Dashboard for managing Dosen and Mahasiswa data --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <span class="material-symbols-rounded fs-6">
                    dashboard
                </span>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        {{-- Dosen Data Section --}}
                        <div class="col-md-6">
                            <h3 class="text-primary">Total Dosen</h3>
                            <p class="text-secondary">50</p>
                        </div>

                        {{-- Mahasiswa Data Section --}}
                        <div class="col-md-6">
                            <h3 class="text-success">Total Mahasiswa</h3>
                            <p class="text-secondary">200</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <canvas id="myChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
                datasets: [{
                    label: 'Total Mahasiswa Aktivitas',
                    data: [20, 50, 75, 100],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                },{
                    label: 'Aktivitas Dosen',
                    data: [10, 30, 50, 70],
                    backgroundColor: [
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
