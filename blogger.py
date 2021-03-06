from flask import Flask,render_template
from reader import Reader

app=Flask(__name__)

@app.route('/')
def index():
    return render_template("index.html")

@app.route('/bloglist')
def bloglist():
    bloglist=Reader.get_blog_list()
    if(bloglist!='404'):
        return render_template("blogs/bloglist.html",blogs=bloglist)
    else:
        return render_template("404.html")

@app.route('/blog/<int:id>')
def readBlog(id):
    b=Reader()
    blog=b.get_blog(id)
    return render_template("blogs/blog.html",blog=blog)


#blogger
@app.route('/blogger/<int:id>')
def bloggerPage(id):
    pass
    
@app.route('/postblog')
def postBlog():
    pass


#admin
@app.route('/adminlogin')
def admin():
    #get request return template
    return render_template("Admin/login.html")
    #post request get data -> authenticate ->login

@app.route('/adminpage')
def adminPage():
    return render_template("Admin/admin_page.html")

if __name__=="__main__":
    app.run(debug=True)