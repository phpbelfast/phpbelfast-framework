{% extends 'layout.twig.php' %}

{% block header %}Short URLs{% endblock %}

{% block content %}

    <table class="table table-striped">

        <thead>
            <tr>
                <th>URL</th>
                <th>Short URL</th>
            </tr>
        </thead>

        {% if urls is defined and not empty %}

        <tbody>

            {% for url in urls %}

                <tr>
                    <td>{{ url.url|e }}</td>
                    <td><a href="{{ url.url|e }}" onclick="window.open(this.href); return false;">{{ url.short|e }}</a></td>
                </tr>

            {% endfor %}

        </tbody>

        {% endif %}

    </table>

{% endblock %}