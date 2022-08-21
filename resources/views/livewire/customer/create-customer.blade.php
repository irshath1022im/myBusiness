<div>
    <form wire:submit.prevent="formSubmit">

        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" placeholder="Customer Name" wire:model.lazy="customer">

            @error('customer')
             <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
             </div>


             @enderror

        </div>

        <div class="mb-3">
            <label for="" class="form-label">Contact Number</label>
            <input type="number" class="form-control" placeholder="Contact Number" wire:model.lazy="contact_number">
            @error('contact_number')
            <div class="alert alert-danger" role="alert">
               <strong>{{ $message }}</strong>
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
