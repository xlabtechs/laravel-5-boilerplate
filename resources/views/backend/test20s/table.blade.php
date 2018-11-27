<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.test20s.table.name') }}</th>
                <th>{{ __('labels.backend.test20s.table.status') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($test20s as $test20)
        <tr>
             
                <td>{{  $test20->name }}</td>  
                @php   $status_arr=[ 'active'=>'Active',  'inactive'=>'InActive', ];@endphp
                <td>{{ $status_arr [$test20->status ]}}</td>  
                

               <td>{!! $test20->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>