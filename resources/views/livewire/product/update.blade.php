<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Edit Product</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form wire:submit.prevent="update" method="POST" enctype="multipart/form-data">
        
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
                                <label>Image</label>
                                <div class="custom-file @error('description') is-invalid @enderror()">
                                    <input wire:model="image" type="file" class="custom-file-input">
                                    <label class="custom-file-label text-muted" for="inputGroupFile01">Choose image</label>
                                </div>
                                @error('image')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <label class="mt-2 text-muted">Preview</label>
                                <div>
                                    @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" class="rounded" alt="" height="200">
                                    @else
                                        <img src="{{ $imageOld }}" class="rounded" alt="" height="200">
                                    @endif
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