$.getJSON("article.json", function(view) {
  $.each(view, function(key, value) {
    $("#one").append('<article><span class="image"><img src="'+value.picture+'"></span><header class="major"><h3>'+value.title+'</h3><p>'+value.content+'</p><br><br><p>Ditulis oleh '+value.author+'</p><p>Pada '+value.create+'</p></header></article>')
  });
});

// <article>
//   <span class="image">
//     <img src="<?=$row['picture'];?>">
//   </span>
//   <header class="major">
//     <h3><?=$row['title']?></h3>
//     <p><?=$row['content']?></p>
//     <br><br>
//     <p>Ditulis oleh <?=$row['author']?></p>
//     <p>Pada <?=$row['create']?></p>
//   </header>
// </article>
