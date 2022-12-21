<div>
        <div class="card border border-light">
            <div class="card-header" style="background-color: rgba(127, 169, 199, 0.527)">
                <h3 class="text-center mt-2">Edit Lipstick</h3>
            </div>
            <div class="card-body shadow">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="brand_name">
                    <label for="brand_name">Lipstick Name</label>
                    @error('brand_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="type">
                    <label for="type">Lipstick Type</label>
                    @error('type')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="price">
                    <label for="price">Price</label>
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <select name="shades" class="form-select" wire:model.defer="shades">
                        <option hidden="true">Select Shades</option>
                        <option selected disabled>Select Shades</option>
                        <option value="nude">Nude</option>
                        <option value="maroon">Maroon</option>
                        <option value="pink">Pink</option>
                        <option value="red">Red</option>
                    </select>
                    <label for="color">Shades</label>
                    @error('shades')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary" wire:click="editLipstick()">
                        Save Changes
                    </button>
                    <button class="btn btn-info mx-2" wire:click="back()">
                        back
                    </button>
                </div>
            </div>
        </div>
</div>