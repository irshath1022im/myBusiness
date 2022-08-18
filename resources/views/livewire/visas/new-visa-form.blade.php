<div>
    <form wire:submit.prevent = "formSubmit">

        <div class="mb-3">
          <label for="" class="form-label">VP NUMBER</label>
          <input type="text" class="form-control" wire:model.lazy="vpnumber">
          @error('vpnumber')
          <div class="alert alert-danger" role="alert">
              <strong>{{ $message }}</strong>
          </div>

      @enderror
        </div>



        <div class="mb-3">
          <label for="" class="form-label">Company</label>
          <select class="form-control" name="" id="" wire:model.lazy="selected_company_id">
            <option  value="">Select</option>
            @foreach ($companies as $company)
                <option  value="{{ $company->id }}">{{ $company->company }}</option>
            @endforeach

          </select>

          @error('selected_company_id')
            <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="" class="form-label">Country</label>
            <select class="form-control" name="" id="" wire:model.lazy="selected_country">
              <option  value="">Select</option>
              @foreach ($countries as $country)

                <option  value="{{ $country }}">{{ $country }}</option>
              @endforeach
            </select>

            @error('selected_country')
            <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Position</label>
            <select class="form-control" name="" id="" wire:model.lazy="selected_position">
              <option value="">Select</option>
              @foreach ($positions as $position)

              <option value="{{ $position->position }}">{{ $position->position }}</option>
              @endforeach
            </select>

            @error('selected_position')
            <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Cost</label>
            <input type="number" class="form-control" wire:model.lazy="cost">

            @error('cost')
            <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>


    </form>











































</div>
