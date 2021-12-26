from django.shortcuts import render
from django.http import HttpResponse
import requests

from .models import Greeting

# Create your views here.
def index(request):
    #r = requests.get('http://httpbin.org/status/418')
    #print(r.text)
    #return HttpResponse('<pre>' + r.text + '</pre>')
    #return HttpResponse('Online Solution CSC Center, Naya Bazar, Pandey Muhalla, Dhanbad, Jharkhand 826001')

class HomePageView(TemplateView):
    def get(self, request, **kwargs):
        return render(request, 'index.html', context=None)    


def db(request):

    greeting = Greeting()
    greeting.save()

    greetings = Greeting.objects.all()

    return render(request, "db.html", {"greetings": greetings})
