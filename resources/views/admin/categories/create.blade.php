<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex m-2 p-2">
            <a href="{{route('categories.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">
                Category
            </a>
        </div>
        <div class="m-2 p-2 bg-slate-100 rounded">
            <div class="space-y-8 divide-y divide-grey-200 w-1/2 mt-10">
                <form action="" enctype="multipart/form-data">
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <div class="mt-1">
                            <input type="text" id="name" wire:model.lazy="name" name="name" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border-gray-400">
                        </div>
                    </div>
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Image</label>
                        <div class="mt-1">
                            <input type="file" id="name" wire:model="newImage" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border-gray-400">
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <label for="name" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                            <textarea name="" id="body" cols="68" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border-gray-400 rounded-md py-2"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-admin-layout>
