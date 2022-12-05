<div class="form-container route-form">

    <hr class="hr-1">

    <input class="textbox fn" value="{{ old('id', $route->id) }}" name="id" type="hidden" placeholder="{{ __('ID') }}" required/>

    <div class="first-name dvr">

        <label for="routeNo">Route Number</label>
        <input class="textbox fn" wire:model.lazy="routeNo" id="routeNo" name="routeNo" type="text" placeholder="{{ __('Route Number') }}" required>

        @error('routeNo')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="last-name dvr">

        <label for="routeTitle">Route Title</label>
        <input class="textbox ln" wire:model.lazy="routeTitle" id="routeTitle" name="routeTitle" type="text" placeholder="{{ __('Route Title') }}" required>
        
        @error('routeTitle')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="user-name dvr">

        <label for="origin">Origin</label>
        <input class="textbox" wire:model.lazy="origin" id="origin" name="origin" type="text" placeholder="{{ __('Origin') }}" required>
        @error('origin')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="e-mail dvr">

        <label for="destination">Destination</label>
        <input class="textbox" wire:model.lazy="destination" id="destination" name="destination" type="text" placeholder="{{ __('Destination') }}" required>
        @error('edestination')
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