<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="md:container md:mx-auto">
                <form action="{{ route('update_post', $post->id) }}" method="post">
                    @csrf
                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                        <div class="-mx-3 mb-6">
                            <div class="px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                                Title
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="" name="title">
                                {{-- <p class="text-red text-xs italic">Please fill out this field.</p> --}}
                            </div>
                        </div>
                        <div class="-mx-3 md:flex mb-6">
                            <div class="md:w-full px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                                Content
                                </label>
                                <textarea cols="30" rows="8" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="" name="body"></textarea>
                            </div>
                        </div>
                        <div class="-mx-3 md:flex mb-2">
                            <div class="md:w-1/3 px-3">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                                Published
                                </label>
                                <div class="flex-shrink w-full inline-block relative">
                                    <select class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded" name="published">
                                        <option>Choose ...</option>
                                        <option>Pending</option>
                                        <option>Published</option>
                                    </select>
                                    <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <button type="submit" class="px-5 py-2 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none">Update</button>
                        </div>
                    </div>
                </form>
                </div>   
            </div>
        </div>
    </div>
</x-app-layout>
