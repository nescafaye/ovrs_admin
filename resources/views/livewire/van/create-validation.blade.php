<div class="form-container van">
    <hr class="hr-1">

    <div class="model vhl">

        <label for="model">Model</label>
        <input class="textbox fn" id="model" name="model" type="text"
            placeholder="{{ __('Model') }}" required>

        @error('model')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="assigned-driver vhl">

        <label for="assignedDriver">Assigned driver</label>
        <input class="textbox ln" id="assignedDriver" name="assignedDriver" type="text"
            placeholder="{{ __('Assigned Driver') }}" required>

        @error('assignedDriver')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>


    <div class="brand vhl">

        <label for="brand">Brand</label>
        <input class="textbox fn" id="brand" name="brand" type="text"
            placeholder="{{ __('Brand') }}" required>

        @error('brand')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="rental-price vhl">

        <label for="rental-price">Rental Price</label>
        <input class="textbox ln" id="rental-price" name="rentalPrice" type="text"
            placeholder="{{ __('Rental Price') }}" required>

        @error('rentalPrice')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
    <div class="plate-no vhl">

        <label for="plate-no">Plate Number</label>
        <input class="textbox fn" id="plate-no" name="plateNo" type="text"
            placeholder="{{ __('Plate Number') }}" required>

        @error('plateNo')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="amenities dvr">

        <label for="amenities">Amenities</label>
        <input class="textbox ln" id="amenities" name="amenities" type="text"
            placeholder="{{ __('Amenities') }}" required>

        @error('amenities')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="desc">

        <label for="lname">Description</label>
        <textarea id="desc" name="desc" class="textarea" placeholder="Description" rows="10" cols="50"></textarea>

        @error('desc')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="seat-capacity half">

        <label for="seat-capacity">Seating Capacity</label>
        <input class="textbox ln" id="seat-capacity" name="seatCapacity" type="text"
            placeholder="{{ __('Seat Capacity') }}" required>

        @error('lname')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="color other-half">

        <label for="color">Color</label>
        <input class="textbox ln" id="color" name="color" type="text"
            placeholder="{{ __('Color') }}" required>

        @error('color')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="transmission vhl">

        <label for="transmission">Transmission Type</label>
        <input class="textbox ln" id="transmission" name="transmissionType" type="text"
            placeholder="{{ __('Transmission Type') }}" required>

        @error('transmissionType')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>


    <div class="van-image vhl">

        <label for="van-image">Upload photo</label>
        <input type="file" multiple class="textbox" name="vanImg" id="van-image" src="" alt="">

        @error('vanImg')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <hr class="hr-2">

    <div class="modal-button">
        <button wire:click="$emit('closeModal')" class="cancel">{{__('Cancel')}}</button>
        <button type="submit" class="add-driver">{{__('Add')}}</button>
    </div>

</div>
