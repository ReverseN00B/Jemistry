let chkbox = document.getElementById('chkbox');
let sub_btn = document.getElementById('sub_btn');

function isChecked(chkbox){
    

    if(chkbox.checked===true){
        sub_btn.disabled = false;
    }
    else{
        sub_btn.disabled = true;
    }
}