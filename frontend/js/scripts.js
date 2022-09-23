
$(document).ready(() => {
    $.ajax({
      type: "GET",
      url: "http://localhost/news-website/news-website/backend/articles.php",
      success: (json) => {
        let data = JSON.parse(json);
        console.log(data);
        let text = document.getElementById('title');
        let title = document.getElementById('text')

    }

      })
    })