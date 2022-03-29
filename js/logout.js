let btnLogout = document.getElementById("btnLogout");
btnLogout.addEventListener("click", function(){
    logout();
});

async function logout() {
    let data;

//    await fetch(window.location.pathname + "logoutUser",
    await fetch(window.location.pathname + "logoutUser",		
		{
		    method: "POST",
		    mode: 'no-cors',
		    headers: {
			'Accept': 'application/json',
			'Content-Type': 'application/json'
		    },
		    data: data
		}
	       ).then((response) => {

		   if (response.status >= 400 && response.status < 600) {
		       throw new Error("Bad response from server");
		   }	
		   return response.json();

	       }).then((returnedResponse) => {

		   if(returnedResponse['result'] == "Success"){
		       location.href = "https://www.bluebeam.com";
		   }else{
		       alert('There was a problem: Failure');
		   }

	       }).catch((error) => {
		   // Your error is here!
		   console.log(error)
	       });
};
