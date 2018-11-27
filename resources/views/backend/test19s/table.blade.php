<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.test19s.table.name') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($test19s as $test19)
        <tr>
             
                <td>{{  $test19->name }}</td>    
                

               <td>{!! $test19->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>