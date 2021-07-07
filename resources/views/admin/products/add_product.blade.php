@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-sm-12 offset-md-1">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card-header">
                    <h3>{{ isset($product->id) ? 'Edit product' : 'Add new product'}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ isset($product->id) ? route('product.update', $product->id) : route('product.store') }}"
                         method="POST" enctype="multipart/form-data" onsubmit="return checkforblank()">
                        @csrf
                        @isset($product->id)
                            @method('PATCH')
                        @endisset
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="">Choose file</label>
                                <a href="javascript:void(0);" class="btn btn-link float-right"
                                 data-toggle="modal" data-target="#imagePreview"
                                 style="
                                    position: absolute;
                                    right: 0;
                                    bottom: 38px;
                                    font-size: 11px;
                                    text-decoration: underline;
                                " onclick="alert('hi')"
                                >View uploaded image</a>
                                <div class="modal fade" id="imagePreview" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Image preview</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ isset($product->id) ? asset('uploads/'.$product->product_image) : '' }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="file" name="productImage" class="form-control form-control-sm " multiple  value="{{ isset($product->id) ? $product->product_image : old('productImage') }}">
                                @error('productImage')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="p_name">Product Name</label>
                                <input type="text" name="p_name" value="{{ isset($product->id) ? $product->product_name : old('p_name') }}" id="p_name" class="form-control form-control-sm @error('p_name') is-invalid @enderror"
                                 placeholder="Eg. Skittles" required>
                                @error('p_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category">Choose a category</label>
                            <fieldset>
                                <select name="categoryid[]" id="multiple" multiple class="@error('categoryid[]') is-invalid @enderror">
                                    @foreach ($categories as $category)
                                    <option
                                    @isset($product->id)
                                    @foreach ($product->categories as $productCategory)
                                        @if ($category->id == $productCategory->id)
                                            selected
                                        @endif
                                    @endforeach
                                    @endisset
                                    value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('categoryid[]')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </fieldset>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="p_price">Product Price</label>
                                <input type="text" name="p_price"
                                 value="{{ isset($product->id) ? preg_replace("/[^0-9.]/", "", $product->product_price) : old('p_price') }}"
                                 id="p_price" class="form-control form-control-sm  @error('p_price') is-invalid @enderror" placeholder="0.00"
                                    required>
                                    @error('p_price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="p_discounted_price">Product Discounted Price</label>
                                <input type="text" name="discounted_price"
                                value="{{ isset($product->id) ? preg_replace("/[^0-9.]/", "", $product->discounted_price) : old('discounted_price') }}" id="p_discounted_price" class="form-control form-control-sm  @error('discounted_price') is-invalid @enderror"
                                    placeholder="0.00" required>
                                   @error('discounted_price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="p_sold">Product Sold</label>
                                <input type="text" name="sold"
                                 value="{{ $product->product_sold ?? old('sold') }}"
                                 id="p_sold" class="form-control form-control-sm  @error('sold') is-invalid @enderror" placeholder="0.00" required>
                                    @error('sold')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="p_in_stock">Product in stock</label>
                                <input type="text" name="stock"
                                 value="{{ isset($product->id) ? $product->product_stock_conut : old('stock') }}" id="p_in_stock" class="form-control form-control-sm  @error('stock') is-invalid @enderror" placeholder="0" required>
                                    @error('stock')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="p_description">Product Description</label>
                            <textarea class="form-control form-control-sm  @error('p_description') is-invalid @enderror"
                             name="p_description" id="p_description" rows="3">
                            </textarea>
                            @error('p_description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                            <script>
                                window.onload = function() {
                                    document.getElementById("p_description").defaultValue = "{{ isset($product->id) ? trim($product->product_description) : old('p_description') }}";
                                }
                            </script>
                        </div>
                        <div>
                            <input class="btn btn-primary w-100 text-uppercase" type="submit" value="{{ isset($product->id) ? 'Update product' : 'Add product' }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // SlimSelect
    new SlimSelect({
        select: '#multiple'
    });

    // Validate
    function checkforblank() {

        var location = document.getElementById('multiple');
        var invalid = location.value == "";

        if (invalid) {
            alert('Please choose a category');
        }

        return !invalid;
    }
</script>

@stop
