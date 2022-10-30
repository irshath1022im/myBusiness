<div>
    <form wire:submit.prevent="formSubmit">


        @error('company_id')
            <div class="alert alert-danger" role="alert">
            <strong>{{ $message }}</strong>
            </div>
        @enderror

        @error('visa_id')
            <div class="alert alert-danger" role="alert">
            <strong>{{ $message }}</strong>
            </div>
        @enderror


        <div class="mb-3">
          <button class="btn btn-success" >
                  VISA ID
                  <span class="badge bg-primary">{{ $visa_id }}</span>
                  <span class="badge bg-secondary">{{ $company }}</span>
          </button>

          @error('visa_id')
              <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong> Some Word
              </div>
          @enderror

        </div>


        <div class="mb-3">
            <label for="" class="form-label">Date </label>
            <input type="date" name="" id="" class="form-control" placeholder="" aria-describedby="helpId" wire:model="date">

            @error('date')
                <div class="alert alert-danger" role="alert">
                  <strong>{{ $message }}</strong>
                </div>
            @enderror

          </div>

          <div class="mb-3">
            <label for="" class="form-label">Amount </label>
            <input type="number" name="" id="" class="form-control" placeholder="" aria-describedby="helpId" wire:model="amount">

            @error('amount')
                <div class="alert alert-danger" role="alert">
                  <strong>{{ $message }}</strong>
                </div>
            @enderror

          </div>

          <div class="mb-3">
            <label for="" class="form-label">Remark</label>
            <input type="texarea" class="form-control"
              wire:model="remark">

          </div>

          <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
