
<div class="border border-blue-400 rounded-lg py-6 px-8 mb-6">
    <form action="">
        <textarea name="body" class="w-full" placeholder="whats up?"></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">

                <img src="{{ auth()->user()->avatar }}" class= "rounded-full mr-2" alt="">

                <button type="submit" class="bg-blue-400 rounded-lg shadow py-2 px-2 text-white">tweet</button>
        </footer>
    </form>
</div>
