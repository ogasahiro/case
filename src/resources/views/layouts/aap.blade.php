<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Atte</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/commons.css') }}" />
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
    <div class="header-utilities">
      <a class="header__logo" href="/">
        Atte
      </a>
      <nav>
         <ul class="header-nav">
         <div class="li">
           <li class="header-nav__item">
              <a class="header-nav__link" href="/">ホーム</a>
           </li>
           <li class="header-nav__item">
               <a class="header-nav__link" href="/attendance">日付一覧</a>
           </li>
           <li class="header-nav__item">
               <a class="header-nav__link" href="/login">ログアウト</a>
           </li>
         </div>
         </ul>
       </nav>
     </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
  <footer>
                <small class="text">Atte,inc</small>
        </footer>
</body>

</html>