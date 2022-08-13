<div>
   <form>


                <div class="mb-3">
                    <label for="" class="form-label">Amount</label>
                    <input type="number" name="name" id="" class="form-control" placeholder="Amount" wire:model="amount">

                    @error('amount')

                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror

                </div>

                  <div class="mb-3">
                    <label for="" class="form-label">Remark</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Remark * Add any reference number/ details" wire:model="remark">

                    @error('remark')

                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror

                </div>

     <button type="submit" class="btn btn-primary" >Submit</button>


   </form>
</div>
