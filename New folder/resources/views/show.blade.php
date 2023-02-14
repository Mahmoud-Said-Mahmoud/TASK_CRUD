<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>name</th>
            <th>email</th>
            <th>edit</th>
        </thead>

        <tbody>

        <tr>
            <td>{{ $admin->name }}</td>
            <td>{{ $admin->email }}</td>
            <td>{{ $admin->salary }}</td>
            {{-- <td>{{ $admin->email }}</td> --}}
            <td>
                <form action="{{ route("admin.destroy",$admin->id) }}" method="POST">
                     @method("DELETE")
                     @csrf
                    <button>delete</button>

                </form>
                <form action="{{ route("admin.edit",$admin->id) }}" >
                    <button>update</button>
                </form>
                <form action="{{ route("admin.show",$admin->id) }}" >
                    <button>show</button>
                </form>
            </td>
        </tr>


        </tbody>

         </table>
</body>
</html>
