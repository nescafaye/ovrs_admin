<style>
    .sidebar {
        z-index: 2;
    }
</style>

<div class="modal">

    <div class="modal-title">Edit Van</div>

    <form action="{{ route('van.update')}}" method="get" enctype="multipart/form-data">
        @csrf

        @livewire('van.edit-validation', ['van' => $van])

    </form>
    

</div>