<div class="row mt-4 mb-4">
    <div class="col">

       
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test20s.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
                {{ $test20->id }}
            </div><!--col-->
        </div><!--form-group-->
          
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test20s.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
                {{ $test20->name }}
            </div><!--col-->
        </div><!--form-group-->
          
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test20s.status'))->class('col-md-2 form-control-label')->for('status') }}
            <div class="col-md-10">
                {{ $test20->status }}
            </div><!--col-->
        </div><!--form-group-->
          
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test20s.zipcode'))->class('col-md-2 form-control-label')->for('zipcode') }}
            <div class="col-md-10">
                {{ $test20->zipcode }}
            </div><!--col-->
        </div><!--form-group-->
          

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->