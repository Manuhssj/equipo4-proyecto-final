@extends('layouts.app')
@section('contenido')

<div class="card">

    @if (session('error'))
    <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
        <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
        - {{session('error')}} {{-- Los datos no se pudieron actualizar, datos incorrectos. --}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif (session('success'))
    <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
        <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong>
        - {{session('success')}} {{-- Actualización completada. --}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div>
        <div class="container-fluid">
            <div class="profile-foreground position-relative mx-n2 mt-n2">
                <div class="profile-wid-bg">
                    <img src="{{asset('images/fondo-profile.jpg')}}" alt="" class="profile-wid-img" />
                </div>
            </div>
            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                <div class="row g-4">
                    <div class="col-auto">
                        <div class="avatar-md">
                            <img @if( isset($users->avatar) && $users->avatar != 'avatar.jpg') src="{{ asset('storage/user/avatars') }}/{{ $users->avatar }}" @else src="https://ui-avatars.com/api/?name={{ $users->name }}" @endif alt="user-img" class="img-thumbnail rounded-circle" />
                        </div>
                    </div>
                    <!--end col -->
                    <div class="col">
                        <div class="p-2">
                            <h3 class="text-white mb-1">{{ $users->name.' '.$users->lastname }}</h3>
                            <p class="text-white-75">Administrador</p>
                        </div>
                    </div>
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <div class="d-flex justify-content-sm-center">
                                <div class="col-xxl-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Información Personal</h5>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Nombre(s): </th>
                                                            <td class="text-muted">{{ $users->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Apellidos: </th>
                                                            <td class="text-muted">{{ $users->lastname }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">No. Celular:</th>
                                                            <td class="text-muted">{{ $users->phone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Correo Electrónico: </th>
                                                            <td class="text-muted">{{ $users->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Fecha de creación: </th>
                                                            <td class="text-muted">{{ $users->created_at }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Ultima actualización: </th>
                                                            <td class="text-muted">{{ $users->updated_at }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                    <div class="d-flex justify-content-sm-center">
                                        <div class="flex-shrink-0">
                                            <!-- <a href="pages-profile-settings.html" data-bs-toggle="modal" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a> -->
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid"><i class="ri-edit-box-line align-bottom"></i> Editar Usuario</button>
                                            <div class="modal fade modal-lg" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalgridLabel">Editar usuario</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form enctype="multipart/form-data" method="POST" action="{{route('users.update', $users)}}">
                                                                @csrf
                                                                @method('put')

                                                                <input type="hidden" id="id" name="id" value="{{$users->id}}">

                                                                <div class="row g-3">
                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label for="name" class="form-label">Nombre(s)</label>
                                                                            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre" value="{{ $users->name }}" maxlength="25" onkeypress="return soloLetras(event)" required>
                                                                            @error('name')
                                                                            <small>*{{$message}}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label for="lastname" class="form-label">Apellidos</label>
                                                                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Ingrese los apellidos" value="{{ $users->lastname }}" maxlength="25" onkeypress="return soloLetras(event)" required>
                                                                            @error('lastname')
                                                                            <small>*{{$message}}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <!--end col-->
                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label for="emailInput" class="form-label">Correo</label>
                                                                            <input type="email" class="form-control" id="emailInput" name="email" placeholder="Ingrese correo electrónico" value="{{ $users->email }}" maxlength="50" onkeypress="return soloLetrascorreo(event)" required>
                                                                            @error('email')
                                                                            <small>*{{$message}}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label for="passwordInput" class="form-label">Contraseña</label>
                                                                            <input type="password" class="form-control" id="passwordInput" name="password" placeholder="************" value="" maxlength="25" required>
                                                                            @error('password')
                                                                            <small>*{{$message}}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <!--end col-->

                                                                    <div class="col-xxl-6">
                                                                        <div>
                                                                            <label for="phone" class="form-label">Número celular</label>
                                                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Ingrese el numero celular" value="{{ $users->phone }}" minlength="10" maxlength="10" onkeypress="return solonumeros(event)" required>
                                                                            @error('phone')
                                                                            <small>*{{$message}}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <!--end col-->
                                                                    <div class="col-xxl-6">
                                                                        <label for="formFile" class="form-label">Imagen Avatar</label>
                                                                        <input type="file" id="avatar" name="avatar" class="form-control" accept="image/*">
                                                                    </div>

                                                                    <div class="col-lg-12">
                                                                        <div class="hstack gap-2 justify-content-end">
                                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                                            <button type="submit" class="btn btn-success">Guardar</button>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                </div>
                                                                <!--end row-->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!-- end row -->
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end tab-content-->
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </div>
                        <!-- end card -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection