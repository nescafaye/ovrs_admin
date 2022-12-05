<style>
    .sidebar {
        z-index: 2;
    }
</style>

<div class="modal">

    <div class="modal-title">Edit Route</div>

    <form action="{{ route('route.update')}}" method="get" enctype="multipart/form-data">
        @csrf

        @livewire('route.edit-validation', ['route' => $route])

    </form>
    

</div>