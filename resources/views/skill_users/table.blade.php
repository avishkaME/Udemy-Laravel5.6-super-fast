<div class="table-responsive">
    <table class="table" id="skillUsers-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Skill Id</th>
        <th>Year Of Experience</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($skillUsers as $skillUser)
            <tr>
                <td>{!! $skillUser->user_id !!}</td>
            <td>{!! $skillUser->skill_id !!}</td>
            <td>{!! $skillUser->year_of_experience !!}</td>
                <td>
                    {!! Form::open(['route' => ['skillUsers.destroy', $skillUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('skillUsers.show', [$skillUser->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('skillUsers.edit', [$skillUser->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
