{% extends "layout.twig.php" %}
{% block header %}
    {{ post.title }}
{% endblock %}
{% block content %}
    <article class="row">
        <div class="image col-sm-3">
            <img class="img-responsive" src="{{ post.image }}" alt=""/>
        </div>
        <div class="col-sm-9">
            <p class="author">{{ post.author.name }}</p>
            <p class="date">{{ post.created_at.diffForHumans() }}</p>
            <p class="summary">{{ post.summary }}</p>
        </div>
    </article>
{% endblock %}
