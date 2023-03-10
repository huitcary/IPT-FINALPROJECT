<div>
    <div class="whole-page">
    <div class="container mt-2">
        <h1 style="font-weight: 400; font-size:25px;"><b><i>Roles</i></b></h1>
        @include('livewire.modals.admin-modal')
        @if (session('message'))
            <div class="alert alert-success text-black text-center" id="messagee">{{ session('message') }}</div>
        @endif
        <div class='btn btn-success btn-sm float-end mb-2' data-toggle="modal" data-target="#modal-roles">Create New Role</div>
        <input type="search" class="form-control float-start mx-2 mb-3" style="width: 250px;" placeholder="Search" wire:model.lazy="search">
        <div class="card-body">
            <table class="table table-bordered shadow-lg text-center">
                <thead style="background-color: black; color:white;">
                    <tr>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a href="" class="btn btn-warning" id="ic" title="Edit" data-toggle="modal" data-target="#update-modal-roles" wire:click="editRoles({{ $role->id }})"><i class=" fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger" id="ic" title="Delete" data-toggle="modal" data-target="#delete-modal-roles" wire:click="delete({{ $role->id }})"><i class=" fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @if($roles->count() == 0)
                        <td colspan="2" class="text-center">
                            No roles found in this table.
                        </td>
                    @endif
                </tbody>
            </table>
        </div>
        <div>
            {{ $roles->links() }}
        </div>
    </div>
    </div>
    
</div>

 <style>


</style> 

