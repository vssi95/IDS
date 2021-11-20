$(document).ready(function(){

	//api key from Google Developer console
	var API_KEY = "AIzaSyDfkiJDNMie8R7_qabvM2RR5om8g5-BQo4"

	var video = ''

	//request from "form"
	$("form").submit(function(event){

		//prevent auto-completion of form
		event.preventDefault()

		//query by user
		var search = $("#search").val()

		videoSearch(API_KEY, search, 12) //display 12 videos max on one page
	})

	function videoSearch(key, search, maxResults){
		//get request from "form"
		$.get("https://www.googleapis.com/youtube/v3/search?key=" + key + "&type=video&part=snippet&maxResults=" + maxResults + "&q=" + search, function(data){
			console.log(data)

			data.items.forEach(item => {

				//fetch videos to be displayed
				video = `

				<iframe width="420" height="315" src="http://www.youtube.com/embed/${item.id.videoId}" frameborder="0" allowfullscreen></iframe>

				`

				//display videos in div
				$("#videos").append(video)
			})
		})
	}
})