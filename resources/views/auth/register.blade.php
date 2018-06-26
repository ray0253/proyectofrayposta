@extends('layouts.app')

@section('content')
<div class="container">
  <div class="sub-container">
    <div class="titulo-seccion">
      <h2>Nuevo usuario</h2>
        <div class="modulo-form registro">
            <div class="formulario">
              <p>Complete con sus datos el siguiente formulario</p>


                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                        @csrf

                        <div style="margin-bottom: 15px;" class="form-group row">


                            <div class="col-md-6">
                                <input placeholder="Nombre" id="name" name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div style="margin-bottom: 15px;" class="form-group row">

                            <div class="col-md-6">
                                <input placeholder="Email" id="email" name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-md-6">
                                <input placeholder="Password" id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input  placeholder="Confirm Password" id="password-confirm" type="password" name="password_confirmation" class="form-control" required>
                            </div>
                        </div>

                        <label for="imagen">Imagen de perfil</label>
                        <input type="file" name="imagen" class="file custom-file-input ">

                        <button type="submit" name="submit" class="btn btn-primary">{{ __('Register') }}
                        </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
