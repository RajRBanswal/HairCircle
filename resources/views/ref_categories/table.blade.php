<div class="table-responsive">
    <table class="table" id="refCategories-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>Reward</th>
        <th>Congratulatory Message</th>
        <th>Target No Refferrals</th>
        <th>Points Per Refferral</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($refCategories as $refCategory)
            <tr>
                <td>{{ $refCategory->name }}</td>
            <td>{{ $refCategory->description }}</td>
            <td>{{ $refCategory->reward }}</td>
            <td>{{ $refCategory->congratulatory_message }}</td>
            <td>{{ $refCategory->target_no_refferrals }}</td>
            <td>{{ $refCategory->points_per_refferral }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['refCategories.destroy', $refCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('refCategories.show', [$refCategory->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('refCategories.edit', [$refCategory->id]) }}"
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
