@extends ('backend.layouts.app')

@section ('title', __('labels.backend.test19s.management') . ' | ' . __('labels.backend.test19s.view'))

@section('breadcrumb-links')
@include('backend.test19s.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.test19s.management') }}
                        <small class="text-muted">{{ __('labels.backend.test19s.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.test19s.view')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                {{--       <strong>{{ __('labels.backend.test19s.content.created_at') }}:</strong> {{ $test19->updated_at->timezone(get_user_timezone()) }} ({{ $test19->created_at->diffForHumans() }}),--}}
                {{--       <strong>{{__('labels.backend.test19s.content.last_updated') }}:</strong> {{ $test19->created_at->timezone(get_user_timezone()) }} ({{$test19->updated_at->diffForHumans() }})--}}
                        @if ($test19->trashed())
                            <strong>{{ __('labels.backend.test19s.content.deleted_at') }}:</strong> $test19->deleted_at->timezone(get_user_timezone())  ($test19->deleted_at->diffForHumans() )
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection