from django.shortcuts import render
from django.views.generic import View
from django.http import HttpResponse
import requests
from django.views.generic.base import TemplateView

from .models import Greeting

# Create your views here.
def index(request):
    return render(request, 'index.html')


def about(request):
    return render(request, 'about.html')

def coming(request):
    return render(request, 'coming_soon.html')

def contact(request):
    return render(request, 'contact.html')