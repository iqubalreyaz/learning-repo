from django.urls import path, include
from django.conf.urls import url

from django.contrib import admin

admin.autodiscover()

import hello.views

# To add a new path, first import the app:
# import blog
#
# Then add the new path:
# path('blog/', blog.urls, name="blog")
#
# Learn more here: https://docs.djangoproject.com/en/2.1/topics/http/urls/

urlpatterns = [
    path("", hello.views.index, name="index"),
    #url(r'^$', hello.views.HomePageView.as_view())
    #path("db/", hello.views.db, name="db"),
    path("admin786/", admin.site.urls),
    path("about/", hello.views.about, name="about"),
    path("coming/", hello.views.coming, name="coming"),
    path("contact/", hello.views.contact, name="contact"),
    path("thanks/", hello.views.thanks, name="thanks"),
]
