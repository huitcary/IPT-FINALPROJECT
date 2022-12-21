<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <select class="form-select" wire:model.lazy="shades">
                    <option value="all">All</option>
                    <option value="nude">Nude</option>
                    <option value="maroon">Maroon</option>
                    <option value="pink">Pink</option>
                    <option value="red">Red</option>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="search" wire:model.lazy="search">
            </div>
        </div>
    </div>
    <table class="table table-striped shadow border border-light">
        <thead class="bg-info">
            <tr>
                <th>ID No</th>
                <th>Brand Name</th>
                <th>Type</th>
                <th>Price</th>
                <th>Shades</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lipsticks as $lipstick)
                <tr>
                    <td>{{ $lipstick->id }}</td>
                    <td>{{ $lipstick->brand_name }}</td>
                    <td>{{ $lipstick->type }}</td>
                    <td>{{ $lipstick->price }}</td>
                    <td>{{ $lipstick->shades }}</td>
                    <td>
                        <a href="{{ url('edit', ['lipstick' => $lipstick->id]) }}" class="btn btn-primary" id="ic" title="Edit">Edit</a>
                        <a href="{{ url('delete', ['lipstick' => $lipstick->id]) }}" class="btn btn-danger" id="ic" title="Delete">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$lipsticks->links() }}
</div>



