<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Mono:400,500&display=swap');

    .main-wrapper {
        width: 100%;
        font-family: sans-serif;
    }

    .center-align {
        text-align: center;
        margin: auto;
    }

    .table-access {
        text-align: center;
        margin: auto;
        border-spacing: 8px;
    }

    .mail {
        margin: auto;
        width: 650px;
        border-top: 6px solid #E96535;
        border-radius: 4px 4px 0px 0px;
        box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.15), 0px 1px 4px rgba(0, 0, 0, 0.1);
        padding-bottom: 48px;
        border-right: 2px solid rgba(0, 0, 0, 0.05);
        border-left: 2px solid rgba(0, 0, 0, 0.05);
        border-bottom: 2px solid rgba(0, 0, 0, 0.05);
        background-color: #FFFFFF;
    }

    .logo {
        margin: 20px;
        width: 50%;
    }

    .cia{
        width: 50%;
        margin: 20px;
    }

    .default-text {
        font-size: 18px;
        color: #818EA2;
        line-height: 27px;
        text-align: center;
        padding-top: 28px;
        padding-right: 42px;
        padding-left: 42px;
    }

    .title-text {
        font-size: 32px;
        color: #434956;
        text-align: center;
        padding-top: 52px;
        padding-right: 60px;
        padding-left: 60px;
    }

    .button {
        background: #E96535;
        border: 1px solid #DF440C;
        box-sizing: border-box;
        box-shadow: 0px 1px 3px rgba(134, 42, 8, 0.3);
        border-radius: 4px;

        display: inline-block;
        vertical-align: center;
        width: 404px;
        margin-top: 44px;

        font-size: 18px;
        line-height: 50px;
        color: #FFFFFF;
    }

    .divisor {
        margin-bottom: 17px;
    }

    .access-info {
        font-family: 'Roboto Mono', monospace;
        font-weight: 500;
        font-size: 22px;
        color: #434956;
    }

    .access-cell {
        border: 2px solid #E0E7F0;
        border-radius: 4px;
        width: 260px;
        height: 124px;
    }

    .access-title {
        font-size: 18px;
        color: #818EA2;
        line-height: 27px;
        text-align: center;
    }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boas vindas</title>
</head>
<body class="center-align">
<table class="main-wrapper center-align">
    <tr>
        <td>
            <table class="mail">
                <tr>
                    <td class="center-align">
                        <img src="{{ asset('images/cia7.png') }}" alt="" class="cia">
                    </td>
                </tr>
                <tr>
                    <td class="title-text">
            <span>
              Seja bem-vindo(a) <br> {{ $user->name }}
            </span>
                <tr>
                    <td class="center-align">
                        <a class="button" href="{{route('login')}}">Entrar no Site</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
