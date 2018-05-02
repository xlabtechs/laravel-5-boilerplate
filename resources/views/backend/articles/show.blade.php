@extends ('backend.layouts.app')

@section ('title', __('labels.backend.articles.management') . ' | ' . __('labels.backend.articles.view'))

@section('breadcrumb-links')
    @include('backend.articles.includes.breadcrumb-links')
@endsection


@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.articles.management') }}
                        <small class="text-muted">{{ __('labels.backend.articles.view') }}</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4 mb-4">
                <div class="col">
                    @include('backend.articles.show_fields')
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <small class="float-right text-muted">
                        <strong>{{ __('labels.backend.articles.content.created_at') }}:</strong> {{ $article->updated_at->timezone(get_user_timezone()) }} ({{ $article->created_at->diffForHumans() }}),
                        <strong>{{ __('labels.backend.articles.content.last_updated') }}:</strong> {{ $article->created_at->timezone(get_user_timezone()) }} ({{ $article->updated_at->diffForHumans() }})
                        @if ($article->trashed())
                            <strong>{{ __('labels.backend.articles.content.deleted_at') }}:</strong> {{ $article->deleted_at->timezone(get_user_timezone()) }} ({{ $article->deleted_at->diffForHumans() }})
                        @endif
                    </small>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
@endsection
