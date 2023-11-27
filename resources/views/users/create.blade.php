<!-- Extension de la plantilla -->
@extends('layouts.plantilla')

@section('title', 'Creación del perfil de Usuario')

@section('content')
    <h1>En esta página se creará el perfil de Usuario.</h1>
    <FORM METHOD="POST" ACTION="{{url('crear-usuario')}}">
        @csrf
        <P><B>Nombre</B>:
        <BR><INPUT NAME="name" TYPE="text" SIZE="52">
        <P><B>Apellido</B>:
        <BR><INPUT NAME="last_name" TYPE="text" SIZE="52">
        <P><B>email</B>:
        <BR><INPUT NAME="email" TYPE="text" SIZE="52">
        <P><B>Password</B>:
        <BR><INPUT NAME="pass" TYPE="password" SIZE="52">
        <BR>
        <INPUT TYPE=SUBMIT VALUE="Enviar Datos">
        <INPUT TYPE=RESET VALUE="Volver a comenzar">
    </FORM>
@endsection