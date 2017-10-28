<!DOCTYPE html>
<html>
<head>
    <title>User list</title>
</head>
<body>
    <h1>Edit user</h1>
    <hr>
    <form action="{{ URL::to('users/update')}}" method="POST">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="first_name" value="{{  $users->first_name  }}">
                </td>
            </tr>

            <tr>
                <td>E-mail</td>
                <td>
                    <input type="email" name="email_name" value="{{  $users->email_name  }}">
                </td>
            </tr>

            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password_name" value="{{  $users->password_name  }}">
                </td>
            </tr>

            <td>
                <input type="submit" value="Submit">
            </td>

        </table>
    </form>
</body>
</html>