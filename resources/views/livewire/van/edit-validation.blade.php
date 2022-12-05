<div class="form-container van">
    <hr class="hr-1">

    <input class="textbox fn" value="{{ old('id', $van->id) }}" name="id" type="hidden" placeholder="{{ __('ID') }}" required/>

    <div class="model vhl">

        <label for="model">Model</label>
        <input class="textbox fn" wire:model.lazy="model" id="model" name="model" type="text"
            placeholder="{{ __('Model') }}" required>

        @error('model')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="assigned-driver vhl">

        <label for="assignedDriver">Assigned driver</label>

        <input class="textbox ln" wire:model.lazy="assignedDriver" id="assignedDriver" name="assignedDriver" type="text" placeholder="{{ __('Assigned Driver') }}" required>

        @error('assignedDriver')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>



    <div class="brand vhl">

        <label for="brand">Brand</label>
        <input class="textbox fn" wire:model.lazy="brand" id="brand" name="brand" type="text"
            placeholder="{{ __('Brand') }}" required>

        @error('brand')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="rental-price vhl">

        <label for="rental-price">Rental Price</label>
        <input class="textbox ln"  wire:model.lazy="rentalPrice" id="rental-price" name="rentalPrice" type="text"
            placeholder="{{ __('Rental Price') }}" required>

        @error('rentalPrice')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
    <div class="plate-no vhl">

        <label for="plate-no">Plate Number</label>
        <input class="textbox fn" wire:model.lazy="plateNo" id="plate-no" name="plateNo" type="text"
            placeholder="{{ __('Plate Number') }}" required>

        @error('plateNo')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="amenities dvr">

        <label for="amenities">Amenities</label>
        <input class="textbox ln"  wire:model.lazy="amenities" id="amenities" name="amenities" type="text"
            placeholder="{{ __('Amenities') }}" required>

        @error('amenities')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="desc">

        <label for="lname">Description</label>
        <textarea id="desc" name="desc"  wire:model.lazy="desc" class="textarea" placeholder="Description" rows="10" cols="50"></textarea>

        @error('desc')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="seat-capacity half">

        <label for="seat-capacity">Seating Capacity</label>
        <input class="textbox ln" wire:model.lazy="seatCapacity" id="seat-capacity" name="seatCapacity" type="text"
            placeholder="{{ __('Seat Capacity') }}" required>

        @error('lname')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="color other-half">

        <label for="color">Color</label>
        <input class="textbox ln" wire:model.lazy="color" id="color" name="color" type="text"
            placeholder="{{ __('Color') }}" required>

        @error('color')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="transmission vhl">

        <label for="transmission">Transmission Type</label>
        <input class="textbox ln" wire:model.lazy="transmissionType" id="transmission" name="transmissionType" type="text"
            placeholder="{{ __('Transmission Type') }}" required>

        @error('transmissionType')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>


    <div class="van-image vhl">

        <label for="van-image">Upload photo</label>
        <input type="file" multiple name="vanImages[]" wire:model.lazy="vanImages" id="van-image">
        
        @error('vanImages')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <hr class="hr-2">

    <div class="modal-button">
        <a wire:click="$emit('closeModal')" class="cancel">{{__('Cancel')}}</a>
        <button type="submit" class="add-driver">{{__('Save')}}</button>
    </div>

</div>
