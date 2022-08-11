<div>
   <form wire:submit.prevent="formSubmit">

    <div class="mb-3">
      <label for="" class="form-label">Date</label>
      <input type="date" name="" id="" class="form-control" placeholder="" wire:model="date" >

      @error('date')

      <div class="alert alert-danger" role="alert">
        <strong>{{ $message }}</strong>
      </div>
      @enderror

    </div>


        <div class="mb-3">
          <label for="" class="form-label">Supplier</label>
          <select class="form-control" name="" id="" wire:model="selected_supplier_id">
            <option value="">Select</option>

            @foreach ($suppliers as $item)

            <option value="{{ $item->id }}">{{ $item->name }}</option>

            @endforeach
          </select>

          @error('selected_supplier_id')

          <div class="alert alert-danger" role="alert">
            <strong>{{ $message }}</strong>
          </div>
          @enderror
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Cost</label>
        <input type="number" name="" id="" class="form-control" placeholder="" wire:model="cost">

        @error('cost')

        <div class="alert alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </div>
        @enderror

      </div>

      <button type="submit" class="btn btn-primary">Submit</button>

   </form>
</div>
