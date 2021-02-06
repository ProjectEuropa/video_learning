<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>VideoLearning</title>
        @include('components.style-sheet')
    </head>
    <body>
      <div id="app">

        @include('components.header')
        
        @include('components.nav')

        <main>
          @yield('content')        
        </main>

      </div>

      <script src="/js/app.js"></script>
    </body>
</html>
