

    @include('navbar.navbar')

    @foreach($userList as $user)
    {{--<div class="w3-card-2 w3-round w3-white w3-center" style="margin-top: 5%">--}}
        {{--<h4>Name: {{ $user->name }} Email: {{ $user->email }} Date of Birth:{{ $user->dob }} Joined: {{ $user->created_at->format('l j F Y') }}</h4>--}}
    {{--</div>--}}

    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1200px;margin-top:6%">
        <!-- The Grid -->
        <div class="w3-row">
            <!-- Left Column -->
            <div class="w3-col m3">

                <!-- Profile -->
                <div class="w3-card-2 w3-round w3-white">
                    <div class="w3-container">
                        <h4 class="w3-center"> {{ $user->name }} </h4>
                        <p class="w3-center"><img src="/uploads/avatars/{{ $user->avatar }}" class="w3-circle"
                                                  style="height:150px;width:150px" alt="Avatar"></p>
                        <hr>
                        <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Web Developer, Service2fruit.com </p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Nijmegen, Nederlands</p>
                        <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>
                            {{ $user->dob->format('j F Y') }} ({{ $user->dob->age }} years old)</p>
                        {{--                    {{ csrf_field() }}--}}
                    </div>
                </div>
            </div>

    <!-- Right Column -->
    <div class="w3-twothird w3-right">

        <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-globe fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>User posts</h2>
            @forelse($user->posts()->get() as $post)
                <div class="w3-container">
                    <p>{{ $post->content }}</p>
                    <hr>
                </div>
            @empty
                <p>User has no posts yet.</p>
            @endforelse
        </div>
    </div>
    </div>
    </div>
    @endforeach