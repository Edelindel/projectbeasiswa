@extends('layouts.app')

@section('content')
         <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Hasil</h1>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/hero-img.png" alt="" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Hasil</div>
                <h1 class="mb-4">Selamat datang di halaman  Beasiswa Tuntas</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <p class="text-center mb-4"> Berikut Nama Pendaftar Beasiswa Tuntas</p>
                   
                </div>
                <table class="data-table table stripe hover nowrap" id="hasil">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Semester</th>
                            <th scope="col">IPK</th>
                            <th scope="col">Jalur Beasiswa</th>
                            <th scope="col">Status Ajuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->email }}</td>
                                <td>{{ $d->nomor_hp }}</td>
                                <td>{{ $d->semester }}</td>
                                <td>{{ $d->ipk }}</td>
                                <td>{{ $d->jenis_beasiswa }}</td>
                                <td>{{ $d->status_ajuan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    
            </div>
        </div>
        <div class="container">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jenis Beasiswa</h5>

                        <!-- Pie Chart -->
                        <canvas id="pieChart" style="max-height: 400px;"></canvas>
                        <script>
                            var akademik = {{ $akademik }}
                            var nonakademik = {{ $nonakademik }}
                            console.log(akademik, nonakademik)
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#pieChart'), {
                                    type: 'pie',
                                    data: {
                                        labels: [
                                            'Akademik',
                                            'Nonakademik',
                                        ],
                                        datasets: [{
                                            label: 'jenis beasiswa',
                                            data: [
                                                akademik,
                                                nonakademik
                                            ],
                                            backgroundColor: [
                                                'rgb(255, 99, 132)',
                                                'rgb(54, 162, 235)',
                                                'rgb(255, 205, 86)'
                                            ],
                                            hoverOffset: 4
                                        }]
                                    }
                                });
                            });
                        </script>
                        <!-- End Pie CHart -->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Contact End -->

@endsection