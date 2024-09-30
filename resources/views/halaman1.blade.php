<!--Komang Listya Omi Pradnyani 220711679-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="vewport" content="=width=device-width, initial-scale=1.0" />
    <title>PW4 - Halaman 1 - 220711679</title>

    <style>
        img{
            width: 150px;
        }
        legend{
            font-size: 30px;
        }
        td,
        th{
            padding: 5px;
            border: 1px solid;
        }
    </style>
</head>

<body>
    <ul style="list-style-type: square;">
        <li><a href="{{ url('halaman1') }}">Page 1</a></li>
        <li><a href="{{ url('halaman2') }}">Page 2</a></li>
    </ul>
    <fieldset>
        <legend>Profil</legend>
        <hr style="border : dotted" />
        <table style="width: auto; margin: 0 auto;">
            <tr>
                <th colspan="5">kontak orang Keren</th>
            </tr>

            <tr>
                <th>Photo</th>
                <th>Nama</th>
                <th>Telp</th>
                <th>Tanggal Lahir</th>
            </tr>

            <tr>
                <td>
                    <img src="{{asset('images/Picture1.jpg')}}" alt="ini gambar 1.1" />
                </td>
                <td>Komang Listya Omi Pradnyani - 220711679</td>
                <td>081547552744</td>
                <td>25-03-2004</td>
            </tr>
        </table>
    </fieldset>
</body>
</html>
