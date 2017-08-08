$.ajax({
        url: 'https://api.rss2json.com/v1/api.json',
        method: 'GET',
        dataType: 'json',
        data: {
            // truncated URLs are no longer allowed for user profiles :(
            rss_url: 'https://medium.com/feed/ux-tools?truncated=true',
        }
}).done(function (response) {
    if(response.status != 'ok'){ throw response.message; }
        values = response.items;
        var output = '<ul>';

        var total = 0;

        for (var i = 0; i < values.length; i++) {
            var mediumArticle = values[i];

            //console.log(mediumArticle);
            
            if( total < 3){
               output += '<li><div class="image-container"' + mediumArticle["content"]+ '</div><a href="' + mediumArticle["link"] + '"><h4>' + mediumArticle["title"].replace("in UX Tools", "").replace(/"/g, "") + '</h4></a></li>';
               total ++;
            }
        }
        output += '</ul>';
        $("#medium").html(output);
});