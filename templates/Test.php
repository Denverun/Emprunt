<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="Description" content="Test">
    <meta name="Keywords" content="ginfo, groupe, informatique, it, association">
    <meta name="Copyright" content="Projet">
    <meta name="Revisit-After" content="15 days">
    <title>{% block titre_page %}GInfo{% endblock %}</title>
    <link rel="icon" type="image/png" href="{{ asset('build/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('build/vendor.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/app.css') }}" />
    {% block page_css %}
    {% endblock %}
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
</head>

<body {% block additionnal_body_block %}{% endblock %} class="theme-indigo {% block additionnal_body_class %}{% endblock %}">




<script src="{{ asset('build/vendor.js') }}"></script>
<script src="{{ asset('build/app.js') }}"></script>
<script src="{{ asset('build/runtime.js') }}"></script>


{% block page_js %}
{% endblock %}
</body>

</html>