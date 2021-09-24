window.addEventListener('DOMContentLoaded', ()=>{
    let boxMessage = document.querySelector('.box-message')
    let receiver =  document.getElementById("receiver");
    let sender = document.getElementById("sender");
    formData = new FormData()
    formData.append('receiver', receiver.value)
    formData.append('sender', sender.value)
    fetch('http://projet-final.loc/message/'+receiver.value+'/new', {
            method: "post",
            body: formData,
        }).then((response)=>{
           return response.json()
        }).then((data)=>{
            console.log(data);
            data.formEach((message)=>{
                if (message.sender.id == ) {
                    
                    boxMessage.innerHTML += `
                    <div class="row sender-row display-lign font-controll-message-name">
                    <div class="col-3 d-flex justify-content-end align-items-center">     
                        <a href="http://projet-final.loc/user/${message.sender.id}" ><img class="profile-picture-message-send d-flex justify-content-center align-items-center" src="{{asset('assets/uploads/profilePicture/') ~ message.sender.profile_picture}}"/></a>
                        <div class="name-user">${message.sender.id}</div>
                        <div class="col-7 d-flex justify-content-end align-items-center font-controll-message">
                            <div>{{message.content|striptags('<a>')|raw }}</div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                <div class="d-flex flex-row-reverse hour-send">{{message.sendAt|date("d M H:i")}}</div>
                    ` 
                }else{
                    boxMessage.innerHTML += `
                    
                    `
                }
            })
            
        })
})


function send(){
        let receiver =  document.getElementById("receiver");
        let sender = document.getElementById("sender");
        let content = document.getElementById("content");

        formData = new FormData()
        formData.append('receiver', receiver.value)
        formData.append('sender', sender.value)
        formData.append('content', content.value)
       console.log(content.value, receiver.value, sender.value);
        fetch('http://projet-final.loc/message/'+receiver.value+'/new', {
            method: "post",
            body: formData,
        }).then((response)=>{
           return response.json()

           
        }).then((data)=>{
            console.log(data);
            content.value=""; 
            
        })
}


