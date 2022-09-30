<div class="form-container">

    <hr class="hr-1">

    <div class="first-name dvr">

        <label for="fname">First Name</label>
        <input class="textbox fn" value="{{ old('fname', $commuter->fname) }}" id="fname" name="fname" type="text" placeholder="{{ __('First Name') }}" required/>
        @error('fname')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="last-name dvr">

        <label for="lname">Last Name</label>
        <input class="textbox ln" value="{{ old('fname', $commuter->lname) }}" wire:model.lazy="lname" id="lname" name="lname" type="text" placeholder="{{ __('Last Name') }}" required>
        
        @error('lname')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="user-name dvr">

        <label for="uname">Username</label>
        <input class="textbox" value="{{ $commuter->username }}" wire:model.lazy="username" id="uname" name="username" type="text" placeholder="{{ __('Username') }}" required>
        @error('username')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="e-mail dvr">

        <label for="email">Email</label>
        <input class="textbox" value="{{ $commuter->email }}" wire:model.lazy="email" id="email" name="email" type="email" placeholder="{{ __('Email') }}" required>
        @error('email')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="gender dvr">

        <label for="gender">Gender</label>
        <input class="textbox" value="{{ $commuter->gender }}" wire:model.lazy="gender" id="gender" name="gender" type="text" placeholder="{{ __('Gender') }}">
        @error('gender')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="phone dvr">

        <label for="phone">Phone</label>
        <input class="textbox" value="{{ $commuter->phone }}" wire:model.lazy="phone" id="phone" name="phone" type="text" placeholder="{{ __('Phone') }}">
        @error('phone')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="password dvr">

        <label for="pass">Password</label>
        <input class="textbox"  wire:model.lazy="password" id="pass" name="password" type="password" placeholder="{{ __('Password') }}" required>
        @error('password')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="password-confirm dvr">

        <label for="password_confirmation">Confirm Password</label>
        <input class="textbox" wire:model.lazy="password_confirmation" id="password_confirmation" name="password_confirmation" type="password" placeholder="{{ __('Password') }}" required>
        @error('password_confirmation')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <hr class="hr-2">

    <div class="account-name dvr">

        <label for="accName">Account name</label>
        <input class="textbox" value="{{ $commuter->accName }}" wire:model.lazy="accName" id="accName" name="accName" type="text" placeholder="{{ __('Account Name') }}">
        @error('accName')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="account-number dvr">

        <label for="pass">Account number</label>
        <input class="textbox" value="{{ $commuter->accNumber }}" wire:model.lazy="accNumber" id="accNumber" name="accNumber" type="text" placeholder="{{ __('Account Number') }}">
        @error('accNumber')
        <span class="error-validation" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <hr class="hr-2">

    <div class="modal-button">
        <button wire:click="$emit('closeModal')" class="cancel">{{__('Cancel')}}</button>
        <button type="submit" class="add-driver">{{__('Save')}}</button>
    </div>

</div>