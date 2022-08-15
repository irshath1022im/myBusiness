<div>

    @component('components.session-msg')

    @endcomponent

 @error('purchase_id')

                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror


   <form wire:submit.prevent="formSubmit">

                <div class="mb-3">
                    <label for="" class="form-label">Date</label>
                    <input type="date" name="name" id="" class="form-control" placeholder="Date" wire:model="date">

                    @error('date')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror


                <div class="mb-3">
                    <label for="" class="form-label">Amount</label>
                    <input type="number" name="name" id="" class="form-control" placeholder="Amount" wire:model.lazy="amount">

                    @error('amount')

                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror

                </div>

                  <div class="mb-3">
                    <label for="" class="form-label">Remark</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Remark * Add any reference number/ details" wire:model.lazy="remark">

                    @error('remark')

                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror

                </div>

     <button type="submit" class="btn btn-primary" >Submit</button>


   </form>
</div>
