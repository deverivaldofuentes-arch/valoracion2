<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion | Taller Automotriz</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #16242b;
            --muted: #6b7b80;
            --accent: #0fa3b1;
            --accent-dark: #087f8b;
            --paper: #f7faf8;
            --line: #dce7e5;
        }

        * { box-sizing: border-box; }

        body {
            min-height: 100vh;
            margin: 0;
            color: var(--ink);
            background: #dbe7e5;
            font-family: 'DM Sans', sans-serif;
        }

        .login-page {
            position: relative;
            display: grid;
            min-height: 100vh;
            overflow: hidden;
            place-items: center;
            padding: 32px 20px;
            background: linear-gradient(135deg, #e4efec 0%, #a5bdbe 52%, #52747b 100%);
        }

        .login-page::before,
        .login-page::after {
            position: absolute;
            content: '';
            border: 1px solid rgba(255, 255, 255, .28);
            border-radius: 50%;
        }

        .login-page::before { width: 540px; height: 540px; right: -170px; top: -190px; }
        .login-page::after { width: 340px; height: 340px; left: -170px; bottom: -150px; }

        .login-shell {
            position: relative;
            z-index: 1;
            display: grid;
            width: min(100%, 930px);
            min-height: 560px;
            overflow: hidden;
            grid-template-columns: 43% 57%;
            border: 1px solid rgba(255, 255, 255, .5);
            border-radius: 18px;
            background: rgba(255, 255, 255, .88);
            box-shadow: 0 28px 70px rgba(30, 61, 67, .28);
        }

        .brand-panel {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
            padding: 46px 42px;
            color: #fff;
            background: linear-gradient(145deg, rgba(13, 84, 92, .94), rgba(30, 153, 157, .86));
        }

        .brand-panel::after {
            position: absolute;
            width: 300px;
            height: 300px;
            right: -130px;
            bottom: -100px;
            content: '';
            border: 1px solid rgba(255, 255, 255, .25);
            border-radius: 50%;
            box-shadow: 0 0 0 34px rgba(255, 255, 255, .06), 0 0 0 68px rgba(255, 255, 255, .05);
        }

        .brand-mark { position: relative; z-index: 1; font: 700 25px 'Space Grotesk', sans-serif; letter-spacing: .2px; }
        .brand-mark span { color: #91f0e7; }
        .brand-copy { position: relative; z-index: 1; }
        .brand-copy h1 { max-width: 310px; margin: 0; font: 700 clamp(30px, 4vw, 48px)/1.04 'Space Grotesk', sans-serif; letter-spacing: 0; }
        .brand-copy p { max-width: 275px; margin: 18px 0 0; color: rgba(255, 255, 255, .78); font-size: 15px; line-height: 1.6; }
        .brand-footer { position: relative; z-index: 1; color: rgba(255, 255, 255, .6); font-size: 12px; letter-spacing: 1.5px; text-transform: uppercase; }

        .form-panel { display: flex; flex-direction: column; justify-content: center; padding: 58px clamp(30px, 7vw, 82px); background: var(--paper); }
        .form-heading { margin-bottom: 34px; }
        .eyebrow { margin: 0 0 10px; color: var(--accent-dark); font-size: 12px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; }
        .form-heading h2 { margin: 0; font: 700 34px/1.1 'Space Grotesk', sans-serif; }
        .form-heading p { margin: 10px 0 0; color: var(--muted); font-size: 14px; }

        .auth-error { margin-bottom: 22px; padding: 12px 14px; border-left: 3px solid #d45c55; border-radius: 5px; color: #923b36; background: #fff0ee; font-size: 13px; }
        .auth-error ul { margin: 0; padding-left: 18px; text-align: left; }
        .field { position: relative; margin-bottom: 22px; }
        .field label { display: block; margin-bottom: 8px; color: #405157; font-size: 13px; font-weight: 600; text-align: left; }
        .field input { width: 100%; padding: 14px 15px; border: 1px solid var(--line); border-radius: 7px; outline: 0; color: var(--ink); background: #fff; font: inherit; font-size: 14px; transition: border-color .2s, box-shadow .2s; }
        .field input:focus { border-color: var(--accent); box-shadow: 0 0 0 4px rgba(15, 163, 177, .13); }
        .submit-button { width: 100%; margin-top: 5px; padding: 15px; border: 0; border-radius: 7px; color: #fff; background: var(--accent); font: 700 14px 'DM Sans', sans-serif; cursor: pointer; box-shadow: 0 8px 18px rgba(15, 163, 177, .22); transition: background .2s, transform .2s, box-shadow .2s; }
        .submit-button:hover { background: var(--accent-dark); box-shadow: 0 10px 22px rgba(15, 163, 177, .3); transform: translateY(-1px); }
        .form-note { margin: 22px 0 0; color: var(--muted); font-size: 12px; text-align: center; }

        @media (max-width: 700px) {
            .login-page { padding: 18px 14px; }
            .login-shell { display: block; min-height: 0; }
            .brand-panel { min-height: 220px; padding: 28px 26px; }
            .brand-copy { margin-top: 36px; }
            .brand-copy h1 { font-size: 32px; }
            .brand-copy p, .brand-footer { display: none; }
            .form-panel { padding: 36px 26px 40px; }
            .form-heading { margin-bottom: 28px; }
        }
    </style>
</head>
<body>
    <main class="login-page">
        <section class="login-shell" aria-labelledby="login-title">
            <div class="brand-panel">
                <div class="brand-mark">Taller<span>.</span>Auto</div>
                <div class="brand-copy">
                    <h1>Tu taller, siempre en marcha.</h1>
                    <p>Gestiona tus servicios automotrices con claridad, rapidez y confianza.</p>
                </div>
                <div class="brand-footer">Administracion de servicios</div>
            </div>

            <div class="form-panel">
                <div class="form-heading">
                    <p class="eyebrow">Acceso privado</p>
                    <h2 id="login-title">Iniciar sesion</h2>
                    <p>Ingresa tus datos para continuar.</p>
                </div>

                @if ($errors->any())
                    <div class="auth-error" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <div class="field">
                        <label for="email">Correo electronico</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" autocomplete="email" required autofocus>
                    </div>
                    <div class="field">
                        <label for="password">Contrasena</label>
                        <input type="password" id="password" name="password" autocomplete="current-password" required>
                    </div>
                    <button type="submit" class="submit-button">Iniciar sesion</button>
                </form>
                <p class="form-note">Panel exclusivo para personal autorizado</p>
            </div>
        </div>
        </section>
    </main>
</body>
</html>
