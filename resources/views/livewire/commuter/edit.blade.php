<style>
    .sidebar {
        z-index: 2;
    }
</style>

<div class="modal">

    <div class="modal-title">Edit commuter</div>

    <form action="{{ route('commuter.edit')}}" method="get" enctype="multipart/form-data">
        @csrf

        @livewire('commuter.edit-validation',  ['commuter' => $commuter])

    </form>
    

</div>