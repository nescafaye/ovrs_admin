<style>
    .sidebar {
        z-index: 2;
    }
</style>

<div class="modal">

    <div class="modal-title">Edit driver</div>

    <form action="{{ route('driver.edit')}}" method="post" enctype="multipart/form-data">
        @csrf

        @livewire('driver.edit-validation',  ['driver' => $driver])

    </form>
    

</div>