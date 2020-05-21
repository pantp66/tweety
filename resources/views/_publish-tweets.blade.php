
<div class="border border-blue-400 rounded-lg py-6 px-8 mb-6">
    <form action="/tweets" method="POST">
        @csrf

        <textarea

            name="body"
            class="w-full"
            placeholder="whats up?"
            >

        </textarea>

        <hr class="my-4">

        <footer class="flex justify-between">

                <img src="{{ auth()->user()->avatar }}"
                     class= "rounded-full mr-2" alt="avatar">

                <button type="submit"
                        class="bg-blue-400 rounded-lg shadow py-2 px-2 text-white">tweet</button>
        </footer>

        @error('body')

        <p class="text-red-500 text-sm mt-2">
            {{ $message }}
        </p>

        @enderror
    </form>
</div>
