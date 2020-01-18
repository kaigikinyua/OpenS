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
@app.route('/read')
def readBlog():
    return render_template("blogs/blog.html")

@app.route('/adminlogin')
def admin():
    return render_template("Admin/admin_login.html")

if __name__=="__main__":
    app.run(debug=True)