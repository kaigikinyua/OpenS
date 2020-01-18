var blogs=document.querySelectorAll('.blogTile');
//var authers=document.querySelectorAll('i.author');
var search=document.getElementById('search');
search.addEventListener('keyup',function(){
    var text=document.getElementById('search').value;
   blogs.forEach(tile=>{
       var title_cover=tile.querySelector('h3.title');
       var title=title_cover.innerHTML;
       var author=tile.querySelector('i.auhor');
        if(title.toLowerCase().indexOf(text.toLowerCase())!=-1){
            tile.style.display="block";
        }else{
            tile.style.display="none";
        }
   }) 
});