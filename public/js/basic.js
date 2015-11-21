//document.getElementById("my_img").addEventListener("click", function(){
    var login = function(pass){
		var isPassword = prompt('비밀번호를 입력하세요', 'PASSWORD');
		
		if (isPassword === pass) {
			// 세션에 저장
			// $_SESSION["auth"] = "admin";
		} else {
			alert("비밀번호를 다시 확인해주세요.");
		}
	};
//});