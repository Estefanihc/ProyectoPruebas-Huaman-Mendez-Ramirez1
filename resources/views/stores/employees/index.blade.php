@extends('layouts.layout')

@section('title', 'Lista de Empleados')

@section('content')
    <div class="background-image d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <div class="logo-container mb-4">
                <img src="https://mlkenzoihcoe.i.optimole.com/w:auto/h:auto/q:mauto/f:best/https://silicon.pe/wp-content/uploads/2023/01/Logotipo-en-Blanco2.png" alt="Logo Silicon" class="logo" />
            </div>

            <h1 class="mb-4 text-background">Lista de Empleados</h1>

            <div class="outer-card shadow-lg mx-auto">
                <div class="inner-card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0">Empleados Registrados</h2>
                        <a href="{{ route('employees.create') }}" class="btn btn-success mt-3">Agregar Empleado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .background-image {
            background-image: url('https://images.pexels.com/photos/7843999/pexels-photo-7843999.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            padding: 40px 0;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo {
            max-width: 150px; /* Cambia este valor para ajustar el tamaño */
            height: auto;
        }

        .text-background {
            background-color: rgba(245, 140, 20, 0.9);
            color: #fff;
            padding: 10px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
            display: inline-block;
            margin-bottom: 20px;
        }

        .outer-card {
            border-radius: 20px;
            background-color: rgba(15, 14, 58, 0.9);
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            margin-top: 20px;
        }

        .inner-card {
            border-radius: 15px;
            border: none;
        }

        .card-header {
            border-radius: 15px 15px 0 0;
        }

        .table {
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table th {
            background-color: #007bff;
            color: #fff;
        }

        .btn {
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s;
        }

        .btn-success {
            background-color: #ffaf38;
            color: #fff;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #fff;
        }

        .btn-warning:hover {
            background-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            .logo {
                max-width: 100px; /* Cambiar aquí para dispositivos móviles */
            }

            .table {
                font-size: 14px; /* Ajustar el tamaño de la tabla en pantallas pequeñas */
            }
        }
    </style>
@endsection
