var app = new Vue({
	  el: '#app',
	  data: function(){
	  	return{
	  	film: []
	  }
	  }, methods: {
	  	fetch(){
	  		let result = axios.get("https://swapi.co/api/films/")
			.then(res => {
				this.film = res.data.results;
				console.log(res.data);
			})	
			.catch(err =>{
				console.log(err);
			})

	  	}
	  }
	})