<div>


    <form wire:submit.prevent ="formSubmit">

        <div class="mb-3">
          <label for="" class="form-label">Date</label>
          <input type="date" class="form-control" wire:model.lazy="date" >

          @error('date')
            <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </div>

          @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Amount</label>
            <input type="number" class="form-control" wire:model.lazy="amount">

            @error('amount')
              <div class="alert alert-danger" role="alert">
                  <strong>{{ $message }}</strong>
              </div>

            @enderror
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Remark</label>
            <textarea class="form-control" rows="3" wire:model.lazy="remark"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>

    </form>


















</div>
