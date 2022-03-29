let btnEdit = document.getElementById("btnEdit");
btnEdit.addEventListener("click", function(){
    alert('Account Edited');
});

let btnDelete = document.getElementById("btnDelete");
btnDelete.addEventListener("click", function(){
    $("#confirmationModal").foundation("open");
});

let btnConfirmCancel = document.getElementById("btnConfirmCancel");
btnConfirmCancel.addEventListener("click", function(){
    $("#confirmationModal").foundation("close");
});

let btnConfirmDelete = document.getElementById("btnConfirmDelete");
btnConfirmDelete.addEventListener("click", function(){
    location.reload();
});

let btnLogout = document.getElementById("btnLogout");
btnLogout.addEventListener("click", function(){
    logout();
});

async function logout() {
    let data;

    let realPath = location.href.replace(/[^/]*$/, '');

    await fetch(realPath + "logoutUser",
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
