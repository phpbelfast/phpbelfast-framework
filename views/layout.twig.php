<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css"/>
</head>
<body>
<div class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">PHPBelfast Demo</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ urlFor('posts.index') }}">Articles</a></li>
                <li><a href="{{ urlFor('events.index') }}">Events</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">URLs <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ urlFor('url.index') }}">Create</a></li>
                        <li><a href="{{ urlFor('url.show') }}">Show</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<div class="container">
    <div class="row">
        <header>
            <h1>
                {% block header %}
                {% endblock %}
            </h1>
        </header>
    </div>
    <div class="row">
        {% block content %}
        {% endblock %}
    </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>
