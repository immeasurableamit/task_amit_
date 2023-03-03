<div class="container" style="margin-top: 5%">
    <div class="card">
        <div class="card-body">

            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{ route('categories') }}"><button type="button" class="btn btn-primary">Category</button></a>
            </div>

            <div class="row">
                <div class="col-7">
                    <div class="mt-2 text-center">
                        <h4>Create Product</h4>
                        <hr>

                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" wire:model="name" placeholder="Enter name">
                                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="name">Category</label>
                                    <select wire:model="category_id" class="form-control">
                                        <option value="" selected>Choose category</option>
                                        @foreach($categories as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <span class="text-danger error">{{ $message }}</span>@enderror

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="name">Price</label>
                                    <input type="number" class="form-control" wire:model="price"
                                        placeholder="Enter price">
                                    @error('price') <span class="text-danger error">{{ $message }}</span>@enderror

                                </div>
                            </div>
                        </div>
                        <button type="button" wire:click.prevent="store()" class="btn btn-primary btn-sm">Save</button>
                    </form>
                </div>
                <div class="col-5">
                    <h4 class="text-center">Products Listing</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Discounted Price</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($this->products as $product)
                            @php
                            $calculate_discount = calculate_discount($product->price, $product);
                            @endphp
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->price }} ₹</td>
                                <td>{{ $calculate_discount }} %</td>
                                <td>{{ discount_price($product->price, $calculate_discount) }} ₹</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>

</div>
