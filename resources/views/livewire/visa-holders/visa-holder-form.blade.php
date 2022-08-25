<div>

    @component('components.session-msg')

    @endcomponent


    <form wire:submit.prevent = "formSubmit">

        <div class="mb-3">
          <label for="" class="form-label">NAME</label>
          <input type="text" class="form-control" wire:model.lazy="name">
          @error('name')
          <div class="alert alert-danger" role="alert">
              <strong>{{ $message }}</strong>
          </div>

      @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">PASSPORT NUMBER</label>
            <input type="text" class="form-control" wire:model.lazy="passport_number">
            @error('passport_number')
            <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </div>

            @enderror
          </div>


          <div class="mb-3">
            <label for="" class="form-label">IMAGE</label>
            <input type="file" class="form-control" wire:model="image">

            <div wire:loading wire:target="image">Uploading...</div>

            @error('image')
            <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </div>

            @enderror
          </div>

          <div class="mb-3">
            <label for="" class="form-label">EXPIRY DATE</label>
            <input type="date" class="form-control" wire:model.lazy="expiry_date">
            @error('expiry_date')
            <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </div>

            @enderror
          </div>


          <div class="mb-3">
            <label for="" class="form-label">CONTACT NUMBER</label>
            <input type="number" class="form-control" wire:model.lazy="contact_number">
            @error('contact_number')
            <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </div>

            @enderror
          </div>



        <div class="mb-3">
          <label for="" class="form-label">COUNTRY</label>
          <select class="form-control" wire:model.lazy="country">
            <option value="">Select</option>
            <option value="srilanka">Sri Lanka</option>
            <option value="india">India</option>
            <option value="pakistan">Pakistan</option>
            <option value="nepal">Nepal</option>
          </select>

          @error('country')
          <div class="alert alert-danger" role="alert">
              <strong>{{ $message }}</strong>
          </div>

          @enderror
        </div>


        <button type="submit" class="btn btn-primary" wire:loading.attr ="disabled">Submit</button>

    </form>



</div>
