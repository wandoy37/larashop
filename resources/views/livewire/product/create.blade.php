<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Create Product</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form wire:submit.prevent="store" method="POST" enctype="multipart/form-data">
        
                            <div class="form-group">
        
                                <div class="form-row">
                                    <div class="col">
                                      <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror()" placeholder="Title">
                                      @error('title')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                    </div>
        
                                    <div class="col">
                                        <input wire:model="price" type="text" class="form-control @error('price') is-invalid @enderror()" placeholder="Price">
                                        @error('price')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                            </div>
        
                            <div class="form-group">
        
                                <div class="form-row">
                                    <div class="col">
                                        <input wire:model="description" type="text" class="form-control @error('description') is-invalid @enderror()" placeholder="Description">
                                        @error('description')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                            </div>
        
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" wire:model="image" class="form-control-file" id="image">
                                            @error('image')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
        
                                            @if ($image)
                                                <img src="{{ $image->temporaryUrl() }}" alt="" height="200">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="btn-group" role="group" aria-label="Button Form">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button wire:click="$emit('formClose')" type="button" class="btn btn-dark">Close</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>