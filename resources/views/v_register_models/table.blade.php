<div class="table-responsive">
    <table class="table" id="vRegisterModels-table">
        <thead>
        <tr>
            <th>Vens Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Shop Name</th>
        <th>Shop License</th>
        <th>Address</th>
        <th>City</th>
        <th>Pincode</th>
        <th>Mobile No</th>
        <th>Email</th>
        <th>Password</th>
        <th>C Password</th>
        <th>Reffered By</th>
        <th>No Of Refs</th>
        <th>Ref Level Id</th>
        <th>Role Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vRegisterModels as $vRegisterModel)
            <tr>
                <td>{{ $vRegisterModel->vens_id }}</td>
            <td>{{ $vRegisterModel->name }}</td>
            <td>{{ $vRegisterModel->gender }}</td>
            <td>{{ $vRegisterModel->shop_name }}</td>
            <td>{{ $vRegisterModel->shop_license }}</td>
            <td>{{ $vRegisterModel->address }}</td>
            <td>{{ $vRegisterModel->city }}</td>
            <td>{{ $vRegisterModel->pincode }}</td>
            <td>{{ $vRegisterModel->mobile_no }}</td>
            <td>{{ $vRegisterModel->email }}</td>
            <td>{{ $vRegisterModel->password }}</td>
            <td>{{ $vRegisterModel->c_password }}</td>
            <td>{{ $vRegisterModel->reffered_by }}</td>
            <td>{{ $vRegisterModel->no_of_refs }}</td>
            <td>{{ $vRegisterModel->ref_level_id }}</td>
            <td>{{ $vRegisterModel->role_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['vRegisterModels.destroy', $vRegisterModel->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('vRegisterModels.show', [$vRegisterModel->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('vRegisterModels.edit', [$vRegisterModel->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
