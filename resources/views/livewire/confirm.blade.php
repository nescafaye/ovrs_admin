<style>
    .sidebar {
        z-index: 2;
    }
</style>

<div class="modal confirm-container">
    
    <div class="modal-title confirm-title">
        <iconify-icon inline icon="bi:exclamation-circle-fill" width="20" height="20"></iconify-icon>
        <div class="modal-text delete">Confirm Deletion</div>
    </div>

    <div class="modal-body">

        <hr class="hr-1">
         
        <div class="modal-subtext">
            Do you really want to delete this record? This action cannot be undone.
        </div>

        <hr class="hr-2">

        <div class="confirm-button">
            <a wire:click="$emit('closeModal')" class="cancel">{{__('Cancel')}}</a>
            <a href="{{ route($name . '.destroy', ['id' => $record]) }}" class="add-driver">{{__('Delete')}}</a>
        </div>
    
    </div>

</div>
