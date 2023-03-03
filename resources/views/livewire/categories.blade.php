<div class="container" style="margin-top: 5%">
    <div class="card">
        <div class="card-body">

            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{ route('products') }}"><button type="button" class="btn btn-primary">Product</button></a>
            </div>

            <div class="row">
                <div class="col-7">
                    <div class="mt-2 text-center">
                        <h4>Create Category</h4>
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

                        <div>
                            <p>Discount</p>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Start" wire:model="start.0">
                                    @error('start.0') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" wire:model="end.0" placeholder="End">
                                    @error('end.0') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" wire:model="percentage.0"
                                        placeholder="Percentage">
                                    @error('percentage.0') <span class="text-danger error">{{ $message
                                        }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn text-white btn-info btn-sm"
                                    wire:click.prevent="add({{$i}})">Add</button>
                            </div>
                        </div>

                        @foreach($inputs as $key => $value)
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Start"
                                        wire:model="start.{{ $value }}">
                                    @error('start.'.$value) <span class="text-danger error">{{ $message
                                        }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" wire:model="end.{{ $value }}"
                                        placeholder="End">
                                    @error('end.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" wire:model="percentage.{{ $value }}"
                                        placeholder="Percentage">
                                    @error('percentage.'.$value) <span class="text-danger error">{{ $message
                                        }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-danger btn-sm"
                                    wire:click.prevent="remove({{$key}})">remove</button>
                            </div>
                        </div>
                        @endforeach

                        <button type="button" wire:click.prevent="store()" class="btn btn-primary btn-sm">Save</button>
                    </form>
                </div>
                <div class="col-5">
                    <h4 class="text-center">Category Listing</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Start</th>
                                <th scope="col">End</th>
                                <th scope="col">Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($this->category as $category)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $category->name }}</td>

                                <td>
                                    @foreach ($category->discount as $discount)
                                    {{ $discount->start }} </br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($category->discount as $discount)
                                    {{ $discount->end }} </br>
                                    @endforeach
                                </td>

                                <td>
                                    @foreach ($category->discount as $discount)
                                    {{ $discount->percentage }} % </br>
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>

</div>
