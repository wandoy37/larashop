<div class="card">
    <div class="card-body">
        <div class="row d-flex justify-content-between">
            <div class="col-md-2">
                <div class="form-group">
                    <select wire:model="paginate" class="form-control">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-icon">
                        <input wire:model="search" type="text" class="form-control" placeholder="Search Product...">
                        <span class="input-icon-addon">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-border">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0 ?>
                @foreach ($products as $p)
                <?php $no++ ?>
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $p->title }}</td>
                    <td>Rp {{ number_format($p->price,0,",",".") }}</td>
                    <td>
                        <button class="btn btn-sm btn-warning">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <nav aria-label="Pagination">
            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        </nav>
    </div>
</div>