{% extends 'layout.twig.php' %}

{% block header %}URL Shortener{% endblock %}

{% block content %}

    {% if url is defined and not null %}
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
            <strong>Great!</strong> <span id="alert-success">{{ url.short|e }}</span>
        </div>
    {% endif %}

    <form id="create-form" action="{{ urlFor('url.index') }}" method="post" role="form">

        <div class="form-group">
            <label class="sr-only" for="url">URL</label>
            <input type="url" class="form-control input-lg" name="url" id="url" placeholder="http://phpbelfast.com" required="required">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

{% endblock %}