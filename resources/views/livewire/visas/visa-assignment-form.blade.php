<div>


    @error('visa_id')
    <div class="alert alert-danger" role="alert">
        <strong>{{ $message }}</strong>
    </div>

@enderror
    <form wire:submit.prevent="formSubmit">

        <div class="mb-3">
          <label for="" class="form-label">Date</label>
          <input type="date"
            class="form-control" wire:model="date">

            @error('date')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>

            @enderror
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Visa Holder</label>
          <select class="form-control" wire:model="visa_holder_id">
            <option value="">Select</option>

            @foreach ($visaHolders as $item)

                <option class="text-uppercase" value="{{ $item->id }}" wire:key={{ $item->id }}>{{ $item->name }}</option>
            @endforeach
          </select>

          @empty($visaHolderPath)
              no image
              @else

              @if (is_null($visaHolderPath[0]['image']))
                  No Image to Show

                  @else

                  <img src="{{ Storage::url($visaHolderPath[0]['image']) }}"  class="img-fluid w-25 h-25"/>

              @endif


              {{-- {{ $visaHolderPath->image }} --}}

          @endempty

          @error('visa_holder_id')
          <div class="alert alert-danger" role="alert">
              <strong>{{ $message }}</strong>
          </div>

            @enderror

        </div>

        <div class="mb-3">
            <label for="" class="form-label">Visa Number</label>
            <input type="text"
              class="form-control" wire:model="visa_number">

              @error('visa_number')
                  <div class="alert alert-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </div>

              @enderror
          </div>


          <div class="mb-3">
            <label for="" class="form-label">Expiry Date</label>
            <input type="date"
              class="form-control" wire:model="expiry_date">

              @error('visa_number')
                  <div class="alert alert-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </div>

              @enderror
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Status</label>
            <select class="form-control" wire:model="status">
              <option value="">Select</option>

              @foreach ($statuses as $item)

                  <option class="text-uppercase" value="{{ $item->id }}" wire:key={{ $item->id }}>{{ $item->status }}</option>
              @endforeach
            </select>

            @error('status')
            <div class="alert alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </div>

              @enderror

          </div>


          <button type="submit" class="btn btn-primary">Submit</button>







    </form>



</div>
