<footer class="w-full border-l-neutral-900 p-4 box-border">
    <div class="w-full max-w-7xl flex flex-wrap justify-center md:justify-between items-center gap-6 mr-auto ml-auto">
        <x-logo />
        <nav class="flex justify-center flex-wrap gap-6">
            @foreach (["support center","invoicing","contract","careers","blog","FAQs"] as $item)
            <a href="" class="capitalize text-black font-poppins text-2xl no-underline hover:text-primary">{{
                $item
                }}</a>
            @endforeach
        </nav>
    </div>
</footer>