<div>
    <form wire:submit.prevent="formSubmit">

        <div class="mb-3">
          <label for="" class="form-label">Date</label>
          <input type="date"
            class="form-control" wire:model.lazy="date">

            @error('date')
                <div class="alert alert-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </div>

            @enderror
        </div>

           <div class="mb-3">
             <label for="" class="form-label">Customer</label>
             <select class="form-control" wire:model.lazy="selected_customer_id">
               <option value="0">Select Customer</option>
               @foreach ($customers as $item)
                <option value="{{ $item->id}}">{{$item->customer}}</option>
               @endforeach
             </select>

             @error('selected_customer_id')
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
             <textarea class="form-control" name="remark" id="" rows="3" wire:model.lazy="remark"></textarea>
           </div>

           <button type="submit" class="btn btn-primary">Submit</button>


    </form>
</div>
