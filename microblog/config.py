import os
basedir = os.path.abspath(os.path.dirname(__file__))
#The Flask-WTF extension uses it to protect web forms against a nasty attack called Cross-Site Request Forgery or CSRF 
class Config(object):
    SECRET_KEY = os.environ.get('SECRET_KEY') or 'you-will-never-guess'
    SQLALCHEMY_DATABASE_URI = os.environ.get('DATABASE_URL') or \
        'sqlite:///' + os.path.join(basedir, 'app.db')
    SQLALCHEMY_TRACK_MODIFICATIONS = False
