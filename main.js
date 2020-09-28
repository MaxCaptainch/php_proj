const  backgroundMat = document.querySelector(".background-mat"),
		   updateUser = document.querySelector(".update-user");
function update_user(event){
	const  userInfo = event.target.parentNode,
		   userUpdate = document.querySelector(".update-user-modal__form");
	
	backgroundMat.style.display = "block";
	updateUser.style.display = "flex";
	userUpdate.children[0].value = userInfo.children[0].value;
	for(let i=1;i<6;i++){
		userUpdate.children[i].value = userInfo.children[i].innerHTML; 
	}

};

function hideModal(){
	backgroundMat.style.display = "none";
	updateUser.style.display = "none";
};

