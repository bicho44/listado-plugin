$("#get").click(function () {
   var ytl = $( "#youtubeLink" ).val();
   var yti = ytl.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);
   $( "#msg" ).html( "<h1>YouTube Thumbnail</h1><p><img src=\"http://i3.ytimg.com/vi/" + yti[1] + "/hqdefault.jpg\" class=\"image\" /></p><h2>Image URL:</h2><br /><input name=\"imageURL\" id=\"copyimageURL\" class=\"text\" size=\"70\" type=\"text\" value=\"http://i3.ytimg.com/vi/"+ yti[1] + "/hqdefault.jpg\" onclick=\"this.select()\" readonly /><p>Right/Ctrl Click the image to download.  Highlight the URL above and copy to your clipboard.</p>" );
});
