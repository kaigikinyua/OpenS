var blogs=document.querySelectorAll('.blogTile');
var authers=document.querySelectorAll('i.author');
var search=document.getElementById('search');
search.addEventListener('keyup',function(){
    var text=document.getElementById('search').value;
    var found=0
    blogs.forEach(tile=>{
        text=text.toLowerCase()
        var title_cover=tile.querySelector('h3.title');
        var title=title_cover.innerHTML;
        var author_container=tile.querySelector('i.author');
        var author=author_container.innerText
         if(title.toLowerCase().indexOf(text)!=-1 || author.toLowerCase().indexOf(text)!=-1){
             tile.style.display="block";
             found=1
         }else{
             tile.style.display="none";
         }
    });
    if(found==0){
        var notfound=document.querySelector('.notfound');
        notfound.style.display="block"
    }else{
        var notfound=document.querySelector('.notfound');
        notfound.style.display="none"
    }
});