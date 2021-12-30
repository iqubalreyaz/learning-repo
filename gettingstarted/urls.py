from django.urls import path, include
from django.conf.urls import url
from django.contrib import admin

admin.autodiscover()

import onlinecsccenter.views


urlpatterns = [
    path("", onlinecsccenter.views.index, name="index"),
    path("about/", onlinecsccenter.views.about, name="about"),
    path("coming/", onlinecsccenter.views.coming, name="coming"),
    path("contact/", onlinecsccenter.views.contact, name="contact"),
    path("thanks/", onlinecsccenter.views.thanks, name="thanks")
]