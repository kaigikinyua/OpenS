import os
import json
class Reader:

    @staticmethod
    def get_blog_list():
        f=Files()
        bloglist=f.get_blogList()
        if(bloglist!=False):
            return bloglist
        else:
            return '404'

    @staticmethod
    def get_writters_bloglist(email):
        pass

    def get_blog(self,blogID):
        f=Files()
        search=f.get_blog(blogID)
        if(search!=False or search!='Blog not found'):
            return search
        else:
            if(search=='Blog not found'):
                return '404'
            else:
                return False

class Writter(Reader):
    def authenticate(self,email,password):
        pass

    def hash(self,text):
        if(len(text)>0):
            pass
        else:
            return False
    
    def save_blog(blogTitle,title,content,auther,email):
        pass

class Files:
    def __init__(self):
        self.folder="./"
        self.blogs="./Blogs/writtenBlogs.json"

    @staticmethod
    def readJson(filename):
        try:
            with open(filename,'r') as file:
                data=json.load(file)
                file.close()
                return data
        except:
            print("Error while reading from "+self.blogs)
            return False

    def saveBlog(self,email,auther,title,content):
        pass 
    
    def fileExists(self,filename):
        pass
    
    def get_blog(self,id):
        data=Files.readJson(self.blogs)
        if data!=False:
            found=False
            for blog in data['Blogs']:
                if(blog['blogid']==str(id)):
                    return blog
            return 'Blog not found'
        else:
            return False

    def get_blogList(self):        
        data=Files.readJson(self.blogs)
        if data!=False:
            return data['Blogs']
        else:
            return False
