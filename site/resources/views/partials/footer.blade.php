    <div class="footer">
        <div class="footer-content">
            <div class="footer-content-left">
                <a class="p reg" href="{{route('home.index')}}">{{__('Home')}}</a>
                <a class="p light" href="{{route('about.index')}}">{{__('About')}}</a>
                <a class="p light" href="{{route('news.index')}}">{{__('News')}}</a>
                <a class="p light" href="{{route('contact')}}">{{__('Contact')}}</a>
                <a class="p light" href="{{route('privacypolicy.index')}}">{{__('Privacy policy')}}</a>
            </div>
            <div class="footer-content-right">
                <form action="{{route('signup.save')}}" method="post">
                    @csrf
                    <input class="p light" type="email" name="emailaddress" placeholder="{{__('Emailaddress')}}">
                    <input class="btn" type="submit" value="{{__('Sign up')}}">
                </form>
            </div>
        </div>
    </div>
</div>
</html>
