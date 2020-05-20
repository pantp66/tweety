<h1 class="font-bold text-xl mb-4">Friends</h1>

<ul>
    @foreach (range(1,6) as $index)


    <li>
        <div class="flex item-center mt-2 mb-4 text-sm">
            <img src="https://i.pravatar.cc/40" class= "rounded-full mr-2" alt="">
            user
        </div>
    </li>
    @endforeach
</ul>
