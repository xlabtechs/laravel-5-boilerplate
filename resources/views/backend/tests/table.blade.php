<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.tests.table.name') }}</th>
                <th>{{ __('labels.backend.tests.table.create_at') }}</th>
                <th>{{ __('labels.backend.tests.table.updated_at') }}</th>
                <th>{{ __('labels.backend.tests.table.description') }}</th>
                <th>{{ __('labels.backend.tests.table.is_deleted') }}</th>
                <th>{{ __('labels.backend.tests.table.radius') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tests as $test)
        <tr>
            
                <td>{{  $test->name }}</td>  
                <td>{{  $test->create_at }}</td>  
                <td>{{  $test->updated_at }}</td>  
                <td>{{  $test->description }}</td>  
                <td>{{  $test->is_deleted }}</td>  
                <td>{{  $test->radius }}</td>  
                

               <td>{!! $test->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>