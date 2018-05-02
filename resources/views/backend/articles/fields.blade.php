<div class="row mt-4 mb-4">
    <div class="col">
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.articles.title'))->class('col-md-2 form-control-label')->for('title') }}

            <div class="col-md-10">
                {{ html()->text('title')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.backend.articles.title'))
                    ->attribute('maxlength', 191)
                    ->required()
                    ->autofocus() }}
            </div><!--col-->

        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.articles.description'))->class('col-md-2 form-control-label')->for('description') }}
            <div class="col-md-10">
                {{ html()->text('description')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.backend.articles.description'))
                    ->attribute('maxlength', 191)
                    ->required() }}
            </div><!--col-->

        </div><!--form-group-->

        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.articles.body'))->class('col-md-2 form-control-label')->for('body') }}
            <div class="col-md-10">
                {{ html()->text('body')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.backend.articles.body'))
                    ->attribute('maxlength', 191)
                    ->required() }}
            </div><!--col-->

        </div><!--form-group-->

    </div><!--col-->
</div><!--row-->