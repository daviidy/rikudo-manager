<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rikudo Manager | @yield('title')</title>
  <base target="_self">
  <meta name="description" content="Example user profile form and information editing form for Bootstrap 4. This snippet has tabs to separate other profile info such as messages or notifications. Sidebar with profile image.">
  <meta name="google" value="notranslate">
  <link rel="shortcut icon" href="/images/cp_ico.png">
  <!--stylesheets / link tags loaded here-->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style type="text/css"></style>

  <link rel="stylesheet" type="text/css" href="chrome-extension://immhpnclomdloikkpcefncmfgjbkojmh/css/emoji.css">
</head>

<body>

@yield('content')

<script>
  // sandbox disable popups
  if (window.self !== window.top && window.name != "view1") {;
    window.alert = function() { /*disable alert*/ };
    window.confirm = function() { /*disable confirm*/ };
    window.prompt = function() { /*disable prompt*/ };
    window.open = function() { /*disable open*/ };
  }

  // prevent href=# click jump
  document.addEventListener("DOMContentLoaded", function() {
    var links = document.getElementsByTagName("A");
    for (var i = 0; i < links.length; i++) {
      if (links[i].href.indexOf('#') != -1) {
        links[i].addEventListener("click", function(e) {
          console.debug("prevent href=# click");
          if (this.hash) {
            if (this.hash == "#") {
              e.preventDefault();
              return false;
            } else {
              /*
              var el = document.getElementById(this.hash.replace(/#/, ""));
              if (el) {
                el.scrollIntoView(true);
              }
              */
            }
          }
          return false;
        })
      }
    }
  }, false);
</script>

<!--scripts loaded here-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>



<script>
</script>



</body>

</html>
