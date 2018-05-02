<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th>{{ __('labels.backend.articles.table.title') }}</th>
            <th>{{ __('labels.backend.articles.table.description') }}</th>
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($articles as $article)
            <tr>
                <td>{{ ucfirst($article->title) }}</td>
                <td>{{ $article->description }}</td>
                <td>{!! $article->action_buttons !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
