var app = new Vue({
	  el: '#app',
	  data: function(){
	  	return{
	  	ship: []
	  }
	  }, methods: {
	  	fetch(){
	  		let result = axios.get("https://swapi.co/api/starships/")
			.then(res => {
				this.ship = res.data.results;
				console.log(res.data);
			})	
			.catch(err =>{
				console.log(err);
			})

	  	}
	  }
	})
function toggle_visibility(id){
		var e = document.getElementById(id);
		if(e.style.display=='block')
			e.style.display = 'none';
		else
			e.style.display = 'block';
		}
