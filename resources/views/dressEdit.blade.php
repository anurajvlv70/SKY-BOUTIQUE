<x-app-layout>
  <div class="card shadow-lg mt-5" style="border-radius: 10px;">
    <h5 class="card-header bg-primary text-white text-center" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
      ADD PRODUCT
    </h5>
    <div class="card-body">
      <div class="container">
        <div class="d-flex flex-row justify-content-center">

        <form method="POST" action="{{ route('product_store') }}" class="space-y-6">
        @csrf

            <!-- Form Fields -->
            <div class="mb-4">
              <label for="name" class="form-label fw-bold">Dress Name</label>
              <input type="text" name='name' value="{{$user->name}}" class="form-control form-control-lg rounded-pill" id="name" placeholder="Enter the dress name" required>
              <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
            </div>

            <div class="mb-4">
              <label for="rate" class="form-label fw-bold">Rate</label>
              <input type="text" name='rate' value="{{ $user->rate }}" class="form-control form-control-lg rounded-pill" id="rate" placeholder="Enter the rate" required>
            </div>
            <div class="mb-4">
    <label for="colors" class="form-label fw-bold">Colors</label>
    <input type="text" name='colors' value="{{$user->colors}}" class="form-control form-control-lg rounded-pill" id="colors" placeholder="Enter the color" required>
    </div>


            

            <div class="mb-4">
              <label for="size" class="form-label fw-bold">Size</label>
              <input type="text" name='size' value="{{$user->size}}" class="form-control form-control-lg rounded-pill" id="size" required>
            </div>

            <div class="mb-4">
        <label for="image" class="form-label fw-bold">Upload Image</label>
        <input type="file" name='image' class="form-control" id="image">
      </div>



            <div class="text-center">
              <input type="submit" class="btn btn-primary btn-lg px-5 rounded-pill" value="Submit">
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>