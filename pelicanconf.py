#!/usr/bin/env python
# -*- coding: utf-8 -*- #

from __future__ import unicode_literals

# Required as some texts in this theme templates are localized with gettext
JINJA_EXTENSIONS = ['jinja2.ext.i18n']

# User info
AUTHOR = u'Your name'
AUTHOR_ABOUT = u'Your bio goes here. It shouldn\'t be super long but a good two sentences or two should suffice.'

SITENAME = u'Site Title'
SITEURL = ''

# Directories configuration
PATH = 'content'
ARTICLE_DIR = 'posts'

# Any extra files should be added here
STATIC_PATHS = [
    'extra',
    'images'
]

EXTRA_PATH_METADATA = {
    'extra/robots.txt': {'path': 'robots.txt'}
}

# By default we enable pretty highlighing in markdown:
MD_EXTENSIONS = ['codehilite(css_class=highlight)', 'extra', 'toc']

# Pagination
DEFAULT_PAGINATION = 3

# Categories
USE_FOLDER_AS_CATEGORY = False
DEFAULT_CATEGORY = 'Misc'

# Plugin path
PLUGIN_PATH = './pelican-plugins'
PLUGINS = ['related_posts', 'sitemap', 'i18n_subsites']

# Theme
THEME = "theme/pelican-hpstr"


# Social widgets
SOCIAL = (('github', 'https://github.com/yourname', 'GitHub'),
          ('twitter', 'http://twitter.com/yourname'),
          ('linkedin', 'http://fr.linkedin.com/in/yourname', 'LinkedIn'),)

# Sitemap configuration
SITEMAP = {
    'format': 'xml',
    'priorities': {
        'articles': 0.5,
        'indexes': 0.5,
        'pages': 0.5
    },
    'changefreqs': {
        'articles': 'weekly',
        'indexes': 'daily',
        'pages': 'monthly'
    }
}

# I18n
I18N_TEMPLATES_LANG = 'en'