<table id="table" class="table table-bordered">
    <thead>
        <tr>
            <th class="text-center">Nombre</th>
            <th class="text-center">Email</th>
            <th class="text-center">Estatus</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $employe)
            <tr>
                <td class="text-center">
                    <a href="{{asset('/admin/usuarios/'.$employe->id)}}">{{$employe->name}}</a>
                </td>
                <td class="text-center">{{$employe->email}}</td>
                <td class="text-center">{{$employe->status}}</td>
                <td class="text-center">

                </td>
            </tr>
        @endforeach
    </tbody>
</table>