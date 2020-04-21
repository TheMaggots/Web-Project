from flask import render_template
from app import app

@app.route('/')
@app.route('/index')
def index():
    user = {'username': 'Siddharth'}
    posts = [
        {
            'author': {'username': 'Akash'},
            'body': 'Beautiful day playing DOTA'
        },
        {
            'author': {'username': 'Avinash'},
            'body': 'Joker movie was so cool!'
        }
    ]
    return render_template('index.html', title='Home', user=user, posts=posts)
