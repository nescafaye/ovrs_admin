<style>
    .sidebar {
        z-index: 2;
    }
</style>

<div class="modal">

    <div class="modal-title">Create Van</div>

    <form action="{{ route('van.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        @livewire('van.create-validation')

    </form>
    

</div>