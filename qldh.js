
function save(){
	let fullname = document.getElementById('fullname').value;
	let soluong = document.getElementById('soluong').value;
	let mausac = document.getElementById('mausac').value;
	let dongia = document.getElementById('dongia').value;
    let aa = document.getElementById('aa').value;
	let gender ='';
	

    console.log(fullname, soluong, mausac, dongia);

    if(_.isEmpty(fullname)){
    	document.getElementById('fullname-error').innerHTML = 'Vui long nhap admin';
    
    }else if(fullname.trim().length <= 2){
         document.getElementById('fullname-error').innerHTML ='Vui lòng không nhập dưới 2 ký tự';
    

    }else{document.getElementById('fullname-error').innerHTML ='';

    }

}
