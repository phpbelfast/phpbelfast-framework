{% extends "layout.twig.php" %}
{% block header %}
    {{ event.title }}
{% endblock %}
{% block content %}
    <article class="row">
        <div class="image col-sm-3">
            <img class="img-responsive" src="{{ event.image }}" alt=""/>
        </div>
        <div class="col-sm-9">
            <p class="author">{{ event.author.name }}</p>
            <p class="date">
                {{ event.start_time.format('jS M Y') }}
                <br/>
                {{ event.start_time.format('h:ia') }}
            </p>
            <p class="summary">{{ event.summary }}</p>
        </div>
    </article>
{% endblock %}
