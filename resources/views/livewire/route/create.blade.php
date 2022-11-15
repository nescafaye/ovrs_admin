<style>
    .sidebar {
        z-index: 2;
    }
</style>

<div class="modal">

    <div class="modal-title">Create Route</div>

    <form action="{{ route('route.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        @livewire('route.create-validation')

    </form>
    

</div>