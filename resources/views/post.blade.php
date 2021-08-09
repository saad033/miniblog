<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>
    
    <div class="py-2">
        <div class="max-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <h1 class="p-5 font-bold text-white">Create Post</h1>
        <hr class="border-gray-600">
        <div class="p-6 bg-gray-700">
        <form class="w-full max-w-sm" method="POST">
        @csrf
        <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
        <label for="title" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Title</label>
        </div>
        <div class="md:w-2/3">
        <input type="text" class="border-2 border-gray-200 rounded w-full py-2 px-4" id="title" name="title">
        
        </div>
        
        </div>
        <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
        <label for="body" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">Body</label>
        </div>
        <div class="md:w-2/3">
        <textarea name="body" id="body" class="resize border rounded-md" style="width:255px;" cols="30" rows="10"></textarea>
        
        </div>
        </div>
        <div class="md:flex md:items-center">
        <div class="md:w-1/3">
        </div>
        <div class="md:w-2/3">
        <input type="submit" class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus-outline-none
        text-white font-bold py-2 px-4 rounded" value="POST">
        
        </div>
        </div>

        </form>
        @if (session()->has('status'))
        <div class="mt-5 shadow bg-purple-500 text-white font-bold py-2 px-4 rounded">
        {{session('status')}}
        </div>
        
        @endif
        </div>
        </div>
        </div>
    </div>
   
</x-app-layout>
