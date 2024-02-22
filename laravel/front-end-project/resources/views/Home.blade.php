<div>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user['name'] }} - {{ $user['roleId'] }} - {{ $user['phoneNumber'] }} - {{ $user['email'] }}</li>
        @endforeach
    </ul>
</div>
