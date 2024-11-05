<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
          .container {
            @apply px-10 mx-auto;
          }
        }
      </style>
</head>
<body>
    <div class="container">
        <div class="flex justify-between my-5">
            <h1 class="text-cyan-400">Create</h1>
            <a href="/" class="bg-green-600 text-white rounded py-2 px-4">Back to Home</a>
        </div>  
        <hr>
        
        <div>
            <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                @csrf
               <div class="flex flex-col gap-5">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ old('name') }}">
               @error('name')
               <p class="text-red-500">{{ $message }}</p>
               @enderror

                <label for="">Description</label>
                <input type="text" name="description" value="{{ old('description') }}">
                @error('description')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
                

                <label for="">Select Image</label>
                <input type="file" name="image" id=""> 
                @error('image')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
              

                <div>
                    <input type="submit" class="bg-green-500 text-white px-4 py-2">
                </div>
               </div>
            </form>
        </div>

        {{-- <hr> --}}
        {{-- <div>
            <form action="">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name:</label>
                    <input type="text" name="name" class="border border-gray-300 p-2 w-full" placeholder="Enter name">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description:</label>
                    <input type="text" name="description" class="border border-gray-300 p-2 w-full" placeholder="Enter description">
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700">Image:</label>
                    <input type="file" name="image" class="border border-gray-300 p-2 w-full">
                </div>
                <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4">Submit</button>
            </form>
        </div> --}}
    </div>
</body>
</html>