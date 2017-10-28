<!DOCTYPE html>
<html>
<head>
    <title>User Insert list</title>
    <style type="text/css">
        html,body{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h1>New user</h1>
    <hr>
    <form action="{{ URL::to('users/save')}}" method="POST">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="first_name">
                </td>
            </tr>

            <tr>
                <td>E-mail</td>
                <td>
                    <input type="email" name="email_name">
                </td>
            </tr>

            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password_name">
                </td>
            </tr>

            <td>
                <input type="submit" value="Submit">
            </td>

        </table>
    </form>
</body>
</html>