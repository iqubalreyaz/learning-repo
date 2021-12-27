from django.shortcuts import render
from django.views.generic import View
from django.http import HttpResponse
import requests
from django.views.generic.base import TemplateView

from .models import Greeting

# Create your views here.
#def index(request):
    #r = requests.get('http://httpbin.org/status/418')
    #print(r.text)
    #return HttpResponse('<pre>' + r.text + '</pre>')
    #return HttpResponse('Online Solution CSC Center, Naya Bazar, Pandey Muhalla, Dhanbad, Jharkhand 826001')

class HomePageView(View):
    #def index(request, **kwargs):
        #return render(request, 'index.html', context=None)    
        temmplate_namme='index.html'


def db(request):

    greeting = Greeting()
    greeting.save()

    greetings = Greeting.objects.all()

    return render(request, "db.html", {"greetings": greetings})
