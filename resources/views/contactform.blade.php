<div class='container'>

    @if($success)

        <div class="bg-green-300 text-green-600 px-3 py-1 my-5 font-semibold">
            {{$success}}
        </div>

    @endif



    <form wire:submit.prevent='sendmessage' class="p-3 sm:w-8/12 w-10/12">
    
        <label class="w-full my-1">Name*</label>
        <input type="text" wire:model.lazy='name' class="px-4 py-2 border-gray-300 border w-full mb-5 rounded">
        @error('name') <div class="px-4 py-2 bg-red-200 text-red-600 my-3">{{$message}}</div> @enderror

        <label class="w-full my-1">Email*</label>
        <input type="text" wire:model.lazy='email' class="px-4 py-2 border-gray-300 border w-full mb-5 rounded">
        @error('email') <div class="px-4 py-2 bg-red-200 text-red-600 my-3">{{$message}}</div> @enderror

        <label class="w-full my-1">Message*</label>
        <textarea wire:model.lazy='message' rows=5 cols=5 class="px-4 py-2 border-gray-300 border w-full mb-5 rounded"></textarea>
        @error('message') <div class="px-4 py-2 bg-red-200 text-red-600 my-3">{{$message}}</div> @enderror

        <button class="bg-gradient-to-r from-blue-400 via-blue-600 my-5 border
        to-indigo-500 text-white font-semibold rounded-full px-6 py-2 focus:outline-none transition-all duration-500 ease-in-out
        hover:from-white hover:to-white hover:border-blue-500 hover:text-blue-500">
        Send Message
        </button>
    </form>



</div>