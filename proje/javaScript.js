var add=document.getElementById("addToDo");
var input=document.getElementById("inputfield");
var todocontainer=document.getElementById("toDoContainer");
var saveButton=todocontainer.getElementById('saveButton');
add.addEventListener('click',addItem);
input.addEventListener('keypress',function(e){
    if(e.key=="Enter"){
        addItem();
    }

});

function addItem(e){
    
    const item_value= input.value;
    const item=document.createElement('div');
    if(item_value==null||item_value==''){
       
        alert('Lütfen bu alanı boş bırakmayınız!');
        return;
    }

    
    
  

    item.classList.add('item');
    item.classList.add('row');
    item.classList.add('mt-2');
    

    const item_content=document.createElement('div');
    item_content.classList.add('content');
    item.appendChild(item_content);
    
    

    const input_item=document.createElement('input');
    

    input_item.classList.add('text');
    input_item.type='text';
    input_item.value=item_value;
 
    input_item.classList.add('form-control');
    input_item.setAttribute('readonly','readonly');
    input_item.addEventListener('dblclick',function(){
        input_item.style.textDecoration="line-through";

    })
    item_content.classList.add('col-8');
    item_content.appendChild(input_item);
    input.value='';

    const item_action=document.createElement('div');
    item_action.classList.add('col-4');

    const edit_item=document.createElement('button');
  
    edit_item.classList.add('edit','btn','btn-success');
    edit_item.type="button";
    edit_item.innerText='Düzenle';

    const delete_item=document.createElement('button');

    delete_item.classList.add('delete','btn','btn-danger', 'ms-2');
    const icon=document.createElement('i');
    icon.classList.add('fa','fa-trash');
    delete_item.addEventListener('click', (e) => {
        Swal.fire({
            title: "Emin misiniz?",
            text: "Bu işlemi geri alamayacaksınız!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Evet, sil!",
            cancelButtonText: "Hayır, iptal!",
            reverseButtons: true
        }).then((result) => {
            if (!result.isDismissed) { 
            if (result.isConfirmed) {
                
                todocontainer.removeChild(item);
                Swal.fire({
                    title: "Silindi!",
                    text: "Görev başarıyla silindi.",
                    icon: "success"
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                
                Swal.fire({
                    
                    title: "İptal edildi",
                    text: "Görev silinmedi :)",
                    icon: "error"
                });
        
                }    }
        });

    });
   
    delete_item.appendChild(icon);
    
    item_action.appendChild(edit_item);
    item_action.appendChild(delete_item);
    item.appendChild(item_action);
    todocontainer.appendChild(item);

    edit_item.addEventListener('click',(e)=>{
        if(edit_item.innerText.toLowerCase()=="düzenle"){
            edit_item.innerText="düzenle";
            input_item.removeAttribute("readonly");
            input_item.focus();

        }else{
            edit_item.innerText="Edit";
              input_item.setAttribute("readonly","readonly");
        }
    });
   
    
  

    
    

    


    





    
    
    

   
     

    
    



}


   