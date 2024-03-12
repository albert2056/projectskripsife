<div>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user['name'] }} - {{ $user['role'] }} - {{ $user['phoneNumber'] }} - {{ $user['email'] }}</li>
        @endforeach
    </ul>
</div>
