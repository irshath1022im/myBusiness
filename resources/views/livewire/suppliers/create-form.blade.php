<div>

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

    <div class="card">
        <div class="card-header">
            NEW SUPPLIER
        </div>
        <div class="card-body">
            <form wire:submit.prevent="formSubmit">
                <div class="mb-3">
                    <label for="" class="form-label">NAME</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="NAME" wire:model="name">

                    @error('name')

                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror

                </div>

                <div class="mb-3">
                  <label for="" class="form-label">CONTACT NUMBER</label>
                  <input type="number" name="contact_number" id="" class="form-control" placeholder="" wire:model="contact_number">

                  @error('contact_number')

                  <div class="alert alert-danger" role="alert">
                      <strong>{{ $message }}</strong>
                  </div>
                  @enderror
                </div>

                <button type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>
        <div class="card-footer text-muted">
            Footer
        </div>
    </div>
</div>
