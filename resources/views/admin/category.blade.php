@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-uppercase">All Categories</h4>
            {{-- Modal button --}}
            <button type="button" class="btn btn-primary mb-2 btn-sm float-right" data-toggle="modal"
                data-target="#exampleModalCenter">Add ccategory</button>
            {{-- Modal content --}}
            <div class="modal fade" id="exampleModalCenter" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create new a category</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>×</span>
                            </button>
                        </div>
                        <form action="/category/add" method="post">
                            @csrf
                            <div class="modal-body">
                                <div id="categoryMsg"></div>
                                <div class="form-group">
                                    <label for="category" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="category" name="category"
                                        value="{{ old('category') }}" placeholder="Eg: Watches" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-danger light"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" id="addCategory" class="btn btn-sm btn-primary">Save
                                    changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table id="" class="table-counter table table-striped" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>Roll No</th>
                            <th>Category Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td></td>
                            <td>{{ $category->name }}</td>
                            <td class="text-right">
                                <form action="{{ route('category.delete', $category->id) }}" method="post">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="ml-2 btn btn-link text-danger sweet-confirm-category-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
