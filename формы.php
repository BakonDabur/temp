
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="POST">
        <p>
            <label for='fio'>ФИО</label>
            <input type='text' id='fio' name='fio'>
        </p>
        <p>
            <label for='email'>Email</label>
            <input type='email' id='email' name='email'>
        </p>
        <p>
            <label for='password'>Password</label>
            <input type='password' id='password' name='password'> 
        </p>
        <p>
            <label for='datetime'>datetime</label>
            <input type='datetime-local' id='datetime' name='datetime'> 
        </p>
        <p>
            <label for='date'>date</label>
            <input type='date' id='date' name='date'> 
        </p>
        <p>
            <label for='color'>color</label>
            <input type='color' id='color' name='color'> 
        </p>
        <p>
            <input type='radio' id='m' name='m'>Муж.<input type='radio' id='m' name='m'>Жен.
        </p>
        <p>
            <input type='checkbox' id='rol' name='rol'>Согласен с правилами
        </p>
        <p>
            <select multiple>
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
        </p>
        <p>
                <textarea rows='10' cols='200'>

                </textarea>

        </p>
        <p>
            <button>Регистрация</button>
        </p>
    </form>
</body>
</html>