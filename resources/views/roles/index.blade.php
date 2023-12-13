Mostrar datos roles
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Tipo_rol</th>
                <th scope="col">descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Roles as $Rol)
            <tr class="">
                <td scope="row">{{$Rol->id}}</td>
                <td>{{$Rol->Tipo_rol}}</td>
                <td>{{$Rol->descripcion}}</td>
                <td>
                <a href="{{ url('/roles/'.$Rol->id.'/edit')}}">Editar</a>
                <a href="{{ route('roles.show',$Rol->id)}}">ver</a>
                <form action="{{url('/roles/'.$Rol->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('Desea eliminar este registro')">eliminar</button>
                </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
