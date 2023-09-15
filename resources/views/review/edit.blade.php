@extends('layout.app')

@section('title','Edit Review')

@section('content')
<div class="row gy-3">
    <div class="col">
        <div class="card shadow-sm p-4">
            <form action="{{ route('processEditReview') }}" method="POST">
                @csrf

                <h1 class="mb-3 text-center">Edit Review</h1>

                <input type="hidden" id="id" name="id" value="{{ $review->id }}">

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="IDCustomer" id="IDCustomer"
                        name="IDCustomer" value="{{ $review->IDCustomer}}" required>
                    <label for="floatingInput">ID Customer</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="IDPembelian" id="IDPembelian"
                        name="IDPembelian" value="{{ $review->IDPembelian}}" required>
                    <label for="floatingInput">ID Pembelian</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="review" id="review" name="review"
                        value="{{ $review->review}}" required>
                    <label for="floatingInput">Review</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" placeholder="rating" id="rating" name="rating"
                        value="{{ $review->rating}}" required>
                    <label for="floatingInput">Rating</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection