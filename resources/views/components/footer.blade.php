<footer class="footer">
    <div class="footer-content">
        <x-logo />
        <nav class="footer-nav">
            @foreach (["support center","invoicing","contract","careers","blog","FAQs"] as $item)
            <a href="" class="nav-item">{{
                $item
                }}</a>
            @endforeach
        </nav>
    </div>
</footer>