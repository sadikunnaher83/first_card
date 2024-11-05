
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
            <h1 class="text-cyan-400">Edit - {{ $ourPost->name }}</h1>
            <a href="/" class="bg-green-600 text-white rounded py-2 px-4">Back to Home</a>
        </div>  
        <hr>
        
        <div>
            <form method="POST" action="{{ route('update', $ourPost->id) }}" enctype="multipart/form-data">
                @csrf
               <div class="flex flex-col gap-5">
                <label for="">Name</label>
                <input type="text" name="name" value="{{$ourPost->name}}">
               @error('name')
               <p class="text-red-500">{{ $message }}</p>
               @enderror

                <label for="">Description</label>
                <input type="text" name="description" value="{{ $ourPost->description }}">
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
    </div>
</body>
</html>