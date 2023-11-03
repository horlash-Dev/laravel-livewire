<div class="py-12">
<div class="bg-white p-6  shadow-lg">
    <b>welcome - all users list..</b>
    <a href="" class="btn btn-primary btn-sm" wire:click.prevent="getAll" rel="noopener noreferrer">getUsers</a>

    <a href="{{route('store.user')}}" class="btn btn-primary btn-sm text-bold" wire:navigate rel="noopener noreferrer">Create User</a>
    </div>

    <div class="p-6">
    <table class="table table-reponsive">
    <thead>
    <th>#</th>
    <th>name</th>
    <th>email</th>
    <th>date</th>
    <th>address</th>
    <th>country</th>
    <th>gender</th>
    <th>phone</th>
    <th>status</th>
    <th>action</th>
    </thead>

    <tbody>
    @foreach($alls as $user)
        <tr>
            <td>{{$user->id }}</td>
            <td>{{$user->name }}</td>
            <td>{{$user->email }}</td>
            <td>{{$user->dob }}</td>
            <td>{{$user->address }}</td>
            <td>{{$user->country }}</td>
            <td>{{$user->gender }}</td>
            <td>{{$user->phone }}</td>
            <td>
                <span class="bg:gray-800 text-dark bold">{{$user->is_admin ? 'Admin' : 'User' }}</span>
            </td>
            <td><a href="{{route('edit.user', $user->id)}}" wire:navigate>edit</a></td>
        </tr>
        @endforeach 
    </tbody>

    </table>
</div>
</div>
