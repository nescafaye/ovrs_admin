<style>
    .sidebar {
        z-index: 2;
    }
</style>

<div class="modal">

    <div class="modal-title">Create driver</div>

    <form action="{{ route('driver.store') }}" method="post">
        @csrf

        @livewire('validation')


    </form>

    

</div>