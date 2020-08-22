    <div class="footer">
        <div class="footer-content">
            <div class="footer-content-left">
                <a class="p reg" href="{{route('home.index')}}">Home</a>
                <a class="p light" href="{{route('news.index')}}">News</a>
                <a class="p light" href="#">Contact</a>
                <a class="p light" href="#">Privacy policy</a>
            </div>
            <div class="footer-content-right">
                <form action="" method="post">
                    @csrf
                    <input class="p light" type="email" name="Emailaddress" placeholder="Emailaddress">
                    <input class="btn" type="submit" value="Sign up">
                </form>
            </div>
        </div>
    </div>
</div>
</html>
