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

        .btn {
          @apply bg-green-600 text-white rounded py-2 px-4
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="flex justify-between my-5">
            <h1 class="text-cyan-400">HOME</h1>
            <a href="/create" class="btn">Add New Post</a>
        </div>
        @if (session('success'))
            <h2 class="text-green-500">{{ session('success') }}</h2>
        @endif
        <div class="div">
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 border border-green-300 my-5">
                                <thead class="bg-green-600 text-white rounded py-2 px-4">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Id
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Name</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Description</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Image
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr class="odd:bg-white even:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                {{ $post->id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                {{ $post->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                {{ $post->description }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><img src="images/{{ $post->image }}" width="70px" alt="" srcset=""></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <a href="{{ route('edit', $post->id) }}" class="btn">Edit</a>
                                               <form method="post" action="{{route('delete', $post->id)}}" class="inline">
                                                @csrf
                                                @method('delete')
                                                <button class="bg-red-600 text-white rounded py-2 px-4" type="submit">Delete</button>
                                               </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$posts->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
