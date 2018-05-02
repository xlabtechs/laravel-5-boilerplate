<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>{{ __('labels.backend.articles.content.title') }}</th>
                <td>{{ $article->title }}</td>
            </tr>

            <tr>
                <th>{{ __('labels.backend.articles.content.description') }}</th>
                <td>{{ $article->description }}</td>
            </tr>
            <tr>
                <th>{{ __('labels.backend.articles.content.body') }}</th>
                <td>{{ $article->body }}</td>
            </tr>
        </table>
    </div>
</div><!--table-responsive-->