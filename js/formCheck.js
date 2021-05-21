var adi = document.getElementById('name');
var email = document.getElementById('email');
var message = document.getElementById('message');
var submitBtn = document.getElementById('submit-btn');
var clearBtn = document.getElementById('clear');

(function(){
    submitBtn.addEventListener('submit',function(e){
        e.preventDefault();
    
        if(adi.value === ' ' || email.value === ' ' || message.value === ' ')
        {
            alert('adi mail ve mesaj alani bos olamaz');
        }
        else{
            this.submit();
        }
    })
})();


clearBtn.addEventListener('click',()=>{
    adi.value = ' '; 
    email.value = ' ';
    message.value = ' ';
})