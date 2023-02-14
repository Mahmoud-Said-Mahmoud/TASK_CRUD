<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route("admin.store",$admin->id) }}" method="POST">
        @method("PUT")
        @csrf

          <label >name</label>
          <input value="{{ $admin->name }}" name="name" type="text" >



          <label >Email address</label>
          <input value="{{ $admin->email }}" name="email" type="email" >



            <label >salary</label>
            <input value="{{ $admin->salary }}" name="salarry" type="text" >




        <button type="submit" >update</button>
      </form>
</body>
</html>
