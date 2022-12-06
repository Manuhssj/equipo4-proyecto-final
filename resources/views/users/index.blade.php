@extends('layouts.app')
@section('contenido')

    @if (session('error'))
        <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
            <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
            - {{session('error')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (session('success'))
        <div class="alert alert-success alert-border-left alert-dismissible fade shadow show" role="alert">
            <i class="ri-checkbox-circle-line me-3 align-middle"></i> <strong>Éxito</strong>
            - {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if($errors->any())
        {!! implode('', $errors->all('
        <div class="alert alert-danger alert-border-left alert-dismissible fade shadow show mb-xl-2" role="alert">
            <i class="ri-error-warning-line me-3 align-middle"></i><strong>Error</strong>
            - :message
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ')) !!}
    @endif

<div class="row g-4">

    <div class="col-sm">
        <div div class="d-flex justify-content-sm-end">

            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                + Añadir un usuario
            </button>
            <div class="modal fade modal-lg" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalgridLabel">Formulario usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('users') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-xxl-6">
                                        <div>
                                            <label for="firstName" class="form-label">Nombre(s)</label>
                                            <input type="text" class="form-control" id="firstName" name="name" placeholder="Ingrese el nombre" maxlength="25" onkeypress="return soloLetras(event)" onpaste="return false" required>
                                            @error('name')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6">
                                        <div>
                                            <label for="lastname" class="form-label">Apellidos</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Ingrese los apellidos" maxlength="25" onkeypress="return soloLetras(event)" onpaste="return false" required>
                                            @error('lastname')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <!--end col-->
                                    <div class="col-xxl-6">
                                        <div>
                                            <label for="emailInput" class="form-label">Correo</label>
                                            <input type="email" class="form-control" id="emailInput" name="email" placeholder="Ingrese correo electrónico" maxlength="50" onkeypress="return soloLetrascorreo(event)" onpaste="return false" required>
                                            @error('email')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6">
                                        <div>
                                            <label for="passwordInput" class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" id="passwordInput" name="password" placeholder="************" minlength="8" maxlength="25" onpaste="return false" required>
                                            @error('password')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <!--end col-->

                                    <div class="col-xxl-6">
                                        <div>
                                            <label for="phone" class="form-label">Número celular</label>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Ingrese el numero celular" minlength="10" maxlength="10" onkeypress="return solonumeros(event)" onpaste="return false">
                                            @error('phone')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <!--end col-->
                                    <div class="col-xxl-6">
                                        <label for="formFile" class="form-label">Imagen Avatar</label>
                                        <input type="file" id="avatar" name="avatar" class="form-control" accept="image/*">
                                        @error('avatar')
                                        <small>*{{$message}}</small>
                                        @enderror
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
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header border-0">


    </div>
    <!-- end card header -->
    <div class="card-body">
        <!-- Tables Without Borders -->
        <table id="dataTables-10-row" name="dataTables-example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo Electrónico</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <div class="hstack gap-3 fs-15">
                            <a href="{{ url('users') }}/{{ $user->id }}" class="link-primary">
                                <button type="button" class="btn btn-primary">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </a>

                            <button data-bs-toggle="modal" href="#updateModalgrid" class="btn btn-success" onclick="edit(this)" data-user="{{$user}}">
                                <i class="ri-edit-box-line align-bottom"></i>
                            </button>
                            
                            <form class="form-eliminar" action="{{route('users.delete', $user->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                    <i class="ri-delete-bin-5-line"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- end tab content -->

    </div>
    <!-- end card body -->
</div>
<!-- end card -->

<!-- Modal Edit/Update -->
<div class="modal fade modal-lg" id="updateModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalgridLabel">Editar usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEdit" enctype="multipart/form-data" method="POST" action="">
                    @csrf
                    @method('put')

                    <input type="hidden" id="idEdit" name="id">

                    <div class="row g-3">
                        <div class="col-xxl-6">
                            <div>
                                <label for="nameEdit" class="form-label">Nombre(s)</label>
                                <input type="text" class="form-control" id="nameEdit" name="name" placeholder="Ingrese el nombre" maxlength="25" onkeypress="return soloLetras(event)" onpaste="return false" required>
                                @error('name')
                                <small>*{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="lastnameEdit" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="lastnameEdit" name="lastname" placeholder="Ingrese los apellidos" maxlength="25" onkeypress="return soloLetras(event)" onpaste="return false" required>
                                @error('lastname')
                                <small>*{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="emailEdit" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="emailEdit" name="email" placeholder="Ingrese correo electrónico" maxlength="50" onkeypress="return soloLetrascorreo(event)" onpaste="return false" required>
                                @error('email')
                                <small>*{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="passwordEdit" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="passwordEdit" name="password" placeholder="************" value="" onpaste="return false" maxlength="25">
                                @error('password')
                                <small>*{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="phoneEdit" class="form-label">Número celular</label>
                                <input type="text" class="form-control" id="phoneEdit" name="phone" placeholder="Ingrese el numero celular" minlength="10" maxlength="10" onkeypress="return solonumeros(event)" onpaste="return false" required>
                                @error('phone')
                                <small>*{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <!--end col-->
                        <div class="col-xxl-6">
                            <label for="avatarEdit" class="form-label">Imagen Avatar</label>
                            <input type="file" id="avatarEdit" name="avatar" class="form-control" accept="image/*">
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

@section('scripts')
    <script>
        function edit(target) {
            let user = JSON.parse(target.getAttribute('data-user'));
            document.getElementById("formEdit").action = "{{url('users')}}/"+user.id; 
            document.getElementById("idEdit").value = user.id;
            document.getElementById("nameEdit").value = user.name;
            document.getElementById("lastnameEdit").value = user.lastname;
            document.getElementById("emailEdit").value = user.email;
            document.getElementById("phoneEdit").value = user.phone;
        }
    </script>
@endsection

@endsection