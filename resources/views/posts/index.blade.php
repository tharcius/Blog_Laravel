<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Blog da BrasilPAD sobre novidades dos nossos softwares, tecnologia e atualidades.">

        <title>Code.Education - Laravel Express - Blog</title>

        <!-- Faicons -->
        <link rel="shortcut icon" href="favicon/favicon.ico">
        <link rel="icon" sizes="16x16 32x32 64x64" href="favicon/favicon.ico">
        <link rel="icon" type="image/png" sizes="196x196" href="favicon/favicon-192.png">
        <link rel="icon" type="image/png" sizes="160x160" href="favicon/favicon-160.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96.png">
        <link rel="icon" type="image/png" sizes="64x64" href="favicon/favicon-64.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16.png">
        <link rel="apple-touch-icon" href="favicon/favicon-57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/favicon-114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/favicon-72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/favicon-144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/favicon-60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/favicon-120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/favicon-76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/favicon-152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/favicon-180.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="favicon/favicon-144.png">
        <meta name="msapplication-config" content="browserconfig.xml">


        <!-- Pure CSS -->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

        <!--[if lte IE 8]>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
        <![endif]-->

        <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <!--<![endif]-->

        <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/blog.css">
        <!--<![endif]-->

    </head>
    <body>

        <div id="layout" class="pure-g">
            <div class="sidebar pure-u-1 pure-u-md-1-4" style="background: rgba(75, 75, 130, 0.95) none repeat scroll 0% 0%;">
                <div class="logobg pure-u-md-1">
                    &nbsp;
                </div>
                <div class="header">
                    <h1 class="brand-title">BrasilPAD Blog</h1>
                    <h2 class="brand-tagline">A nossa comunidade precisa de você</h2>
                </div>
                <div class="tecnologia pure-u-md-1">
                    <h3 class="content-subhead">Code.Education - Laravel Express</h3>
                    <h5>PHP 5.6 - HTML 5 - CSS 3 - Pure CSS - YUI Library</h5>
                </div>
            </div>

            <div class="content pure-u-1 pure-u-md-3-4">
                <div>
                    <div class="posts">
                        <h1 class="content-subhead">Últimas publicações</h1>

                        @foreach ($posts as $post)
                        <?php $post = (object) $post;?>

                        <section class="post">
                            <header class="post-header">
                                <img class="post-avatar" alt="{{ $post->User['name'] }}" height="48" width="48" src="img/avatar/{{ $post->User['id'].'.png' }}">

                                <h2 class="post-title">{{ $post->title}}</h2>

                                <p class="post-meta">
                                    Por <a href="#" class="post-author">{{ $post->User['name'] }}</a>, criado em {{ $post->date }}
                                </p>
                            </header>

                            <div class="post-description">
                                <p>
                                    {!! $post->content !!}
                                </p>
                            </div>
                        </section>
                        @endforeach
                    </div>

                    <div class="footer">
                        <div class="pure-menu pure-menu-horizontal">
                            <h3 class="content-subhead">Links interessantes</h3>
                            <ul>
                                <li class="pure-menu-item"><a href="http://code.education/" class="pure-menu-link">Code.Education</a></li>
                                <li class="pure-menu-item"><a href="http://www.schoolofnet.com/" class="pure-menu-link">School of Net</a></li>
                                <li class="pure-menu-item"><a href="http://www.caelum.com.br/" class="pure-menu-link">Caelum</a></li>
                                <li class="pure-menu-item"><a href="http://www.casadocodigo.com.br/" class="pure-menu-link">Casa do Código</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
