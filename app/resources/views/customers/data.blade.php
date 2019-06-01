<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <th class="text-center">Nombre</th>
            <th class="text-center">Email</th>
            <th class="text-center">Telefono</th>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td class="text-center">{{$customer->fullname}}</td>
                    <td class="text-center">{{$customer->email}}</td>
                    <td class="text-center">{{$customer->phone}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>